<?php
	/**
	 *
	 * Tidypics image object views
	 */

	global $CONFIG;	
	$file = $vars['entity'];
	$file_guid = $file->getGUID();
	$tags = $file->tags;
	$title = $file->title;
	$desc = $file->description;
	$owner = $vars['entity']->getOwnerEntity();
	$friendlytime = friendly_time($vars['entity']->time_created);
	
	$mime = $file->mimetype;
	
	if (get_context() == "search") { //if this is the search view
		
		if (get_input('search_viewtype') == "gallery") {
			?> 
			<div class="tidypics_album_images">
				<a href="<?php echo $file->getURL();?>"><img src="<?php echo $vars['url'];?>mod/tidypics/thumbnail.php?file_guid=<?php echo $file_guid;?>&size=small" border="0" alt="thumbnail"/></a>
			</div>
			<?php
		}
		else{
			//image list-entity view
			$info = '<p><a href="' .$file->getURL(). '">'.$title.'</a></p>';
			$info .= "<p class=\"owner_timestamp\"><a href=\"{$vars['url']}pg/photos/owned/{$owner->username}\">{$owner->name}</a> {$friendlytime}";
			$numcomments = elgg_count_comments($file);
			if ($numcomments)
				$info .= ", <a href=\"{$file->getURL()}\">" . sprintf(elgg_echo("comments")) . " (" . $numcomments . ")</a>";
			$info .= "</p>";				
			$icon = "<a href=\"{$file->getURL()}\">" . elgg_view("tidypics/icon", array("mimetype" => $mime, 'thumbnail' => $file->thumbnail, 'file_guid' => $file_guid, 'size' => 'small')) . "</a>";
			
			echo elgg_view_listing($icon, $info);
		}
	} else {

		if (!$vars['full']) { 

//simple gallery view
?> 
	<div class="tidypics_album_images">
		<a href="<?php echo $file->getURL();?>"><img src="<?php echo $vars['url'];?>mod/tidypics/thumbnail.php?file_guid=<?php echo $file_guid;?>&size=small" border="0" alt="thumbnail"/></a>
	</div>
<?php
		} else {

////////////////////////////////////////////////////////
//
//  tidypics individual image display
//
////////////////////////////////////////////////////////


			// Build back and next links

			$back = '';
			$next = '';

			$album = get_entity($file->container_guid);

			$current = array_search($file_guid, $_SESSION['image_sort']);

			if (!$current) {  // means we are no longer using the correct album array

				//rebuild the array
				$count = get_entities("object","image", $album->guid, '', 999);
				$_SESSION['image_sort'] = array();

				foreach ($count as $image) {
					array_push($_SESSION['image_sort'], $image->guid);
				}
			
				$current = array_search($file_guid, $_SESSION['image_sort']);
			}
		
			if ($current != 0)
				$back = '<a href="' .$vars['url'] . 'pg/photos/view/' . $_SESSION['image_sort'][$current-1] . '">&#60;&#60;' . elgg_echo('image:back') . '</a>';
		
			if (sizeof($_SESSION['image_sort']) > $current)
				$next = '<a href="' . $vars['url'] . 'pg/photos/view/' . $_SESSION['image_sort'][$current+1] . '">' . elgg_echo('image:next') . '&#62;&#62;</a>';


?>
<div class="contentWrapper">
	<div id="tidypics_wrapper">

		<div id="tidypics_desc">
			<?php echo autop($desc); ?> 
		</div>
		<div id="tidypics_image_nav">
			<?php echo $back . $next; ?>
		</div>
		<div id="tidypics_image_wrapper"><div style="text-align:center;">
			<div id="tidypics_image_frame">
			<?php echo '<img id="tidypics_image"' . ' src="' . $vars['url'] . 'mod/tidypics/thumbnail.php?file_guid=' . $file_guid . '&size=large" alt="' . $title . '"/>'; ?></div>
			</div>
			<div class="clearfloat"></div>
		</div>
		<div id="tidypics_controls">
			<ul>
				<li><a href="javascript:void(0)" onclick="showInfoTag()"><?= elgg_echo('image:tagthisphoto') ?></a></li>
				<li><a href="<?php echo $vars['url']; ?>action/tidypics/download?file_guid=<?php echo $file_guid; ?>"><?php echo elgg_echo("image:download"); ?></a></li>
			</ul>
		</div>
		<div id="tidypics_info">
<?php
			if (!is_null($tags)) {
?>
			<div class="object_tag_string"><?php echo elgg_view('output/tags',array('value' => $tags));?></div>
<?php
			}
 
			echo elgg_echo('image:by');?> <b><a href="<?php echo $vars['url']; ?>pg/profile/<?php echo $owner->username; ?>"><?php echo $owner->name; ?></a></b>  <?php echo $friendlytime; 
?>
		</div>

<div id='tagging_instructions'>
	<table>
		<tbody>
			<tr>
				<td width='375' align='center'><div id='instructions_default_message'><?php echo elgg_echo('image:doclickfortag'); ?></div></td>
				<td valign='middle'><button class='submit_button' onclick='closeInfoTag()'><?php echo elgg_echo('image:finish_tagging'); ?></button></td>
			</tr>
		</tbody>
	</table>
</div>

	</div> <!-- tidypics wrapper-->

<?php 

			echo elgg_view_comments($file);

			echo '</div>';  // content wrapper
		} // // end of individual image display

	}
?>

<script type="text/javascript" src="<?= $vars['url'] ?>mod/tidypics/vendors/jquery.imgareaselect-0.7.js"></script>
<script type="text/javascript" src="<?= $vars['url'] ?>mod/tidypics/vendors/jquery.quicksearch.js"></script>
 
