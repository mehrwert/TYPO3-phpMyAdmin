<?php
/**
 * TYPO3 Extension configuration for the tx_phpmyadmin Extension
 *
 * @author		mehrwert <typo3@mehrwert.de>
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @license		GPL
 */

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Get config
$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['phpmyadmin']);

// Check for IP restriction (devIpMask), and die if not allowed
$showPhpMyAdminInWebModule = (boolean) $extensionConfiguration['showPhpMyAdminInWebModule'];

// If the backend is loaded, add the module
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'tools',
		'txphpmyadmin',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'BeModule/',
		array(
			'access' => 'admin',
			'icon' => 'EXT:phpmyadmin/Resources/Public/Icons/module-phpmyadmin.png',
			'labels' => 'LLL:EXT:phpmyadmin/Resources/Private/Language/locallang_mod.xlf',
		)
	);
}

// Do not load post processing class if TYPO3 is in CLI mode
if (!defined('TYPO3_cliMode') || TYPO3_cliMode !== TRUE) {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_post_processing'][] = 'Tx_Phpmyadmin_Hooks_BeUserAuthLogOffHook->pmaLogOff';
}

// The subdirectory where the pMA source is located (used for cookie removal and script inclusion)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpmyadmin']['pmaDirname'] = 'phpMyAdmin-4.4.15.10-all-languages';