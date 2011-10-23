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
	'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only. 4.x releases require PHP 5.2, TYPO3 4.2 and MySQL 5. The 3.x branch is still supported: http://www.mehrwert.de/go/t3x',
	'category' => 'module',
	'shy' => 0,
	'version' => '4.11.8',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'modsub',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
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
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.2.0-4.6.99',
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