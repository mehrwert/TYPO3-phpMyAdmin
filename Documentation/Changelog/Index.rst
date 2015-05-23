.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. _changelog:

Change Log
----------

The following is an overview of the changes in this extension. For more details `read the online log <https://github.com/mehrwert/TYPO3-phpMyAdmin>`_.

2015-05-23 Andreas Beutel - Version 4.19.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable 4.0.x release (4.0.10.10)
- Security: Includes several security fixes
- `PMASA-2015-3 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-3.php>`_: Vulnerability allowing man-in-the-middle attack on API call to GitHub.
- `PMASA-2015-2 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-1.php>`_: XSRF/CSRF vulnerability in phpMyAdmin setup.
- `PMASA-2015-1 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-1.php>`_: Risk of BREACH attack due to reflected parameter.
- Bugfix: Add extension configuration to disable transparent session ids to fix bugs in JSON output – see https://forge.typo3.org/issues/58263 - thanks to Stefan Froemken for providing this fix
- Feature: Add check for ``$GLOBALS['PHP_UNIT_TEST_RUNNING']`` in class ``tx_phpmyadmin_utilities`` to disable session and cookie handling if PHP Unit Test are in progress. Set ``$GLOBALS['PHP_UNIT_TEST_RUNNING'] = TRUE;`` in your Unit Test in your ``setUp()`` method.
- Change: Remove obsolete configuration option »AjaxEnable« (no longer available in pMA)
- Change: Switch documentation to reST

2014-12-05 Andreas Beutel - Version 4.18.5
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable 4.0.x release (4.0.10.5)
- Security: Includes several security fixes
- `PMASA-2014-13 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-13.php>`_: Multiple XSS vulnerabilities.
- `PMASA-2014-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-14.php>`_: Local file inclusion vulnerability.
- `PMASA-2014-17 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-17.php>`_: DoS vulnerability with long passwords.

2014-11-01 Andreas Beutel - Version 4.18.4
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable 4.0.x release (4.0.10.5)
- Security: Includes several security fixes
- `PMASA-2014-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-11.php>`_: XSS vulnerabilities in table search and table structure pages.
- `PMASA-2014-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-12.php>`_: XSS vulnerabilities in SQL debug output and server monitor page.

2014-09-25 Andreas Beutel - Version 4.18.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable 4.0.x release (4.0.10.3)
- Security: Includes several security fixes
- `PMASA-2014-10 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-10.php>`_: XSRF/CSRF due to DOM based XSS in the micro history feature
- `PMASA-2014-8 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-8.php>`_: Multiple XSS vulnerabilities in browse table, ENUM editor, monitor, query charts and table relations pages

2014-07-20 Andreas Beutel - Version 4.18.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable 4.0.x release (4.0.10.1)
- Security: Includes non-critical security fixes
- `PMASA-2014-5 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-5.php>`_: Self-XSS due to unescaped HTML output in database triggers page.
- `PMASA-2014-6 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-6.php>`_: Multiple XSS in AJAX confirmation messages.
- Feature: #56522: Do not remove PL language on packaging for T3O

2014-03-03 Andreas Beutel - Version 4.18.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Set TYPO3 6.2 compatibility

2014-01-31 Andreas Beutel - Version 4.18.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Set TYPO3 6.1 compatibility
- Feature: Updated pMA to the stable release (4.0.10)

2013-09-01 Andreas Beutel - Version 4.17.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: #51384: Add EM-config option to disable Ajax in pMA (thanks to Gabriel Kaufmann for the suggestion)

2013-07-29 Andreas Beutel - Version 4.16.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.5.8.2)
- Security: Includes several security fixes
- `PMASA-2013-15 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-15.php>`_: SQL injection vulnerabilities, producing a privilege escalation (control user).
- `PMASA-2013-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-14.php>`_: Self-XSS due to unescaped HTML output in schema export.
- `PMASA-2013-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-12.php>`_: Full path disclosure vulnerabilities.
- `PMASA-2013-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-11.php>`_: If a crafted version.json would be presented, an XSS could be introduced.
- `PMASA-2013-9 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-9.php>`_: 5 XSS vulnerabilities in setup, chart display, process list, and logo link.

2013-03-11 Andreas Beutel - Version 4.15.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fix: #46165: Wrong include files can be used (thanks to Dmitry Dulepov for reporting the issue and providing the patch!)

2012-11-28 Andreas Beutel - Version 4.15.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Set TYPO3 6.0 compatibility
- Feature: Updated pMA to the latest stable release (3.5.4)
- Fix: #42517: Typo3 6.0 - 'backend required' error

