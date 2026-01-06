<?php

// ---------------------------------------------------------------------------------------------------------------------
// Modul in TYPO3 tt_content registrieren
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
//	array(
//		'LLL:EXT:ps14_images/Resources/Private/Language/locallang_tca.xlf:title',
//		'ps14_images',
//		'ps14-module-images'
//	),
//	'CType',
//	'ps14_images'
//);

// ---------------------------------------------------------------------------------------------------------------------
// Modul TCA anpassen

// Felddefinitionen
//$GLOBALS['TCA']['tt_content']['types']['ps14_images']['showitem'] = \Ps14\Site\Service\TcaService::getShowitem(
//	['general', 'images', 'appearance', 'language', 'access', 'categories', 'notes', 'extended'],
//	[
//		'general' => '--palette--;;general, --palette--;;headers, --palette--;;foundation_identifier, bodytext,',
//		'images' => [
//			'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images',
//			'fields' => 'image, --palette--;;foundation_image_adjustment, --palette--;;foundation_image_gallery,--palette--;;foundation_image_hidden,'
//		]
//	]
//);

// Bodytext mit CKEditor rendern
//$GLOBALS['TCA']['tt_content']['types']['ps14_images']['columnsOverrides']['bodytext']['config'] = [
//	'enableRichtext' => true,
//	'richtextConfiguration' => 'ps14Default',
//];

//$GLOBALS['TCA']['tt_content']['types']['ps14_images']['columnsOverrides']['imageorient']['onChange'] = 'reload';
$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['imageorient']['config']['items'] = [
    [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
        'value' => 0,
        'icon' => 'content-beside-text-img-above-center',
    ],
    [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
        'value' => 1,
        'icon' => 'content-beside-text-img-above-right',
    ],
    [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
        'value' => 2,
        'icon' => 'content-beside-text-img-above-left',
    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
//        'value' => 8,
//        'icon' => 'content-beside-text-img-below-center',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
//        'value' => 9,
//        'icon' => 'content-beside-text-img-below-right',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
//        'value' => 10,
//        'icon' => 'content-beside-text-img-below-left',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
//        'value' => 17,
//        'icon' => 'content-inside-text-img-right',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
//        'value' => 18,
//        'icon' => 'content-inside-text-img-left',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
//        'value' => 25,
//        'icon' => 'content-beside-text-img-right',
//    ],
//    [
//        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
//        'value' => 26,
//        'icon' => 'content-beside-text-img-left',
//    ],
];

// Crop-Varianten fuer Image-Feld
//$GLOBALS['TCA']['tt_content']['types']['ps14_images']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = \Ps14\Site\Service\TcaService::getCropVariants(
//	[
//		'thumbnail' => [
//			'allowedAspectRatios' => ['16_9', '4_3', '1_1'],
//			'selectedRatio' => '16_9'
//		],
//		'fullsize' => [
//			'allowedAspectRatios' => ['NaN', '21_9'],
//			'selectedRatio' => 'NaN'
//		]
//	]
//);