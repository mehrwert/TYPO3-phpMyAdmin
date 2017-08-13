<?php
namespace mehrwert\Phpmyadmin\Controller;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PhpmyadminController extends ActionController
{
    /**
     * Default action for backend module
     *
     * @return object
     * @since 5.2.0
     */
    public function indexAction()
    {
        return GeneralUtility::makeInstance(\mehrwert\Phpmyadmin\Backend\PmaModule::class);
    }
}