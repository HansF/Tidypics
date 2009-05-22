<?
	global $CONFIG;  
	$system_url = $CONFIG->wwwroot . 'mod/tidypics/system.php';
?>

<p>
<a href="<?php echo $system_url; ?>">Run Server Analysis</a>
</p>

<?php
	$image_lib = $vars['entity']->image_lib;
	if (!$image_lib) $image_lib = 'GD';
?>
<p>
	<?php echo elgg_echo('tidypics:image_lib'); ?>
	
	<?php
		echo elgg_view('input/pulldown', array(
			'internalname' => 'params[image_lib]',
			'options_values' => array(
				'GD' => 'GD',
				'ImageMagick' => 'ImageMagick',
			),
			'value' => $image_lib
		));
	?>
	<br />
	<?php
		$im_path = $vars['entity']->im_path;
		if(!$im_path) $im_path = "/usr/bin/";
	?>
	<?php echo elgg_echo('tidypics:settings:im_path'); ?>
	<?php echo elgg_view('input/text', array('internalname' => 'params[im_path]', 'value' => $im_path)); ?>
</p>

<?php
	$maxfilesize = $vars['entity']->maxfilesize;
	if (!$maxfilesize) $maxfilesize = (int) 5; //set the default maximum file size to 5MB
		
?>
<p>
	<?php echo elgg_echo('tidypics:settings:maxfilesize'); ?>
	
	<?php echo elgg_view('input/text', array('internalname' => 'params[maxfilesize]', 'value' => $maxfilesize)); ?>
</p>
<?php
	$image_lib = $vars['entity']->image_lib;
	if (!$image_lib) $image_lib = 'GD';
?>
<p>
	<?php 
		echo elgg_echo('tidypics:settings:download_link'); 
		$download_link = $vars['entity']->download_link;
		if (!$download_link) $download_link = 'yes';
	?>
	
	<?php
		echo elgg_view('input/pulldown', array(
			'internalname' => 'params[download_link]',
			'options_values' => array(
				'yes' => 'yes',
				'no' => 'no',
			),
			'value' => $download_link));
	?>
</p>
<p>
	<?php 
		echo elgg_echo('tidypics:settings:river_view'); 
		$river_view = $vars['entity']->river_view;
		if (!$river_view) $river_view = 'all';
	?>
	
	<?php
		echo elgg_view('input/pulldown', array(
			'internalname' => 'params[river_view]',
			'options_values' => array(
				'all' => 'all',
				'1' => '1',
				'none' => 'none'
			),
			'value' => $river_view));
	?>
</p>

<?php
	$watermark_text = $vars['entity']->watermark_text;
	if(!$watermark_text) $watermark_text = "";
?>
<p>
	<?php echo elgg_echo('tidypics:settings:watermark'); ?>
	<?php echo elgg_view('input/text', array('internalname' => 'params[watermark_text]', 'value' => $watermark_text)); ?>
</p>