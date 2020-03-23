<?php
/**
 * phpMyAdmin configuration for the tx_phpmyadmin TYPO3 extension
 *
 * @author		mehrwert <typo3@mehrwert.de>
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @license		GPL
 */

/**
 * Disable transparent session ids (if enabled, off by default).
 *
 * @see http://php.net/manual/session.configuration.php#ini.session.use-trans-sid
 * @see http://sourceforge.net/p/phpmyadmin/bugs/4546/
 * @see https://forge.typo3.org/issues/58263
 */
@ini_set('session.use_trans_sid', 0);

// TYPO3 extension configuration
$extensionConfiguration = [];

// Define the session name
$session_name = 'tx_phpmyadmin';

// Code taken from phpMyAdmin sign-on script
if (isset($_COOKIE[$session_name])) {

    // End current session
    $old_session = session_name();
    $old_id = session_id();
    session_write_close();

    // Load config session
    session_name($session_name);
    session_id($_COOKIE[$session_name]);
    session_start();

    // Get additional config set in TYPO3
    $extensionConfiguration['PMA_typo3_db'] = $_SESSION['PMA_typo3_db'];
    $extensionConfiguration['PMA_typo3_socket'] = $_SESSION['PMA_typo3_socket'];
    $extensionConfiguration['PMA_hideOtherDBs'] = intval($_SESSION['PMA_hideOtherDBs']);
    $extensionConfiguration['PMA_uploadDir'] = $_SESSION['PMA_uploadDir'];
    $extensionConfiguration['PMA_SignonURL'] = ($_SESSION['PMA_SignonURL'] != '' ? $_SESSION['PMA_SignonURL'] : '../../BeModule/index.php');
    $extensionConfiguration['PMA_LogoutURL'] = ($_SESSION['PMA_LogoutURL'] != '' ? $_SESSION['PMA_LogoutURL'] : '/typo3/logout.php');

    // End config session/
    session_write_close();

    // Restart phpMyAdmin session
    session_name($old_session);
    if (!empty($old_id)) {
        session_id($old_id);
    }
    // Do not create a new session since pMA does this in libraries/session.inc.php
    // TODO Check on various systems
    // session_start();
}

// Define upload dir if enabled
if (trim($extensionConfiguration['PMA_uploadDir']) != '' && @file_exists(trim($extensionConfiguration['PMA_uploadDir'])) == 1) {
    // Directories for saving/loading files from server
    $cfg['UploadDir'] = trim($extensionConfiguration['PMA_uploadDir']);
    $cfg['SaveDir'] = trim($extensionConfiguration['PMA_uploadDir']);
}

// Servers configuration
$i = 0;

// First server
$i++;

/* Servers configuration */
$i = 0;

/* Server TYPO3 Database Server (signon) [1] */
$i++;

$cfg['Servers'][$i]['extension'] = 'mysqli';
if (isset($extensionConfiguration['PMA_typo3_socket'])) {
    $cfg['Servers'][$i]['connect_type'] = 'socket';
    $cfg['Servers'][$i]['socket'] = $extensionConfiguration['PMA_typo3_socket'];
} else {
    $cfg['Servers'][$i]['connect_type'] = 'tcp';
}
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['pmadb'] = 'tx_phpmyadmin';
$cfg['Servers'][$i]['nopassword'] = true;
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['SignonSession'] = 'tx_phpmyadmin';
$cfg['Servers'][$i]['SignonURL'] = $extensionConfiguration['PMA_SignonURL'];
$cfg['Servers'][$i]['LogoutURL'] = $extensionConfiguration['PMA_LogoutURL'];

// Currently broken in pMA
$cfg['Servers'][$i]['only_db'] = ( $extensionConfiguration['PMA_hideOtherDBs'] === 1 ?
    [$extensionConfiguration['PMA_typo3_db']] : [$extensionConfiguration['PMA_typo3_db'], '*'] );

// General configuration
$cfg['ThemeDefault'] = 'pmahomme';
$cfg['DisplayServersList'] = false;
$cfg['BrowsePointerEnable'] = true;
$cfg['BrowseMarkerEnable'] = true;
$cfg['RepeatCells'] = 100;
$cfg['DefaultDisplay'] = 'horizontal';
$cfg['TextareaCols'] = 40;
$cfg['TextareaRows'] = 7;
$cfg['LongtextDoubleTextarea'] = true;
$cfg['TextareaAutoSelect'] = false;
$cfg['CharEditing'] = 'input';
$cfg['CharTextareaCols'] = 40;
$cfg['CharTextareaRows'] = 2;
$cfg['DefaultPropDisplay'] = 'horizontal';
$cfg['InsertRows'] = 2;
$cfg['AllowThirdPartyFraming'] = true;
$cfg['VersionCheck'] = false;
$cfg['PmaNoRelation_DisableWarning'] = true;
