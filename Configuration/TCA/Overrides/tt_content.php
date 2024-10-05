<?php

// ---------------------------------------------------------------------------------------------------------------------
// Modul TCA anpassen

// Felddefinitionen
$GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem'] = \Ps14\Site\Service\TcaService::getShowitem(
	['general', 'media', 'appearance', 'language', 'access', 'categories', 'notes', 'extended'],
	[
		'media' => [
			'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media',
			'fields' => 'assets, --linebreak--, image, --palette--;;foundation_image_gallery,'
		]
	]
);

// Medienausrichtung
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['imageorient']['config']['items'] = [
	[
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
		'value' => 0,
		'icon' => 'content-beside-text-img-above-center',
	],
	[
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
		'value' => 8,
		'icon' => 'content-beside-text-img-below-center',
	]
];
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['imageorient']['config']['default'] = 0;
//
//// Bodytext mit CKEditor rendern
//$GLOBALS['TCA']['tt_content']['types']['ps14_textmedia']['columnsOverrides']['bodytext']['config'] = [
//	'enableRichtext' => true,
//	'richtextConfiguration' => 'ps14Default',
//];
//
// Crop-Varianten fuer Image-Feld
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['image']['label'] = 'LLL:EXT:ps14_textmedia/Resources/Private/Language/locallang_tca.xlf:tt_content.image';
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['image']['config']['maxitems'] = 1;
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = \Ps14\Site\Service\TcaService::getCropVariants(
	[
		'default' => [
			'allowedAspectRatios' => ['16_9', '4_3'],
			'selectedRatio' => '16_9'
		],
	]
);