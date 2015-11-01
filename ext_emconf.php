<?php

########################################################################
# Extension Manager/Repository config file for ext "phpmyadmin".
#
# Auto generated 21-05-2011 12:02
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'phpMyAdmin',
	'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only.',
	'category' => 'module',
	'shy' => 0,
	'version' => '5.1.4',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'BeModule',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_phpmyadmin',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Andreas Beutel - mehrwert',
	'author_email' => 'typo3@mehrwert.de',
	'author_company' => 'mehrwert intermediale kommunikation GmbH',
	'doNotLoadInFE' => 1,
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.6.99',
			'typo3' => '6.2.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	)
);

?>