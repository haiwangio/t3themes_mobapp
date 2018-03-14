<?php
defined('TYPO3_MODE') || die();

$extensionKey = 't3themes_mobapp';

/***************
 * Register PageTS
 */

// BackendLayouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TSconfig/Mod/WebLayout/BackendLayouts.txt',
    'T3themes MobApp Theme for TYPO3 CMS - Backend Layouts'
);

// Customize RTE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TSconfig/RTE.txt',
    'T3themes MobApp Theme for TYPO3 CMS - CKEditor Configuration'
);
