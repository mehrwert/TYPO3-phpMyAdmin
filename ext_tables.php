<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// If the backend is loaded, add the module
if (TYPO3_MODE == 'BE') {
    if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 11000000) {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Phpmyadmin',
            'tools', // Make module a submodule of 'tools'
            'phpmyadmin_mod1', // Submodule key
            '', // Position
            [
                \Mehrwert\Phpmyadmin\Controller\PhpmyadminController::class => 'index',
            ],
            [
                'access' => 'admin',
                'icon' => 'EXT:phpmyadmin/Resources/Public/Icons/module-phpmyadmin.svg',
                'labels' => 'LLL:EXT:phpmyadmin/Resources/Private/Language/locallang_mod.xlf',
            ]
        );
    } else {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Mehrwert.Phpmyadmin',
            'tools', // Make module a submodule of 'tools'
            'phpmyadmin_mod1', // Submodule key
            '', // Position
            [
                'Phpmyadmin' => 'index',
            ],
            [
                'access' => 'admin',
                'icon' => 'EXT:phpmyadmin/Resources/Public/Icons/module-phpmyadmin.svg',
                'labels' => 'LLL:EXT:phpmyadmin/Resources/Private/Language/locallang_mod.xlf',
            ]
        );
    }
}

// The subdirectory where the pMA source is located (used for cookie removal and script inclusion)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpmyadmin']['pmaDirname'] = 'phpMyAdmin-5.2.1-all-languages';