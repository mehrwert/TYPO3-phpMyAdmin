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

// Get config
$extensionConfiguration = unserialize(
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['phpmyadmin'],
    ['allowed_classes' => false]
);

// Check for IP restriction (devIpMask), and die if not allowed
$showPhpMyAdminInWebModule = (boolean)$extensionConfiguration['showPhpMyAdminInWebModule'];

// The subdirectory where the pMA source is located (used for cookie removal and script inclusion)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpmyadmin']['pmaDirname'] = 'phpMyAdmin-5.2.1-all-languages';