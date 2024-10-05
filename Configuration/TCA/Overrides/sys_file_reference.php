<?php

(function() {

	// -------------------------------------------------------------------------------------------------------------------
	// Weitere Felder in Pages
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', [
		'tx_textmedia_controls' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ps14_textmedia/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.controls',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[0 => '']
				],
				'default' => 0,
			]
		],
		'tx_textmedia_loop' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ps14_textmedia/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.loop',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[0 => '']
				],
				'default' => 0,
			]
		],
	]);

	// -------------------------------------------------------------------------------------------------------------------
	// Neue Felder einsortieren
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('sys_file_reference', 'videoOverlayPalette', 'tx_textmedia_controls, tx_textmedia_loop,', 'after:autoplay');
})();