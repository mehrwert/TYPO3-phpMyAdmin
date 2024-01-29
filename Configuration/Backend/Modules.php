<?php

return [
	'phpmyadmin_mod1' => [
		'parent' => 'tools',
		'access' => 'admin',
		'workspaces' => 'live',
		'path' => '/phpmyadmin/mod1',
		'labels' => 'LLL:EXT:phpmyadmin/Resources/Private/Language/locallang_mod.xlf',
		'icon'   => 'EXT:phpmyadmin/Resources/Public/Icons/module-phpmyadmin.svg',
		'extensionName' => 'Phpmyadmin',
		'controllerActions' => [
			\Mehrwert\Phpmyadmin\Controller\PhpmyadminController::class => 'index'
		],
	],
];