<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

ExtensionUtility::registerPlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'Coffee',
    // arbitrary, but unique plugin name (not visible in the BE)
    'CoffeeIndex',
    // plugin title, as visible in the drop-down in the BE
    'Coffee Plugin',
    // the icon visible in the drop-down in the BE
    'EXT:coffee/Resources/Public/Icons/Extension.png'
);