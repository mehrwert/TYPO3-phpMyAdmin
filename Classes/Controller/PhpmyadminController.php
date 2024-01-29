<?php

namespace Mehrwert\Phpmyadmin\Controller;

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

use Mehrwert\Phpmyadmin\Backend\PmaModule;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Core\Http\ApplicationType;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

#[AsController]
class PhpmyadminController extends ActionController {

	private PmaModule $pmaModule;

	public function __construct(PmaModule $pmaModule) {
		$this->pmaModule = $pmaModule;
	}

	/**
	 * Default action for backend module
	 *
	 * @return object
	 * @since 5.2.0
	 */
	public function indexAction() {
		// Proceed if BE loaded
		if (ApplicationType::fromRequest($GLOBALS['TYPO3_REQUEST'])->isBackend()) {
			$this->pmaModule->main();
			return $this->htmlResponse($this->pmaModule->printContent());
		} else {
			die('<h1>Error</h1><p>The TYPO3 Backend is required for phpMyAdmin module but was not loaded.</p>');
		}
	}
}
