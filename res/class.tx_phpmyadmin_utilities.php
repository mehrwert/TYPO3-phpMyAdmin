<?php
/***************************************************************
* Copyright notice
*
* (c) 2008-2009 mehrwert (typo3@mehrwert.de)
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
 *   46: class tx_phpmyadmin_utilities
 *   56:     function pmaLogOff($params = array(), $ref = null)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */

/**
 * Utilities for the phpMyAdmin third party database Administration Tool
 *
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @version		$Id: class.tx_phpmyadmin_utilities.php 7 2008-04-27 17:05:17Z ak $
 * @author		mehrwert <typo3@mehrwert.de>
 * @license		GPL
 */
class tx_phpmyadmin_utilities {

	/**
	 * Log off method for the signon-based phpMyAdmin extension. Called as post processing
	 * hook in t3lib_userauth.php. Deletes the signon cookies
	 *
	 * @param	array		$params: Additional params passed to the method
	 * @param	object		$ref: The parent object (BE User Auth)
	 * @return	void
	 */
	function pmaLogOff($params = array(), $ref = null) {

		// Define the cookie path
		$cookiePath = substr(t3lib_extmgm::extPath('phpmyadmin'), strlen($_SERVER['DOCUMENT_ROOT'])).'res/'.$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpmyadmin']['pmaDirname'].'/';

		// Just ensure that the path is starting with a slash
		if (strpos($cookiePath, '/') !== 0) {
			$cookiePath = '/'.$cookiePath;
		}

		setcookie('tx_phpmyadmin', '', time() - 3600);
		setcookie('tx_phpmyadmin', '', time() - 3600, '/');
		setcookie('tx_phpmyadmin', '', time() - 3600, $cookiePath);
		setcookie('phpMyAdmin', '', time() - 3600);
		setcookie('phpMyAdmin', '', time() - 3600, '/');
		setcookie('phpMyAdmin', '', time() - 3600, $cookiePath);
	}

}

?>