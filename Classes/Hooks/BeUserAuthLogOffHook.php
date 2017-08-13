<?php
namespace mehrwert\Phpmyadmin\Hooks;

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

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Utilities for the phpMyAdmin third party database Administration Tool
 *
 * @package        TYPO3
 * @subpackage    tx_phpmyadmin
 * @author        mehrwert <typo3@mehrwert.de>
 * @license        GPL
 */
class BeUserAuthLogOffHook
{

    /**
     * Log off method for the signon-based phpMyAdmin extension. Called as post processing
     * hook in t3lib_userauth.php. Deletes the signon cookies
     *
     * @param array $params Additional params passed to the method
     * @param \TYPO3\CMS\Core\Authentication\AbstractUserAuthentication $ref The parent object (BE User Auth)
     * @return void
     */
    public function pmaLogOff($params = array(), $ref = null)
    {

        if (isset($GLOBALS['PHP_UNIT_TEST_RUNNING']) === false) {
            // Define the cookie path
            $cookiePath = substr(
                ExtensionManagementUtility::extPath('phpmyadmin'),
                strlen($_SERVER['DOCUMENT_ROOT'])
            ) . 'res/' . $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpmyadmin']['pmaDirname'] . '/';

            // Just ensure that the path is starting with a slash
            if (strpos($cookiePath, '/') !== 0) {
                $cookiePath = '/' . $cookiePath;
            }

            setcookie('tx_phpmyadmin', '', time() - 3600);
            setcookie('tx_phpmyadmin', '', time() - 3600, '/');
            setcookie('tx_phpmyadmin', '', time() - 3600, $cookiePath);
            setcookie('phpMyAdmin', '', time() - 3600);
            setcookie('phpMyAdmin', '', time() - 3600, '/');
            setcookie('phpMyAdmin', '', time() - 3600, $cookiePath);

            /**
             * Create signon session. Now set to phpMyAdmin
             * according to @see http://bugs.typo3.org/view.php?id=18245#61750
             * Save old session @see http://bugs.typo3.org/view.php?id=18560
             */
            $oldSessionName = session_name();
            $oldSessionId = session_id();
            session_write_close();

            $session_name = 'phpMyAdmin';
            session_name($session_name);
            session_start();

            // Try to get the TYPO3 backend uri even if it's installed in a subdirectory
            $path_typo3 = substr(PATH_typo3, strlen($_SERVER['DOCUMENT_ROOT']), strlen(PATH_typo3));
            $path_typo3 = (substr($path_typo3, 0, 1) != '/' ? '/' . $path_typo3 : $path_typo3);

            $_SESSION['PMA_LogoutURL'] = $path_typo3 . 'logout.php';
            $_SESSION['PMA_SignonURL'] = $path_typo3 . 'index.php';
            $_SESSION['PMA_LogoutURL'] = $path_typo3 . 'logout.php';

            // Close that session
            session_write_close();

            session_name($oldSessionName);
            if (!empty($oldSessionId)) {
                session_id($oldSessionId);
            }
            session_start();
        }
    }
}