2012-08-13 Andreas Beutel - Version 4.14.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.5.2.2)
- Fix: #18560: Every first BE-Login fails (thanks to Markus Kappe for a patch and the others for testing)
- Security: Includes non-critical security fixes
- `PMASA-2012-3 <http://www.phpmyadmin.net/home_page/security/PMASA-2012-3.php>`_: Path disclosure due to missing library.
- `PMASA-2012-4 <http://www.phpmyadmin.net/home_page/security/PMASA-2012-4.php>`_: Fixed XSS vulnerabilities.

2012-03-31 Andreas Beutel - Version 4.13.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.10.2)
- Fix: #18245: phpmyadmin 4.11.3 - Error on first Access after login (thanks to Jerome Schneider for the patch!)

2012-02-14 Andreas Beutel - Version 4.12.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.10)

2011-12-22 Andreas Beutel - Version 4.11.10
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.9)
- Security: Non-critical security fixes
- `PMASA-2011-20 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-20.php>`_: XSS in export.

2011-11-10 Andreas Beutel - Version 4.11.9
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.7.1)
- Security: Security fixes
- `PMASA-2011-17 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-17.php>`_: Local file inclusion.

2011-10-23 Andreas Beutel - Version 4.11.8
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.7)
- Version number 4.11.7 was skipped due an erroneous upload in EM

2011-10-16 Andreas Beutel - Version 4.11.6
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.6)
- Security: Security fixes
- `PMASA-2011-15 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-15.php>`_: Local path disclosure vulnerability
- `PMASA-2011-16 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-16.php>`_: XSS in setup (host/verbose parameter)

2011-09-14 Andreas Beutel - Version 4.11.5
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.5)
- Security: Security fixes
- `PMASA-2011-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-14.php>`_: Multiple XSS

2011-08-24 Andreas Beutel - Version 4.11.4
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.4)
- Security: Security fixes
- `PMASA-2011-13 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-13.php>`_: Multiple XSS in the Tracking feature

2011-07-23 Andreas Beutel - Version 4.11.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.3.2)
- Security: Security fixes
- `PMASA-2011-9 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-9.php>`_: XSS in table Print view
- `PMASA-2011-10 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-10.php>`_: Local file inclusion
- `PMASA-2011-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-11.php>`_: Local file inclusion vulnerability and code execution
- `PMASA-2011-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-12.php>`_: Possible session manipulation in swekey authentication

2011-07-03 Andreas Beutel - Version 4.11.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.3.1)
- Security: Security fixes
- `PMASA-2011-5 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-5.php>`_: Fixed possible session manipulation in swekey authentication
- `PMASA-2011-6 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-6.php>`_: Fixed possible code injection incase session variables are compromised
- `PMASA-2011-7 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-7.php>`_: Fixed regexp quoting issue in Synchronize code

2011-05-23 Andreas Beutel - Version 4.11.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed #18148: Configuration: Allowed IPs doesn't work

2011-05-21 Andreas Beutel - Version 4.11.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.4.1)
- Security: Security fix (PMASA-2011-3)

2011-03-07 Andreas Beutel - Version 4.10.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Implemented #15492: 'doNotLoadInFE' => 1 in EM\_CONF

2011-03-07 Andreas Beutel - Version 4.10.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed #17850: Using t3lib\_div::cmpIP for access control

2011-02-26 Andreas Beutel - Version 4.10.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.3.9.2)
- Feature: IP-Access restrictions in extension configuration (Thanks to Søren Malling!)
- Feature: TYPO3 4.5 compatibility
- Change: Disabled the TYPO3 theme until next update

2010-08-20 Andreas Beutel - Version 4.9.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2010-5 and TYPO3-SA-2010-017) <http://www.phpmyadmin.net/home_page/security/PMASA-2010-5 and TYPO3-SA-2010-017).php>`_: Several XSS vulnerabilities were found in the code.
- Feature: Updated pMA to the latest stable release (3.3.5.1)

2010-07-28 Andreas Beutel - Version 4.8.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Critical security fix for broken backend permission check

2010-03-05 Andreas Beutel - Version 4.8.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.2.5)
- Fixed #13481: Get signon uri for redirect (initial patch provided by Michael Klapper, thanks!)
- Follow-up/Changed: Using vars $extPath and $typo3DocumentRoot

2009-11-26 Andreas Beutel - Version 4.7.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature #12678: Allow empty password for MySQL user.

2009-11-26 Andreas Beutel - Version 4.7.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed #12772: Removed erroneous require statement

2009-11-25 Andreas Beutel - Version 4.7.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed a bug: Fixed another issue with path calculation (works now for installations in subdirectories)
- Feature: Compatibility for TYPO3 4.3

2009-11-19 Andreas Beutel - Version 4.7.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed #12056: Wrong calculation of $BACK\_PATH
- Workaround for #12057: Empty MySQL password blocks EXT:phpmyadmin
- Feature: Updated pMA to the latest stable release (3.2.3)
- Feature: Added custom TYPO3 theme

