<?php

########################################################################
# Extension Manager/Repository config file for ext: "phpmyadmin"
#
# Auto generated 15-10-2009 21:53
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'phpMyAdmin (legacy release)',
	'description' => 'Legacy release for PHP 4 and MySQL 4 of third party \'phpMyAdmin\' administration module. TYPO3 preconfigures phpMyAdmin to the current database and restricts access to admin-users only.',
	'category' => 'module',
	'shy' => 0,
	'version' => '3.7.0',
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
	'author' => 'Andreas Beutel / mehrwert',
	'author_email' => 'typo3@mehrwert.de',
	'author_company' => 'mehrwert intermediale kommunikation GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '4.2.0-5.2.99',
			'typo3' => '3.8.0-4.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>