<?php
namespace Mehrwert\Phpmyadmin\Backend;

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

use Mehrwert\Phpmyadmin\Utility\EnvironmentUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/**
 * Utilities for the phpMyAdmin third party database administration Tool
 *
 * @author        mehrwert <typo3@mehrwert.de>
 * @author        Kasper Skårhøj <kasperYYYY@typo3.com>
 * @license        GPL
 */
class PmaModule
{
    /**
     * Configuration for the module
     * @var    array
     */
    public $MCONF = [];

    /**
     * The backend document
     * @var    \TYPO3\CMS\Backend\Template\DocumentTemplate
     */
    public $doc;

    /**
     * Content of module if misconfigured
     * @var string
     */
    public $content = '';

    /**
     * The main method of the backend module
     */
    public function main()
    {

        // Include the LL file for phpMyAdmin
        $GLOBALS['LANG']->includeLLFile('EXT:phpmyadmin/Resources/Private/Language/locallang.xlf');

        // Set the path to phpMyAdmin
        $extPath = ExtensionManagementUtility::extPath('phpmyadmin');
        $typo3DocumentRoot = GeneralUtility::getIndpEnv('TYPO3_DOCUMENT_ROOT');

        // Set class config for module
        $MCONF['name'] = 'tools_txphpmyadmin';
        $MCONF['script'] = '_DISPATCH';
        $MCONF['access'] = 'admin';
        $MCONF['PMA_subdir'] = 'Vendor/phpMyAdmin-5.2.1-all-languages/';
        $MCONF['PMA_script'] = 'index.php';

        $this->MCONF = $MCONF;

        // Get config
        $extensionConfiguration = unserialize(
            $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['phpmyadmin'],
            ['allowed_classes' => false]
        );

        // IP-based Access restrictions
        $devIPmask = trim($GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask']);
        $remoteAddress = GeneralUtility::getIndpEnv('REMOTE_ADDR');

        // Check for IP restriction (devIpMask), and die if not allowed
        $useDevIpMask = (boolean)$extensionConfiguration['useDevIpMask'];
        if ($useDevIpMask === true) {
            // Abort if devIPmask is wildcarded
            if ($devIPmask != '*') {
                $message = '<h1>' . $GLOBALS['LANG']->getLL('module.headline.accessDenied') . '</h1>
                            <p>' . sprintf(
                    $GLOBALS['LANG']->getLL('module.message.accessDenied.devIpMask'),
                    $remoteAddress,
                    $devIPmask
                ) . '</p>';
                if (!GeneralUtility::cmpIP($remoteAddress, $devIPmask)) {
                    die($message);
                }
            }
        }

        // Check for ip restriction, and die if not allowed
        $allowedIps = trim($extensionConfiguration['allowedIps']);
        if (!empty($allowedIps)) {
            $message = '<h1>' . $GLOBALS['LANG']->getLL('module.headline.accessDenied') . '</h1>
                        <p>' . sprintf(
                $GLOBALS['LANG']->getLL('module.message.accessDenied.allowedIps'),
                $remoteAddress,
                $allowedIps
            ) . '</p>';
            if (!GeneralUtility::cmpIP($remoteAddress, $allowedIps)) {
                die($message);
            }
        }

        // Path to install dir
        $this->MCONF['PMA_absolute_path'] = $extPath . $this->MCONF['PMA_subdir'];

        // PMA uses relative file inclusion, so we need to ensure a proper include_path
        @set_include_path($this->MCONF['PMA_absolute_path'] . PATH_SEPARATOR . get_include_path());

