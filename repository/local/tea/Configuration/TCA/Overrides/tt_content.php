<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

ExtensionUtility::registerPlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'Tea',
    // arbitrary, but unique plugin name (not visible in the BE)
    'TeaIndex',
    // plugin title, as visible in the drop-down in the BE
    'LLL:EXT:tea/Resources/Private/Language/locallang.xlf:plugin.tea_index',
    // the icon visible in the drop-down in the BE
    'EXT:tea/Resources/Public/Icons/Extension.png'
);

ExtensionUtility::registerPlugin(
    'Tea',
    'TeaShow',
    'LLL:EXT:tea/Resources/Private/Language/locallang.xlf:plugin.tea_show',
    'EXT:tea/Resources/Public/Icons/Extension.png'
);