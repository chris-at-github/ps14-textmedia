<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Textmedia',
	'description' => 'Module to extend the TYPO3 Core image and textpic module',
	'category' => 'distribution',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 0,
	'version' => '13.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '13.0.0-13.4.99',
			'ps14_foundation' => '13.0.0-13.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
