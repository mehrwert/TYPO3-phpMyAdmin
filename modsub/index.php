<?php
/***************************************************************
* Copyright notice
*
* (c) 1999-2005 Kasper Skaarhoj (kasperYYYY@typo3.com)
* (c) 2006-2009 mehrwert (typo3@mehrwert.de)
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
 *   49: class SC_mod_tools_phpadmin_index
 *   68:     public function main()
 *  170:     public function printContent()
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */

/**
 * Utilities for the phpMyAdmin third party database administration Tool
 *
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @version		$Id$
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
	public function main() {

		// Declare globals
		global $BE_USER,$LANG,$BACK_PATH,$TCA_DESCR,$TCA,$CLIENT,$TYPO3_CONF_VARS;

		// Set class config for module
		$this->MCONF = $GLOBALS['MCONF'];

		// Get config
		$extensionConfiguration = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['phpmyadmin']);

		// Path to install dir
		$this->MCONF['PMA_absolute_path'] = t3lib_extMgm::extPath('phpmyadmin').$this->MCONF['PMA_subdir'];

		// Path to web dir
		$this->MCONF['PMA_relative_path'] = t3lib_extMgm::extRelPath('phpmyadmin').$this->MCONF['PMA_subdir'];

		// If phpMyAdmin is configured in the conf.php script, we continue to load it...
		if ($this->MCONF['PMA_absolute_path'] && @is_dir($this->MCONF['PMA_absolute_path'])) {

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

			// Configure some other parameters
			$_SESSION['PMA_extConf'] = $TYPO3_CONF_VARS['EXT']['extConf']['phpmyadmin'];
			$_SESSION['PMA_hideOtherDBs'] = $extensionConfiguration['hideOtherDBs'];

			// Try to get the TYPO3 backend uri even if it's installed in a subdirectory
			$typo3_uri = substr($_SERVER['SCRIPT_FILENAME'], strlen($_SERVER['DOCUMENT_ROOT']) - 1, strlen(basename($_SERVER['SCRIPT_FILENAME'])));
			$_SESSION['PMA_SignonURL'] = $typo3_uri.'/index.php';
			$_SESSION['PMA_LogoutURL'] = $typo3_uri.'/logout.php';

			// Prepend document root if uploadDir does not start with a slash "/"
			$extensionConfiguration['uploadDir'] = trim($extensionConfiguration['uploadDir']);
			if (strpos($extensionConfiguration['uploadDir'], '/') !== 0) {
				$_SESSION['PMA_uploadDir'] = $_SERVER['DOCUMENT_ROOT'].'/'.$extensionConfiguration['uploadDir'];
			} else {
				$_SESSION['PMA_uploadDir'] = $extensionConfiguration['uploadDir'];
			}
			$_SESSION['PMA_typo_db'] = TYPO3_db;

			$id = session_id();

			// Force to set the cookie according to issue #8884
			// http://bugs.typo3.org/view.php?id=8884#c23323
			setcookie($session_name, $id, 0, '/', '');

			// Close that session
			session_write_close();

			// Mapping language keys for phpMyAdmin
			$LANG_KEY_MAP = array(
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
			$redirect = $this->MCONF['PMA_relative_path'].$this->MCONF['PMA_script'].'?lang='.$LANG_KEY.'&db='.urlencode(TYPO3_db);
			header('Location: '.$redirect);

		} else {
			// No configuration set:
			$this->doc = t3lib_div::makeInstance('mediumDoc');
			$this->doc->backPath = $BACK_PATH;
			$this->content = $this->doc->startPage($LANG->getLL('title'));
			$this->content .= ('
				<h3>phpMyAdmin module was not installed?</h3>
				'.($this->MCONF['PMA_subdir'] && !@is_dir($this->MCONF['PMA_subdir'])?'<hr /><strong>ERROR: The directory, '.$this->MCONF['PMA_subdir'].', was NOT found!</strong><HR>':'').'
			');
			$this->content .= $this->doc->endPage();
		}
	}

	/**
	 * Prints the content of the module directly to the browser
	 *
	 * @return	void
	 */
	public function printContent()	{
		echo $this->content;
	}
}

// Make instance:
$SOBE = t3lib_div::makeInstance('SC_mod_tools_phpadmin_index');
$SOBE->main();
$SOBE->printContent();

?>