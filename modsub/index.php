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

require_once('/srv/www/t3dummy/v43/htdocs/some-weired-sub/dir-for-typo3/t3lib/class.t3lib_div.php');

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

			// Check for empty password and issues a warning since
			// phpMyAdmin ignores the cfg-option AllowNoPassword
		if (TYPO3_db_password == '') {

				// No password in configuration set
			$this->doc = t3lib_div::makeInstance('mediumDoc');
			$this->doc->backPath = $BACK_PATH;
			$this->content = $this->doc->startPage($LANG->getLL('title'));
			$this->content .= (
				'<h1>An error occured!</h1>
				 <p><strong>Your MySQL user has no password set.</strong>
					phpMyAdmin currently does not support empty passwords for MySQL users. 
					Please set a password to use phpMyAdmin.
				</p>'
			);
			$this->content .= $this->doc->endPage();
		} else {

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
				
					// Get signon uri for redirect
				$path_ext = substr(t3lib_extMgm::extPath('phpmyadmin'), strlen($_SERVER['DOCUMENT_ROOT']), strlen(t3lib_extMgm::extPath('phpmyadmin')));
				$path_ext = (substr($path_ext, 0, 1) != '/'  ? '/'.$path_ext : $path_ext);
				$path_pma = $path_ext.$this->MCONF['PMA_subdir'];
				$_SESSION['PMA_SignonURL'] = $path_pma.'index.php';

					// Try to get the TYPO3 backend uri even if it's installed in a subdirectory
					// Compile logout path and add a slash if the returned string does not start with
				$path_typo3 = substr(PATH_typo3, strlen($_SERVER['DOCUMENT_ROOT']), strlen(PATH_typo3));
				$path_typo3 = (substr($path_typo3, 0, 1) != '/'  ? '/'.$path_typo3 : $path_typo3);
				$_SESSION['PMA_LogoutURL'] = $path_typo3.'logout.php';

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
				$redirect_uri = $_SESSION['PMA_SignonURL'].'?lang='.$LANG_KEY.'&db='.urlencode(TYPO3_db);

					// Build and set cache-header header
				$headers = array(
					'Expires: Mon, 26 Jul 1997 05:00:00 GMT',
					'Pragma: no-cache',
					'Cache-Control: private',
					'Location: '.$redirect_uri
				);

					// Send all headers
				foreach($headers as $header)	{
					header($header);
				}

			} else {
					// No configuration set
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

// Proceed if BE loaded
if (in_array('t3lib_div', get_declared_classes())) {
	// Make instance:
	$SOBE = t3lib_div::makeInstance('SC_mod_tools_phpadmin_index');
	$SOBE->main();
	$SOBE->printContent();
} else {
	echo '<h1>Error</h1><p>The TYPO3 Backend is required for phpMyAdmin module but was not loaded.</p>';
}

?>