        // If phpMyAdmin is configured in the conf.php script, we continue to load it...
        if ($this->MCONF['PMA_absolute_path'] && @is_dir($this->MCONF['PMA_absolute_path'])) {

            // Need to have cookie visible from parent directory
            session_set_cookie_params(0, '/', '', 0);

            // Create signon session
            $session_name = 'tx_phpmyadmin';
            session_name($session_name);
            session_start();

            // Store the credentials in the session - TYPO3 7.x
            $dbData = $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'];
            $_SESSION['PMA_single_signon_user'] = $dbData['user'];
            $_SESSION['PMA_single_signon_password'] = $dbData['password'];
            $_SESSION['PMA_single_signon_host'] = $dbData['host'];
            $_SESSION['PMA_single_signon_port'] = $dbData['port'];
            $_SESSION['PMA_single_signon_only_db'] = $dbData['dbname'];

            // If a socket connection is configured, use this for mysqli
            if (isset($GLOBALS['TYPO3_CONF_VARS']['DB']['socket'])) {
                $_SESSION['PMA_typo3_socket'] = $GLOBALS['TYPO3_CONF_VARS']['DB']['socket'];
            }

            // Configure some other parameters
            $_SESSION['PMA_extConf'] = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['phpmyadmin'];
            $_SESSION['PMA_hideOtherDBs'] = $extensionConfiguration['hideOtherDBs'];

            // Get signon uri for redirect
            $path_pma = PathUtility::getAbsoluteWebPath($extPath . $this->MCONF['PMA_subdir']);
            $_SESSION['PMA_SignonURL'] = $path_pma . 'index.php';

            // Try to get the TYPO3 backend uri even if it's installed in a subdirectory
            // Compile logout path and add a slash if the returned string does not start with
            $path_typo3 = substr(EnvironmentUtility::getBackendPath(), strlen($typo3DocumentRoot), strlen(EnvironmentUtility::getBackendPath()));
            $path_typo3 = (substr($path_typo3, 0, 1) != '/' ? '/' . $path_typo3 : $path_typo3);
            $_SESSION['PMA_LogoutURL'] = $path_typo3 . 'logout.php';

            // Prepend document root if uploadDir does not start with a slash "/"
            $extensionConfiguration['uploadDir'] = trim($extensionConfiguration['uploadDir']);
            if (strpos($extensionConfiguration['uploadDir'], '/') !== 0) {
                $_SESSION['PMA_uploadDir'] = $typo3DocumentRoot . '/' . $extensionConfiguration['uploadDir'];
            } else {
                $_SESSION['PMA_uploadDir'] = $extensionConfiguration['uploadDir'];
            }
            $_SESSION['PMA_typo3_db'] = $dbData['dbname'];

            // Get current session id
            $currentSessionId = session_id();

            // Force to set the cookie according to issue #8884
            // http://bugs.typo3.org/view.php?id=8884#c23323
            setcookie($session_name, $currentSessionId, 0, '/', '');

            // Close that session
            session_write_close();

            // Mapping language keys for phpMyAdmin
            $languageKeyMapping = [
                'default' => 'en',
                'dk' => 'da',
                'de' => 'de',
                'no' => 'no',
                'it' => 'it',
                'fr' => 'fr',
                'es' => 'es',
                'nl' => 'nl',
                'cz' => 'cs-iso',
                'pl' => 'pl',
                'si' => 'sk',
            ];
            $languageKey = $languageKeyMapping[$GLOBALS['LANG']->lang];
            if (!$languageKey) {
                $languageKey = 'en';
            }

            // Redirect to phpMyAdmin (should use absolute URL here!), setting default database
            $redirectUri = GeneralUtility::locationHeaderUrl(
                $_SESSION['PMA_SignonURL'] . '?lang=' . $languageKey . '&db=' . urlencode($dbData['dbname'])
            );

            // Build and set cache-header header
            $headers = [
                'Expires: Mon, 26 Jul 1997 05:00:00 GMT',
                'Pragma: no-cache',
                'Cache-Control: private',
            ];
            // Send all headers
            foreach ($headers as $header) {
                header($header);
            }

            HttpUtility::redirect(
                $redirectUri,
                HttpUtility::HTTP_STATUS_302
            );
        } else {
            // Render body
            $this->doc = GeneralUtility::makeInstance('TYPO3\CMS\Backend\Template\DocumentTemplate');
            $this->content = $this->doc->startPage($GLOBALS['LANG']->getLL('module.title'));
            $this->content .= '<h1>' . $GLOBALS['LANG']->getLL('module.headline.error') . '</h1>';
            // No configuration set
            $this->content .= '<p>' . sprintf(
                $GLOBALS['LANG']->getLL('module.error.invalidConfiguration'),
                $this->MCONF['PMA_subdir']
            ) . '</p>';
            // End document
            $this->content .= $this->doc->endPage();
        }
    }

    /**
     * Prints the content of the module directly to the browser
     */
    public function printContent()
    {
        echo $this->content;
    }
}

// Proceed if TYPO3_MODE is defined
if (!defined('TYPO3_MODE')) {
    die('<h1>Error</h1><p>Unable to determine TYPO3_MODE.</p>');
}

    // Proceed if BE loaded
    if (TYPO3_MODE === 'BE') {
        // Make instance:
        $GLOBALS['SOBE'] = GeneralUtility::makeInstance(PmaModule::class);
        $GLOBALS['SOBE']->main();
        $GLOBALS['SOBE']->printContent();
    } else {
        die('<h1>Error</h1><p>The TYPO3 Backend is required for phpMyAdmin module but was not loaded.</p>');
    }
