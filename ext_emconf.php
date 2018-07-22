<?php

# Extension Manager/Repository config file for ext: "t3themes_mobapp"

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Themes - Mobapp',
    'description' => 'COLORLIBs MobAll Theme. Free Template Integration for EXT:t3cms. Brings full styled and configured website. Custom content elements maybe available in this theme.',
    'category' => 'distribution',
    'author' => 'Salvatore Eckel',
    'author_email' => 'salvaracer@gmx.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.18-9.99.99',
            't3cms' => '2.0.1'
        ],
        'conflicts' => [],
        'suggests' => [
            't3content_mobapp' => '2.2.3'
        ],
    ],
];