<script type="text/javascript">

	var coordinates;
/*
	jQuery(document).ready(function(){
	   
		jQuery('#cont-menu ul li').quicksearch({
		  position: 'before',
		  attached: '#cont-menu ul',
		  loaderText: '',
		  inputClass: 'input-filtro',
		  labelText:"<p><?= elgg_echo('image:inserttag') ?></p>",
		  delay: 100
		})
		
		jQuery('#cont-menu ul').before("<p> o escoge a una persona:</p>");
		
		//avoid submit
		jQuery('#quicksearch').submit( function () { addTag()});
		
		
		setTimeout("fixContImage()",1000);
		
		//fix position
		jQuery('#cont-image .phototag em').height()
		
		//Este evento lo que hace es que cuando hace foco en el input se desmarcan todos
		jQuery('.input-filtro').focus(function(){jQuery("#cont-menu li a[class*='selected']").removeClass('selected');})

		});	
		
		
		jQuery('#cont-menu li a').click(function(){
			//Limpiamos todos
			jQuery("#cont-menu li a[class*='selected']").removeClass('selected');

			jQuery(this).toggleClass('selected');
		})
		
		
	

*/

	function showInfoTag() 
	{
		if ( $('#tagging_instructions').is(':hidden') )
		{
			$('#tagging_instructions').show();
			activeTagSystem();
		}
	}

	function closeInfoTag()
	{
		$('#tagging_instructions').hide();
		//$('#cont-menu').hide();
		$('img#tidypics_image').imgAreaSelect( {hide: true} );
	}

	function activeTagSystem()
	{
		$('img#tidypics_image').imgAreaSelect( { 
			borderWidth: 2,
			borderColor1: 'white',
			borderColor2: 'white'
			}
		);
/*
		$('.imgareaselect-handle').css('opacity', 0.7);

		$('img#tidypics_image').imgAreaSelect( {selectionColor: 'white',
												maxWidth: 200, 
												maxHeight: 200,
												minWidth: 60, 
												minHeight: 60,
												borderWidth: 2,
												onSelectEnd: showMenu,
												onSelectStart: hideMenu} ); 
*/
	}

	function hideMenu()
	{
		//$('#cont-menu').hide();
		coordinates = "";
	}

	function showMenu(oObject, oCoordenates)
	{
		constX = -70;
		constY = 1;

		// show the list of friends
		if (oCoordenates.width != 0 && oCoordenates.height != 0) {
			coordinates = oCoordenates;
/*
			$('#cont-menu').show().css({
				"margin-top": oCoordenates.y2+constY + "px",
				"margin-left": oCoordenates.x2+constX + "px"
			});
*/
			//jQuery(".input-filtro").focus();
		}
	}
	
/*
	function addTag()
	{
		jQuery('#phototagging-menu li:hidden').find('a').removeClass('selected');
		oForm = jQuery('#quicksearch');
		oEl = jQuery('#quicksearch ul li:has(.selected)');
		if(jQuery('#quicksearch ul li:has(.selected)').length == 1)
			oForm.append("<input type='hidden' name='user_id' value='" + oEl.find('a').attr('rel') + "'")
		else
			oForm.append("<input type='hidden' name='word' value='" + oForm.find('input.input-filtro').val() + "'")
			
		if(coordinates.x1!=0)
		{
			sStr = "";
			for (x in coordinates)
				sStr += x + ':' + coordinates[x] + '/';

			oForm.append("<input type='hidden' name='coordinates' value='" + sStr + "' />");
		
		}
	
		//Show loading	
		jQuery("#cont-menu label, #cont-menu input, #cont-menu p, #cont-menu span, #cont-menu button, #cont-menu ul, #cont-menu fieldset").hide();
		jQuery("#cont-menu ").append('<div align="center" class="ajax_loader"></div>');		
	
		
		return false;
		//oForm.submit();
	
	}
	
	jQuery(".phototag span").hover(function() {
		jQuery(this).prev("em").stop(true, true).animate({opacity: "show"}, "fast").css({'display':'block','-moz-border-radius-topleft':'2px','-moz-border-radius-topright':'2px','-moz-border-radius-bottomleft':'2px','-moz-border-radius-bottomright':'2px'});
	}, function() {
	jQuery(this).prev("em").animate({opacity: "hide"}, "fast");
	});
	
	function fixContImage()
	{
		jQuery('#cont-image').width(jQuery('#cont-image img').width()); 
		jQuery('#cont-image').height(jQuery('#cont-image img').height());
		setTimeout("if(jQuery('#cont-image').width() < jQuery('#cont-image img').width()) setTimeout(\"fixContImage()\",500);",300);
	}
	
	jQuery('a.phototag-links').hover(function() {
		iRel = jQuery(this).attr('rel');
		jQuery('div.phototag[rel*='+ iRel + ']').find("em").stop(true, true).animate({opacity: "show"}, "fast").css({'display':'block','-moz-border-radius-topleft':'2px','-moz-border-radius-topright':'2px','-moz-border-radius-bottomleft':'0px','-moz-border-radius-bottomright':'0px'});
		jQuery('div.phototag[rel*='+ iRel + ']').find("span").css({'border':'1px solid white','border-top':'none'} );
	}, function() {
	iRel = jQuery(this).attr('rel');
	jQuery('div.phototag[rel*='+ iRel + ']').find("em").animate({opacity: "hide"}, "fast");
	jQuery('div.phototag[rel*='+ iRel + ']').find("span").css("border","none");
	
	});
*/
</script>