2009-11-19 Andreas Beutel - Version 4.6.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

– was erroneously omitted during update and released as 4.7.0

2009-10-20 Andreas Beutel - Version 4.5.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2009-6) <http://www.phpmyadmin.net/home_page/security/PMASA-2009-6).php>`_: XSS and SQL injection vulnerabilities
- Feature: Updated pMA to the latest stable release (3.2.2.1)
- Feature: Updated the manual to latest documentation template

2009-06-15 Andreas Beutel - Version 4.4.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.2.0)
- Fixed a bug: Logoff in 4.3.x did not work since directory name was wrong

2009-03-24 Andreas Beutel - Version 4.3.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2009-3) <http://www.phpmyadmin.net/home_page/security/PMASA-2009-3).php>`_: Insufficient output sanitizing when generating configuration file.
- Feature: Updated pMA to the latest stable release (3.1.3.1)

2008-12-14 Andreas Beutel - Version 4.2.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2008-10) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-10).php>`_: SQL injection through XSRF on several pages
- Feature: Updated pMA to the latest stable release (3.1.1)
- Changed extension config: Set 'clearcacheonload' to 0
- Renamed ChangeLog to ChangeLog.txt

2008-11-01 Andreas Beutel - Version 4.1.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2008-9) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-9).php>`_: XSS in a Designer component
- Feature: Updated pMA to the latest stable release (3.0.1.1)
- Feature: Configuration: Restored the default behavior of the left navigation frame. Set link to sql.php - Thanks to Julian Hofman for pointing me to this option.

2008-10-25 Andreas Beutel - Version 4.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Updated pMA to the latest stable release (3.0.1)
- Fixed bug #6934: Setting the path variables in SESSION to avoid file includes
- Feature: Changed extension to use typo3/mod.php. See also http://bugs.typo3.org/view.php?id=5278

2008-10-02 Andreas Beutel - Version 4.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Bugfix: Trying to fix the redirect bug by a forcing the cookie according to issue #8884 http://bugs.typo3.org/view.php?id=8884#c23323 suggested by Rene Nitzsche

2008-09-28 Andreas Beutel - Version 4.0.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Updated pMA to the latest stable release (3.0.0)
- Branching the pMA extension into two branches: The 3.x series with PHP4 support and the 4.x series with a minimum requirement of MySQL 5, PHP5 (5.2 and above)
- Old (3.x) versions may be obtained at https://www.mehrwert.de/content-management/typo3-extensions/

2008-09-22 Andreas Beutel - Version 3.4.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2008-8) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-8).php>`_: XSS in MSIE using NUL byte
- Feature: Updated pMA to the latest stable release (2.11.9.2)

2008-09-15 Andreas Beutel - Version 3.3.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security: Security fix (`PMASA-2008-7) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-7).php>`_: Code execution vulnerability
- Feature: Updated pMA to the latest stable release (2.11.9.1)
- Skipping 3.2.0 see below

2008-06-25 Andreas Beutel - Version 3.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- was release as 3.2.0 by the TYPO3 Security Team by accident
- Security fix (`PMASA-2008-4) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-4).php>`_: XSS on plausible insecure PHP installation
- Updated pMA to the latest stable release (2.11.7)
- Changed handling of required/included files
- Removed XCLASS call in modsub/index.php

2008-05-01 Andreas Beutel - Version 3.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed a bug related to required files (only occurred if pMA is installed globally). Thanks to Laurent for pointing me to this issue

2008-04-30 Andreas Beutel - Version 3.0.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Updated pMA to the latest stable release (2.11.6)
- Changed the authentication concept for pMA
- Using signon auth (see http://wiki.cihar.com/pma/auth\_types#signon) now (Thanks to Marc Bastian Heinrichs for pointing me to this method)
- Added a call to the TYPO3 BE logoff hook to delete the pMA session on logout
- Updated the version number

2007-07-16 Andreas Beutel - Version 0.2.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security fix (mehrwert-Issue #4110): Provides exactly the same functionality as the previous version but contains an important bug fix.

2007-02-10 Andreas Beutel - Version 0.2.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Merged changes from latest release of the global extension (from T3 3.8.1)
- Updated phpMyAdmin to 2.6.4pl3 for security reasons
- Extension is no longer a shy extension
- Removed lock type GLOBAL, extension can be installed locally
- Merged new translations

2006-09-10 Andreas Beutel - Version 0.1.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Pre-release of 2.6.4pl3

2006-08-16 Andreas Beutel - Version 0.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Updated the phpMyAdmin version to 2.6.0pl3 and fixed the stylesheet bug
- Merged translations

2005-11-09 Michael Stucki
^^^^^^^^^^^^^^^^^^^^^^^^^
- New upstream release
- Check server environment settings using isset() - caused phpMyAdmin module to stop loading otherwise