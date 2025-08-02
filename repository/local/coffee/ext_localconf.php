<?php

declare(strict_types=1);

use LYVTH\Coffee\Controller\CoffeeController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die('Access denied.');

ExtensionUtility::configurePlugin('Coffee', 'CoffeeIndex',
    [
        CoffeeController::class => 'index',
    ],
    [
        CoffeeController::class => '',
    ]
);