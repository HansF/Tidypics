<?php

$nederlands = array(
		// hack for core bug
			'untitled' => "naamloos",

		// Menu items and titles
			'image' => "Afbeelding",
			'images' => "Afbeeldingen",
			'caption' => "Caption",
			'photos' => "Foto's",
			'album' => "Fotoalbum",
			'albums' => "Fotoalbums",
			'tidypics:disabled' => 'Afzetten',
			'tidypics:enabled' => 'Aanzetten',
			'admin:settings:photos' => 'Tidypics',

			'photos:add' => "Maak album",
			'images:upload' => "Upload foto's",

			'album:slideshow' => "Diavoorstelling",
			'album:yours' => "Jouw fotoalbums",
			'album:yours:friends' => "Fotoalbums van vrienden",
			'album:user' => "Fotoalbums van %s'",
			'album:friends' => "Friends' photo albums",
			'album:all' => "Alle fotoalbums",
			'photos:group' => "Groepsfoto's",
			'item:object:image' => "Foto's",
			'item:object:album' => "Albums",
			'tidypics:uploading:images' => "Even geduld. Afbeeldingen aan het laden.",
			'tidypics:enablephotos' => 'Enable group photo albums',
			'tidypics:editprops' => 'Edit Image Properties',
			'tidypics:mostcommented' => 'Meest becommentarieerde afbeeldingen',
			'tidypics:mostcommentedthismonth' => 'Meest becommentarieerd deze maand',
			'tidypics:mostcommentedtoday' => 'Meest becommentarieerd vandaag',
			'tidypics:mostviewed' => 'Meest bekeken afbeeldingen',
			'tidypics:mostvieweddashboard' => 'Meest bekeken dashboard',
			'tidypics:mostviewedthisyear' => 'Meest bekeken dit jaar',
			'tidypics:mostviewedthismonth' => 'Meest bekeken deze maand',
			'tidypics:mostviewedlastmonth' => 'Meest bekeken afgelopen maand',
			'tidypics:mostviewedtoday' => 'Meest bekeken vandaag',
			'tidypics:recentlyviewed' => 'Onlangs bekeken afbeeldingen',
			'tidypics:recentlycommented' => 'Recent becommentarieerd',
			'tidypics:mostrecent' => 'Nieuwste afbeeldingen',
			'tidypics:yourmostviewed' => 'Uw meest bekeken afbeeldingen',
			'tidypics:yourmostrecent' => 'Uw nieuwste afbeeldingen',
			'tidypics:friendmostviewed' => "%s's meest bekeken afbeeldingen",
			'tidypics:friendmostrecent' => "%s's nieuwste afbeeldingen",
			'tidypics:highestrated' => "Hoogst gewaardeerde afbeeldingen",
			'tidypics:views' => "%s views",
			'tidypics:viewsbyowner' => "door %s gebruikers (jij niet inbegrepen)",
			'tidypics:viewsbyothers' => "(%s door jou)",
			'tidypics:administration' => 'Tidypics Administration',
			'tidypics:stats' => 'Stats',
			'tidypics:nophotosingroup' => 'Deze groep heeft nog geen foto&rsquo;s',
			'tidypics:upgrade' => 'Upgrade',
			'tidypics:sort' => ' %s album aan het sorteren',
			'tidypics:none' => 'Geen fotoalbums',
			
		//settings
			'tidypics:settings' => 'Instellingen',
			'tidypics:settings:main' => 'Hoofdinstellingen',
			'tidypics:settings:image_lib' => "Afbeeldingenbibliotheek",
			'tidypics:settings:thumbnail' => "Thumbnail Creation",
			'tidypics:settings:help' => "Help",
			'tidypics:settings:download_link' => "Toon downloadlink",
			'tidypics:settings:tagging' => "Tag foto inschakelen",
			'tidypics:settings:photo_ratings' => "Enable photo ratings (requires rate plugin of Miguel Montes or compatible)",
			'tidypics:settings:exif' => "Display EXIF data",
			'tidypics:settings:view_count' => "Display view count",
			'tidypics:settings:uploader' => "Gebruik Flash uploader",
			'tidypics:settings:grp_perm_override' => "Geef groepsleden volledige toegang tot groepsalbums",
			'tidypics:settings:maxfilesize' => "Maximum afbeeldingsgrootte in megabyte (MB):",
			'tidypics:settings:quota' => "User Quota (MB) - 0 equals no quota",
			'tidypics:settings:watermark' => "Enter text to appear in the watermark",
			'tidypics:settings:im_path' => "Enter the path to your ImageMagick commands",
			'tidypics:settings:img_river_view' => "How many entries in activity river for each batch of uploaded images",
			'tidypics:settings:album_river_view' => "Toon albumcover of een fotoset voor nieuw album",
			'tidypics:settings:largesize' => "Primary image size",
			'tidypics:settings:smallsize' => "Album view image size",
			'tidypics:settings:tinysize' => "Thumbnail afbeeldingsgrootte",
			'tidypics:settings:sizes:instructs' => 'You may need to change the CSS if you change the default sizes',
			'tidypics:settings:im_id' => "Image ID",
			'tidypics:settings:heading:img_lib' => "Instellingen afbeeldingsbibliotheek",
			'tidypics:settings:heading:main' => "Hoofdinstellingen",
			'tidypics:settings:heading:river' => "Activity Integration Options",
			'tidypics:settings:heading:sizes' => "Grootte Thumbnail",
			'tidypics:settings:heading:groups' => "Instellingen groep",
			'tidypics:option:all' => 'All',
			'tidypics:option:none' => 'Geen',
			'tidypics:option:cover' => 'Cover',
			'tidypics:option:set' => 'Set',

		// server analysis
			'tidypics:server_info' => 'Server Information',
			'tidypics:server_info:gd_desc' => 'Elgg requires the GD extension to be loaded',
			'tidypics:server_info:exec_desc' => 'Required for ImageMagick command line',
			'tidypics:server_info:memory_limit_desc' => 'Change memory_limit to increase',
			'tidypics:server_info:peak_usage_desc' => 'This is approximately the minimum per page',
			'tidypics:server_info:upload_max_filesize_desc' => 'Max size of an uploaded image',
			'tidypics:server_info:post_max_size_desc' => 'Max post size = sum of images + html form',
			'tidypics:server_info:max_input_time_desc' => 'Time script waits for upload to finish',
			'tidypics:server_info:max_execution_time_desc' => 'Max time a script will run',
			'tidypics:server_info:use_only_cookies_desc' => 'Cookie only sessions may affect the Flash uploader',

			'tidypics:server_info:php_version' => 'PHP Version',
			'tidypics:server_info:memory_limit' => 'Memory Available to PHP',
			'tidypics:server_info:peak_usage' => 'Memory Used to Load This Page',
			'tidypics:server_info:upload_max_filesize' => 'Max File Upload Size',
			'tidypics:server_info:post_max_size' => 'Max Post Size',
			'tidypics:server_info:max_input_time' => 'Max Input Time',
			'tidypics:server_info:max_execution_time' => 'Max Execution Time',
			'tidypics:server_info:use_only_cookies' => 'Cookie only sessions',

			'tidypics:server_config' => 'Server Configuration',
			'tidypics:server_configuration_doc' => 'Server configuration documentation',

		// ImageMagick test
			'tidypics:lib_tools:testing' =>
	'Tidypics moet de locatie van de ImageMagick executables weten als u ervoor hebt gekozen om ImageMagick 
	te gebruiken voor beeldconversies.
	Uw hostingaanbieder moet in staat zijn u deze gegevens te geven. U kan hieronder testen of de 
	locatie juist is. 
	Als de test lukt, zou het versienummer van de geinstalleerde versie zichtbaar moeten zijn.',

	// thumbnail tool
			'tidypics:thumbnail_tool' => 'Thumbnail Aanmaken',
			'tidypics:thumbnail_tool_blurb' => 
	'Op deze pagina kunt u opnieuw minaituren laten genereren voor de afbeldingen waarvoor dit mislukt is bij de upload. 
	Dit mislukken kan komen doordat het conversieprogramma niet goed gecinfigureerd is of als er te weinig geheugen beschikbaar is. 
	Als de gebruikers problemen hebben gehad met het aanmaken van miniaturen en je hebt de configuratie aangpast kan je dus op deze pagina het aanmaken opnieuw proberen. 
	Vind de unieke identificatie van de foto (het is een getal aan het einde van de url bij het bekijken van
	een foto) en vul hem hieronder in.',
			'tidypics:thumbnail_tool:unknown_image' => 'Niet in staat priginele foto in te laden',
			'tidypics:thumbnail_tool:invalid_image_info' => 'Fout bij ophalen informatie over de foto',
			'tidypics:thumbnail_tool:create_failed' => 'Mislukt om miniaturen aan te maken',
			'tidypics:thumbnail_tool:created' => 'Miniaturen aangemaakt.',

		//actions
			'album:create' => "Maak nieuw album",
			'album:add' => "Voeg fotoalbum toe",
			'album:addpix' => "Voeg foto's toe aan uw album ",
			'album:edit' => "Album opmaken",
			'album:delete' => "Album verwijderen",
			'album:sort' => "Sorteer",
			'image:edit' => "Edit image",
			'image:delete' => "Verwijder afbeelding",
			'image:download' => "Download afbeelding",

		//forms
			'album:title' => "Titel",
			'album:desc' => "Beschrijving",
			'album:tags' => "Tags",
			'album:cover' => "Deze afbeelding als cover gebruiken?",
			'album:cover_link' => 'Maak cover',
			'tidypics:title:quota' => 'Quota',
			'tidypics:quota' => "Quota usage:",
			'tidypics:uploader:choose' => "Kies foto's",
			'tidypics:uploader:upload' => "Upload foto's",
			'tidypics:uploader:describe' => "Beschrijf foto's",
			'tidypics:uploader:filedesc' => 'Image files (jpeg, png, gif)',
			'tidypics:uploader:instructs' => 'Er zijn drie gemakkelijke stappen om fotos toe te voegen aan uw album.Gebruik deze uploader: kiezen, laden en beschrijven. Er is een %s MB maximum per foto. Indien u geen Flash heeft is er ook een <a href="%s">basic uploader</a> beschikbaar.',
			'tidypics:uploader:basic' => 'Je kan tot tien fotos per keer uploaden (%s MB maximum per foto',
			'tidypics:sort:instruct' => 'Sort the album photos by dragging and dropping the images. Then click the save button.',
			'tidypics:sort:no_images' => 'No images found to sort. Upload images using the link above.',

		// albums
			'album:num' => '%s fotos',

		//views
			'image:total' => "Afbeeldingen  in album:",
			'image:by' => "Afbeelding toegevoegd door",
			'album:by' => "Album gemaakt door",
			'album:created:on' => "Created",
			'image:none' => "Nog geen afbeeldingen toegevoegd",
			'image:back' => "Vorige",
			'image:next' => "Volgende ",
			'image:index' => "%u of %u",

		// tagging
			'tidypics:taginstruct' => 'Selecteer de regio die je wil taggen of %s',
			'tidypics:finish_tagging' => 'Stop tagging',
			'tidypics:tagthisphoto' => 'Tag deze foto',
			'tidypics:actiontag' => 'Tag',
			'tidypics:actioncancel' => 'Annuleer',
			'tidypics:inthisphoto' => 'In deze foto',
			'tidypics:usertag' => "Fotos getagged met gebruiker %s",
			'tidypics:phototagging:success' => 'Tag succesvol toegevoegd',
			'tidypics:phototagging:error' => 'Onverwachtte fout opgetreden bij het taggen',

			'tidypics:phototagging:delete:success' => 'Fototag werd verwijderd',
			'tidypics:phototagging:delete:error' => 'Onverwachtte fout opgetreden bij het verwijderen van de tag.',
			'tidypics:phototagging:delete:confirm' => 'Tag verwijderen?',



			'tidypics:tag:subject' => "Je werd getagd in een foto ",
			'tidypics:tag:body' => "Je werd getagd in een foto  %s van %s.			
			
De foto kan hier bekeken worden: %s",


		//rss
			'tidypics:posted' => 'Foto gepost:',

		//widgets
			'tidypics:widget:albums' => "Fotoalbums",
			'tidypics:widget:album_descr' => "Showcase your photo albums",
			'tidypics:widget:num_albums' => "Number of albums to display",
			'tidypics:widget:latest' => "Laatste foto's",
			'tidypics:widget:latest_descr' => "Toon uw laatste foto's",
			'tidypics:widget:num_latest' => "Number of images to display",
			'album:more' => "View all albums",

		//  river
			'river:create:object:image' => "%s uploaded the photo %s",
			'image:river:created' => "%s voegde een foto aan het album toe %s",
			'image:river:created:multiple' => "%s voegde %s foto's toe aan het album %s",
			'image:river:item' => "een foto",
			'image:river:annotate' => "een commentaar op een foto",
			'image:river:tagged' => "%s tagged %s in the photo %s",
			'image:river:tagged:unknown' => "%s tagged %s in a photo",
			'river:create:object:album' => "%s created a new photo album %s",
			'album:river:group' => "in the group",
			'album:river:item' => "an album",
			'album:river:annotate' => "a comment on the photo album",
			'river:comment:object:image' => '%s commented on the photo %s',
			'river:comment:object:album' => '%s commented on the album %s',

		// notifications
			'tidypics:newalbum_subject' => 'Nieuw fotoalbum',
			'tidypics:newalbum' => '%s maakte een nieuw fotoalbum',
			'tidypics:updatealbum' => "%s voegde nieuwe foto's toe aan het album %s",

		//  Status messages
			'tidypics:upl_success' => "Uw afbeeldingen werden succesvol geuploaded.",
			'image:saved' => "Uw afbeelding werd succesvol bewaard.",
			'images:saved' => "Alle afbeeldingen werden succesvol bewaard.",
			'image:deleted' => "Uw afbeelding werd succesvol verwijderd.",
			'image:delete:confirm' => "Ben je zeker dat je deze afbeelding wil verwijderen?",
			'images:edited' => "Uw afbeeldingen werden succesvol aangepast.",
			'album:edited' => "Uw album werd succesvol aangepast.",
			'album:saved' => "Uw album werd succesvol bewaard.",
			'album:deleted' => "Uw album werd succesvol verwijderd.",
			'album:delete:confirm' => "Ben je zeker dat je dit album wil verwijderen?",
			'album:created' => "Your new album has been created.",
			'album:save_cover_image' => 'Cover image saved.',
			'tidypics:settings:save:ok' => 'Successfully saved the Tidypics plugin settings',
			'tidypics:album:sorted' => 'Het album %s is gesorteerd',
			'tidypics:album:could_not_sort' => 'Kan album %s niet sorteren. Kijk of er afbeeldingen in het album staan en probeer opnieuw.',
			'tidypics:upgrade:success' => 'Upgrade of Tidypics a success',

		//Error messages
			'tidypics:baduploadform' => "Er was een foutje in het uploadformulier",
			'tidypics:partialuploadfailure' => "Er waren fouten toen bepaalde afbeeldingen werden geupload.(%s van %s afbeeldingen).",
			'tidypics:completeuploadfailure' => "Upload van fotos mislukt.",
			'tidypics:exceedpostlimit' => "Teveel grote afbeeldngen- probeer minder of kleinere afbeeldingen te uploaden.",
			'tidypics:noimages' => "Geen afbeeldingen geselecteerd .",
			'tidypics:image_mem' => "Afbeelding is te groot - teveel bytes",
			'tidypics:image_pixels' => "Afbeelding heeft teveel pixels",
			'tidypics:unk_error' => "Onbekende upload fout",
			'tidypics:save_error' => "Onbekende fout bij het opslaan van de afbeelding op de server",
			'tidypics:not_image' => "Dit bestandstype werd niet herkend.",
			'tidypics:deletefailed' => "Sorry. Wissen mislukt.",
			'tidypics:deleted' => "Succesvol verwijderd.",
			'tidypics:nosettings' => "De beheerder van deze site heeft geen fotoalbuminstellingen gedaan.",
			'tidypics:exceed_quota' => "Je hebt de algemene quota's van de site overschreden",
			'tidypics:cannot_upload_exceeds_quota' => 'Foto werd niet geuploadt, bestandsgrootte overschrijdt het beschikbare quota.',

			'album:none' => "Nog geen albums gemaakt.",
			'album:uploadfailed' => "Sorry; we konden uw album niet bewaren.",
			'album:deletefailed' => "Je album kon niet verwijderd worden",
			'album:blank' => "Geef dit album een titel aub",
			'album:invalid_album' => 'Album niet gevonden',
			'album:cannot_save_cover_image' => 'Kan coverafbeelding niet bewaren',

			'image:downloadfailed' => "Sorry; deze afbeelding is niet beschikbaar.",
			'images:notedited' => "Niet alle afbeeldingen werden succesvol geupdated",
			'image:blank' => 'Geef deze afbeelding een titel aub.',
			'image:error' => 'Kon de afbeelding niet bewaren.',

			'tidypics:upgrade:failed' => "De upgrade van Tidypics is mislukt", 
);

add_translation("nl", $nederlands);
