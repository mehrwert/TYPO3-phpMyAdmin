<?php

// Include the extension config
require_once('../../modsub/conf.php');

// Configuration (if the TYPO3 configuration file has been included)
if(T3_PMA_LOCALCONF_INCLUDED === true) {

	// Get additional config set in TYPO3 ext manager
	$extensionConfiguration = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['phpmyadmin']);

	// Prepend document root if uploadDir does not start with a slash "/"
	if (strpos($extensionConfiguration['uploadDir'], '/') !== 0) {
		$extensionConfiguration['uploadDir'] = $_SERVER['DOCUMENT_ROOT'].'/'.$extensionConfiguration['uploadDir'];
	}

	// Define upload dir if enabled
	if (trim($extensionConfiguration['uploadDir']) != '' && @file_exists(trim($extensionConfiguration['uploadDir'])) == 1) {
		// Directories for saving/loading files from server
		$cfg['UploadDir'] = trim($extensionConfiguration['uploadDir']);
		$cfg['SaveDir'] = trim($extensionConfiguration['uploadDir']);
	}
}

// Servers configuration
$i = 0;

// First server
$i++;

/* Servers configuration */
$i = 0;

/* Server TYPO3 Database Server (signon) [1] */
$i++;
/*
$cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark';
$cfg['Servers'][$i]['relation'] = 'pma_relation';
$cfg['Servers'][$i]['table_info'] = 'pma_table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma_table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma_pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma_column_info';
$cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';
$cfg['Servers'][$i]['history'] = 'pma_history';
*/
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
//$cfg['Servers'][$i]['controluser'] = '';
//$cfg['Servers'][$i]['controlpass'] = '';
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['only_db'] = ( $extensionConfiguration['hideOtherDBs'] == 1 ? $typo_db : '' );
$cfg['Servers'][$i]['verbose'] = 'TYPO3 DB Host';
$cfg['Servers'][$i]['pmadb'] = 'tx_phpmyadmin';
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['SignonSession'] = 'tx_phpmyadmin';
$cfg['Servers'][$i]['SignonURL'] = '../../modsub/index.php';
$cfg['Servers'][$i]['LogoutURL'] = '../../../../typo3/logout.php';

/* End of servers configuration */

$cfg['LeftFrameLight'] = true;
$cfg['LeftFrameDBTree'] = true;
$cfg['LeftFrameDBSeparator'] = '_';
$cfg['LeftFrameTableSeparator'] = '__';
$cfg['LeftFrameTableLevel'] = 1;
$cfg['LeftDisplayLogo'] = false;
$cfg['LeftDisplayServers'] = false;
$cfg['DisplayServersList'] = false;
$cfg['DisplayDatabasesList'] = 'auto';
$cfg['LeftPointerEnable'] = true;
$cfg['DefaultTabServer'] = 'main.php';
$cfg['DefaultTabDatabase'] = 'db_structure.php';
$cfg['DefaultTabTable'] = 'tbl_structure.php';
$cfg['LightTabs'] = false;
$cfg['ErrorIconic'] = true;
$cfg['MainPageIconic'] = true;
$cfg['ReplaceHelpImg'] = true;
$cfg['NavigationBarIconic'] = 'both';
$cfg['PropertiesIconic'] = true;
$cfg['BrowsePointerEnable'] = true;
$cfg['BrowseMarkerEnable'] = true;
$cfg['ModifyDeleteAtRight'] = false;
$cfg['ModifyDeleteAtLeft'] = true;
$cfg['RepeatCells'] = 100;
$cfg['DefaultDisplay'] = 'horizontal';
$cfg['TextareaCols'] = 40;
$cfg['TextareaRows'] = 7;
$cfg['LongtextDoubleTextarea'] = true;
$cfg['TextareaAutoSelect'] = false;
$cfg['CharEditing'] = 'input';
$cfg['CharTextareaCols'] = 40;
$cfg['CharTextareaRows'] = 2;
$cfg['CtrlArrowsMoving'] = true;
$cfg['DefaultPropDisplay'] = 'horizontal';
$cfg['InsertRows'] = 2;
$cfg['EditInWindow'] = true;
$cfg['QueryWindowHeight'] = 510;
$cfg['QueryWindowWidth'] = 640;
$cfg['QueryWindowDefTab'] = 'sql';

?>