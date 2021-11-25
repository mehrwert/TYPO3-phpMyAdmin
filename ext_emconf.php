<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'phpMyAdmin',
    'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only.',
    'category' => 'module',
    'shy' => 0,
    'version' => '6.0.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => 'Backend',
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
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-7.4.99',
            'typo3' => '9.5.0-11.5.99'
        ]
    ]
];
