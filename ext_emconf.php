<?php

# Extension Manager/Repository config file for ext: "t3themes_mobapp"

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Themes - Mobapp',
    'description' => 'TYPO3 Template Theme Integration for EXT:t3cms. You can integrate the "ready-to-use html content" with fluid content, dce, flux, mask, cdeditor or something else.',
    'category' => 'distribution',
    'author' => 'Salvatore Eckel',
    'author_email' => 'salvaracer@gmx.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.18-9.99.99',
            't3cms' => '2.0.1-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [
            't3content_mobapp' => '2.2.0-0.0.0',
        ],
    ],
];
