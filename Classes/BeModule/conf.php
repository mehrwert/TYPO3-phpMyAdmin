<?php
/**
 * TYPO3 Module configuration for the tx_phpmyadmin Extension
 *
 * @author		mehrwert <typo3@mehrwert.de>
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @license		GPL
 */

// Configuration
$MCONF['name'] = 'tools_txphpmyadmin';
$MCONF['script'] = '_DISPATCH';
$MCONF['PMA_subdir'] = 'Vendor/phpMyAdmin-4.4.15.10-all-languages/';
$MCONF['PMA_script'] = 'index.php';

// Localization
$MLANG['default']['tabs_images']['tab'] = '../Resources/Public/Icons/module-phpmyadmin.png';
$MLANG['default']['ll_ref'] = 'LLL:EXT:phpmyadmin/Resources/Private/Language/locallang_mod.xlf';
