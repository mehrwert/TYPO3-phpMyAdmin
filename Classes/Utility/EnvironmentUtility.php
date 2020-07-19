<?php
namespace Mehrwert\Phpmyadmin\Utility;

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

/**
 * Utilities for the phpMyAdmin third party database Administration Tool
 *
 * @author        mehrwert <typo3@mehrwert.de>
 * @license        GPL
 */
class EnvironmentUtility
{
    /**
     * The TYPO3 public web folder
     *
     * @var string
     */
    protected static $publicPath;

    /**
     * The TYPO3 public web folder.
     *
     * Backwards compatibility with TYPO3 v8
     *
     * @return string
     */
    public static function getPublicPath()
    {
        if (empty(self::$publicPath)) {
            if (class_exists('\\TYPO3\\CMS\\Core\\Core\\Environment')) {
                self::$publicPath = \TYPO3\CMS\Core\Core\Environment::getPublicPath();
            } else {
                self::$publicPath = rtrim(PATH_site, '/');
            }
        }

        return self::$publicPath;
    }

    /**
     * The TYPO3 backend folder.
     *
     * Backwards compatibility with TYPO3 v8
     *
     * @return string
     */
    public static function getBackendPath()
    {
        return self::getPublicPath() . '/typo3';
    }
}
