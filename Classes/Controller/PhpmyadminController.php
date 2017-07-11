<?php
namespace mehrwert\Phpmyadmin\Controller;

use mehrwert\Phpmyadmin\BeModule\PmaBeModule;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PhpmyadminController extends ActionController
{
    public function indexAction()
    {
       return GeneralUtility::makeInstance(PmaBeModule::class);
    }
}