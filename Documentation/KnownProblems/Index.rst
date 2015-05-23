

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Known Problems
--------------

TYPO3 versions and PHP Compatibility
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
The included phpMyAdmin 4.0.x is an older version and compatible with PHP 5.2 and MySQL 5. It is supported for security fixes only (until Jan 1, 2017). Compatibility of TYPO3 extension is set to TYPO3 4.5-LTS to 6.2-LTS - but it may NOT WORK due to an »incompatible« PHP version.

**Roadmap for Upgrade**
With the end of support for phpMyAdmin 4.0 it will be replaced by 4.4 and the TYPO3 version constraint will be at least 6.2-LTS. This change is expected to happen until the end of 2015.

Session Start Error
^^^^^^^^^^^^^^^^^^^
On first access of pMA in TYPO3 Backend an error is thrown: »Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.«

**Solution:**
Click a second time on the phpMyAdmin menu item to start the session.

Redirect Problems in pMA
^^^^^^^^^^^^^^^^^^^^^^^^
Some users reported permanent redirects (infinite loop) in pMA versions > 3.0.0 when pMA tries to authenticate the user. Login and authentication have been switched to Signon in 3.0.0 and later. In our tests this only happened if there was a problem with the cookies (used for signon) of pMA.

**Solution:**
In our tests was to log out of the TYPO3 Backend and remove all cookies for this particular host (pMA, TYPO3 BE, Session Cookies).

**Please note:**
The maintenance releases pMA 4.0.1 and 3.4.1 address this issue.
