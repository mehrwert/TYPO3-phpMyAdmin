<?php
/***************************************************************
*  Copyright notice
*
*  (c) 1999-2005 Kasper Skaarhoj (kasperYYYY@typo3.com)
*  (c) 2006-2008 Andreas Kundoch (typo3@mehrwert.de)
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   57: class SC_mod_tools_phpadmin_index
 *   76:     function main()
 *  150:     function printContent()
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */

// Regular initialization. Must check if the user has access to the module.
// This determines if it appears in the menu and if this script will redirect.
unset($MCONF);
require ('conf.php');
require ($BACK_PATH.'init.php');
require ($BACK_PATH.'template.php');
$BE_USER->modAccess($MCONF, 1);

/**
 * Utilities for the phpMyAdmin third party database Administration Tool
 *
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @version		$Id: index.php 27 2008-10-03 12:37:51Z ak $
 * @author		mehrwert <typo3@mehrwert.de>
 * @author		Kasper Skårhøj <kasperYYYY@typo3.com>
 * @license		GPL
 */
class SC_mod_tools_phpadmin_index {

	/**
	 * Configuration for the module
	 * @var	Array
	 */
	var $MCONF = array();

	/**
	 * The backend document
	 * @var	Object
	 */
	var $doc;

	/**
	 * The main method of the Plugin
	 *
	 * @return	Mixed		Either returns an error or sends a redirect header
	 */
	function main() {

		// Declare globals
		global $BE_USER,$LANG,$BACK_PATH,$TCA_DESCR,$TCA,$CLIENT,$TYPO3_CONF_VARS;

		// Set class config for module
		$this->MCONF = $GLOBALS['MCONF'];

		// If phpMyAdmin is configured in the conf.php script, we continue to load it...
		if ($this->MCONF['phpMyAdminSubDir'] && @is_dir($this->MCONF['phpMyAdminSubDir'])) {

			// Need to have cookie visible from parent directory
			session_set_cookie_params(0, '/', '', 0);

			// Create signon session
			$session_name = 'tx_phpmyadmin';
			session_name($session_name);
			session_start();

			// Store there credentials in the session
			$_SESSION['PMA_single_signon_user'] = TYPO3_db_username;
			$_SESSION['PMA_single_signon_password'] = TYPO3_db_password;
			$_SESSION['PMA_single_signon_host'] = TYPO3_db_host;
			$_SESSION['PMA_single_signon_only_db'] = TYPO3_db;
			$id = session_id();

			// Force to set the cookie according to issue #8884
			// http://bugs.typo3.org/view.php?id=8884#c23323
			setcookie($session_name, $id, 0, '/', '');

			// Close that session
			session_write_close();

			// Mapping language keys for phpMyAdmin
			$LANG_KEY_MAP = Array(
				'dk'=>'da',
				'de'=>'de',
				'no'=>'no',
				'it'=>'it',
				'fr'=>'fr',
				'es'=>'es',
				'nl'=>'nl',
				'cz'=>'cs-iso',
				'pl'=>'pl',
				'si'=>'sk'
			);

			$LANG_KEY = $LANG_KEY_MAP[$LANG->lang];
			if (!$LANG_KEY) {
				$LANG_KEY = 'en';
			}

			// Redirect to phpMyAdmin (should use absolute URL here!), setting default database
			$redirect = $this->MCONF['phpMyAdminSubDir'].$this->MCONF['phpMyAdminScript'].'?lang='.$LANG_KEY.'&db='.urlencode(TYPO3_db);
			header('Location: '.$redirect);

		} else {
			// No configuration set:
			$this->doc = t3lib_div::makeInstance('mediumDoc');
			$this->doc->backPath = $BACK_PATH;
			$this->content = $this->doc->startPage($LANG->getLL('title'));
			$this->content .= ('
				<h3>phpMyAdmin module was not installed?</h3>
				'.($this->MCONF['phpMyAdminSubDir'] && !@is_dir($this->MCONF['phpMyAdminSubDir'])?'<hr /><strong>ERROR: The directory, '.$this->MCONF['phpMyAdminSubDir'].', was NOT found!</strong><HR>':'').'
			');
			$this->content .= $this->doc->endPage();
		}
	}

	/**
	 * Prints the content of the module directly to the browser
	 *
	 * @return	void
	 */
	function printContent()	{
		echo $this->content;
	}
}

// Make instance:
$SOBE = t3lib_div::makeInstance('SC_mod_tools_phpadmin_index');
$SOBE->main();
$SOBE->printContent();

?>