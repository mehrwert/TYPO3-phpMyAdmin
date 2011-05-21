<?php

// DO NOT REMOVE OR CHANGE THESE 3 LINES:
define('TYPO3_MOD_PATH', '../typo3conf/ext/phpmyadmin/modsub/');
$BACK_PATH = '../../../../typo3/';
$MCONF['name'] = 'tools_txphpmyadmin';

// Configuration
$MCONF['script'] = 'index.php';
$MCONF['access'] = 'admin';

$MCONF['phpMyAdminSubDir'] = '../res/phpMyAdmin-2.11.11.3-all-languages/';
$MCONF['phpMyAdminScript'] = 'index.php';

$MLANG['default']['tabs_images']['tab'] = 'thirdparty_db.gif';
$MLANG['default']['ll_ref'] = 'LLL:EXT:phpmyadmin/modsub/locallang_mod.php';

// Define the absolut path to localconf.php
$typo3localconf = @dirname(__FILE__).'/../../../../typo3conf/localconf.php';

// Include localconf.php if pMA is a locally installed extension
if( @is_file($typo3localconf) === true ) {
	@include_once($typo3localconf);
	// Set include status true (used in pMA configuration)
	define('T3_PMA_LOCALCONF_INCLUDED', true);
} else {
	// Set include status false (used in pMA configuration)
	define('T3_PMA_LOCALCONF_INCLUDED', false);
}

?>