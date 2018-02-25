<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'phpMyAdmin',
    'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only.',
    'category' => 'module',
    'shy' => 0,
    'version' => '5.2.2',
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
            'php' => '7.0.0-7.1.99',
            'typo3' => '8.7.0-8.7.99'
        ]
    ]
];
