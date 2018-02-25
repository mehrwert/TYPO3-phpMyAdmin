.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. _changelog:

==========
Change Log
==========

The following is an overview of the changes in this extension. For more details `read the online log <https://github.com/mehrwert/TYPO3-phpMyAdmin>`_.

2018-02-25 Andreas Beutel - Version 5.2.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.7.x release (4.7.8)
- [SECURITY] Includes vendor security fix of moderate severity
- `PMASA-2018-1 <https://www.phpmyadmin.net/security/PMASA-2018-1/>`_: Self XSS in central columns feature

2018-01-01 Andreas Beutel - Version 5.2.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.7.x release (4.7.7)
- [SECURITY] Includes critical vendor security fixes
- `PMASA-2017-9 <https://www.phpmyadmin.net/security/PMASA-2017-9/>`_: XSRF/CSRF vulnerability in phpMyAdmin
- [SECURITY] Includes non-critical vendor security fixes
- `PMASA-2017-8 <https://www.phpmyadmin.net/security/PMASA-2017-8/>`_: Bypass $cfg['Servers'][$i]['AllowNoPassword']

2017-07-21 Andreas Beutel - Version 5.2.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [!!!][TASK] Refactor BE Module for TYPO3 8.x compatibility (thanks to Sven Juergens for the contribution)
- [FEATURE] Updated pMA to the latest stable 4.7.x release (4.7.3)

2017-01-31 Andreas Beutel - Version 5.1.9
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.10)
- [SECURITY] Includes non-critical vendor security fixes
- `PMASA-2017-7 <https://www.phpmyadmin.net/security/PMASA-2017-7/>`_: DOS in replication status
- `PMASA-2017-6 <https://www.phpmyadmin.net/security/PMASA-2017-6/>`_: SSRF in replication
- `PMASA-2017-5 <https://www.phpmyadmin.net/security/PMASA-2017-5/>`_: Cookie attribute injection attack
- `PMASA-2017-4 <https://www.phpmyadmin.net/security/PMASA-2017-4/>`_: CSS injection in themes
- `PMASA-2017-3 <https://www.phpmyadmin.net/security/PMASA-2017-3/>`_: DOS vulnerability in table editing
- `PMASA-2017-1 <https://www.phpmyadmin.net/security/PMASA-2017-1/>`_: Open redirect
- [SECURITY] Includes minor vendor security fixes
- `PMASA-2017-2 <https://www.phpmyadmin.net/security/PMASA-2017-2/>`_: php-gettext code execution

2016-11-30 Andreas Beutel - Version 5.1.8
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.9)
- [SECURITY] Includes vendor security fixes
- `PMASA-2016-58 <https://www.phpmyadmin.net/security/PMASA-2016-58/>`_: Unsafe generation of $cfg['blowfish_secret']
- `PMASA-2016-59 <https://www.phpmyadmin.net/security/PMASA-2016-59/>`_: phpMyAdmin's phpinfo functionality is removed
- `PMASA-2016-60 <https://www.phpmyadmin.net/security/PMASA-2016-60/>`_: AllowRoot and allow/deny rule bypass with specially-crafted username
- `PMASA-2016-61 <https://www.phpmyadmin.net/security/PMASA-2016-61/>`_: Username matching weaknesses with allow/deny rules
- `PMASA-2016-62 <https://www.phpmyadmin.net/security/PMASA-2016-62/>`_: Possible to bypass logout timeout
- `PMASA-2016-63 <https://www.phpmyadmin.net/security/PMASA-2016-63/>`_: Full path disclosure (FPD) weaknesses
- `PMASA-2016-64 <https://www.phpmyadmin.net/security/PMASA-2016-64/>`_: Multiple XSS weaknesses
- `PMASA-2016-65 <https://www.phpmyadmin.net/security/PMASA-2016-65/>`_: Multiple denial-of-service (DOS) vulnerabilities
- `PMASA-2016-66 <https://www.phpmyadmin.net/security/PMASA-2016-66/>`_: Possible to bypass white-list protection for URL redirection
- `PMASA-2016-69 <https://www.phpmyadmin.net/security/PMASA-2016-69/>`_: Multiple SQL injection vulnerabilities
- `PMASA-2016-70 <https://www.phpmyadmin.net/security/PMASA-2016-70/>`_: Incorrect serialized string parsing
- `PMASA-2016-71 <https://www.phpmyadmin.net/security/PMASA-2016-71/>`_: CSRF token not stripped from the URL

2016-08-17 Andreas Beutel - Version 5.1.7
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.8)
- [SECURITY] Includes critical vendor security fixes
- `PMASA-2016-56 <https://www.phpmyadmin.net/security/PMASA-2016-56/>`_: Remote code execution vulnerability when PHP is running with dbase extension
- `PMASA-2016-54 <https://www.phpmyadmin.net/security/PMASA-2016-54/>`_: Remote code execution vulnerability when run as CGI
- `PMASA-2016-52 <https://www.phpmyadmin.net/security/PMASA-2016-52/>`_: ArbitraryServerRegexp bypass
- `PMASA-2016-45 <https://www.phpmyadmin.net/security/PMASA-2016-45/>`_: DOS attack with forced persistent connections
- [SECURITY] Includes serious vendor security fixes
- `PMASA-2016-53 <https://www.phpmyadmin.net/security/PMASA-2016-53/>`_: Denial of service (DOS) attack by changing password to a very long string
- `PMASA-2016-47 <https://www.phpmyadmin.net/security/PMASA-2016-47/>`_: IPv6 and proxy server IP-based authentication rule circumvention
- `PMASA-2016-42 <https://www.phpmyadmin.net/security/PMASA-2016-42/>`_: SQL injection attack as control user
- `PMASA-2016-39 <https://www.phpmyadmin.net/security/PMASA-2016-39/>`_: SQL injection attack
- `PMASA-2016-37 <https://www.phpmyadmin.net/security/PMASA-2016-37/>`_: Path traversal with SaveDir and UploadDir
- `PMASA-2016-36 <https://www.phpmyadmin.net/security/PMASA-2016-36/>`_: Local file exposure through symlinks with UploadDir
- `PMASA-2016-35 <https://www.phpmyadmin.net/security/PMASA-2016-35/>`_: Local file exposure
- `PMASA-2016-34 <https://www.phpmyadmin.net/security/PMASA-2016-34/>`_: SQL injection attack
- `PMASA-2016-29 <https://www.phpmyadmin.net/security/PMASA-2016-29/>`_: Weakness with cookie encryption
- `PMASA-2016-22 <https://www.phpmyadmin.net/security/PMASA-2016-22/>`_: DOS attack
- `PMASA-2016-21 <https://www.phpmyadmin.net/security/PMASA-2016-21/>`_: Multiple XSS vulnerabilities
- [SECURITY] Includes moderate vendor security fixes
- `PMASA-2016-51 <https://www.phpmyadmin.net/security/PMASA-2016-51/>`_: Reflected File Download attack
- `PMASA-2016-50 <https://www.phpmyadmin.net/security/PMASA-2016-50/>`_: Referrer leak in url.php
- `PMASA-2016-49 <https://www.phpmyadmin.net/security/PMASA-2016-49/>`_: Bypass URL redirect protection
- `PMASA-2016-46 <https://www.phpmyadmin.net/security/PMASA-2016-46/>`_: Denial of service (DOS) attack by for loops
- `PMASA-2016-43 <https://www.phpmyadmin.net/security/PMASA-2016-43/>`_: Unvalidated data passed to unserialize()
- `PMASA-2016-32 <https://www.phpmyadmin.net/security/PMASA-2016-32/>`_: PHP code injection
- `PMASA-2016-30 <https://www.phpmyadmin.net/security/PMASA-2016-30/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-28 <https://www.phpmyadmin.net/security/PMASA-2016-28/>`_: Referrer leak in transformations
- `PMASA-2016-27 <https://www.phpmyadmin.net/security/PMASA-2016-27/>`_: Unsafe handling of preg_replace parameters
- `PMASA-2016-26 <https://www.phpmyadmin.net/security/PMASA-2016-26/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-23 <https://www.phpmyadmin.net/security/PMASA-2016-23/>`_: Multiple full path disclosure vulnerabilities
- `PMASA-2016-19 <https://www.phpmyadmin.net/security/PMASA-2016-19/>`_: SQL injection attack
- [SECURITY] Includes non-critical vendor security fixes
- `PMASA-2016-55 <https://www.phpmyadmin.net/security/PMASA-2016-55/>`_: Denial of service (DOS) attack with dbase extension
- `PMASA-2016-48 <https://www.phpmyadmin.net/security/PMASA-2016-48/>`_: Detect if user is logged in
- `PMASA-2016-41 <https://www.phpmyadmin.net/security/PMASA-2016-41/>`_: Denial of service (DOS) attack in transformation feature
- `PMASA-2016-38 <https://www.phpmyadmin.net/security/PMASA-2016-38/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-33 <https://www.phpmyadmin.net/security/PMASA-2016-33/>`_: Full path disclosure
- `PMASA-2016-17 <https://www.phpmyadmin.net/security/PMASA-2016-17/>`_: BBCode injection vulnerability

2016-05-27 Andreas Beutel - Version 5.1.6
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.6)
- [SECURITY] Includes non-critical vendor security fixes
- `PMASA-2016-11 <https://www.phpmyadmin.net/security/PMASA-2016-11/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-12 <https://www.phpmyadmin.net/security/PMASA-2016-12/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-16 <https://www.phpmyadmin.net/security/PMASA-2016-16/>`_: Self XSS

2016-01-28 Andreas Beutel - Version 5.1.5
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.3)
- [SECURITY] Includes critical vendor security fixes
- `PMASA-2016-5 <https://www.phpmyadmin.net/security/PMASA-2016-5/>`_: Unsafe comparison of XSRF/CSRF token
- [SECURITY] Includes non-critical vendor security fixes
- `PMASA-2015-6 <https://www.phpmyadmin.net/security/PMASA-2015-6/>`_: Full path disclosure vulnerability
- `PMASA-2016-1 <https://www.phpmyadmin.net/security/PMASA-2016-1/>`_: Multiple full path disclosure vulnerabilities
- `PMASA-2016-2 <https://www.phpmyadmin.net/security/PMASA-2016-2/>`_: Unsafe generation of XSRF/CSRF token
- `PMASA-2016-3 <https://www.phpmyadmin.net/security/PMASA-2016-3/>`_: Multiple XSS vulnerabilities
- `PMASA-2016-4 <https://www.phpmyadmin.net/security/PMASA-2016-4/>`_: Insecure password generation in JavaScript
- `PMASA-2016-6 <https://www.phpmyadmin.net/security/PMASA-2016-6/>`_: Multiple full path disclosure vulnerabilities
- `PMASA-2016-7 <https://www.phpmyadmin.net/security/PMASA-2016-7/>`_: XSS vulnerability in normalization page
- [FEATURE] Provide composer.json (thanks to André Wuttig for the contribution)

2015-11-01 Andreas Beutel - Version 5.1.4
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Update version number in vendor path and Settings.xml

2015-10-31 Andreas Beutel - Version 5.1.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15.1)
- [CHANGE] Set TYPO3 compatibility for 6.2 to 7.6
- [SECURITY] Includes a vendor security fix
- `PMASA-2015-5 <https://www.phpmyadmin.net/security/PMASA-2015-5/>`_: Content spoofing vulnerability when redirecting user to an external site

2015-09-29 Andreas Beutel - Version 5.1.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.15)
- [CHANGE] Set TYPO3 compatibility for 6.2 to 7.5

2015-08-24 Andreas Beutel - Version 5.1.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fix wrong module path in config.inc.php - #69298
- [CHANGE] Rename variable keys from typo_ to typo3_
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.14)

2015-08-10 Andreas Beutel - Version 5.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.13.1)
- [CHANGE] Set TYPO3 compatibility for 6.2 to 7.4

2015-07-13 Andreas Beutel - Version 5.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Remove deprecated conf.php file and update ext_tables.php to prevent duplicate configuration - #68065
- [CHANGE] Update documentation and add new screenshot and fix some spelling errors

2015-07-12 Andreas Beutel - Version 5.0.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Release of version 5.0.0 stable
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.11)

2015-06-20 Andreas Beutel - Version 5.0.0-dev
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.10)
- [CHANGE] Set TYPO3 compatibility for 6.2 to 7.3
- [!!!][CHANGE] Switch to mysqli for database connection
- [CHANGE] Drop unsupported configuration pMA directives
- [FEATURE] Support of mysql socket connections if configured in TYPO3
- [CHANGE] Code cleanup in backend module
- [CHANGE] Move localization to XLIFF

2015-05-26 Andreas Beutel - Version 5.0.0-dev
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Add check for ``$GLOBALS['PHP_UNIT_TEST_RUNNING']`` in class ``tx_phpmyadmin_utilities`` to disable session and cookie handling if PHP Unit Tests are in progress using createFakeFrontEnd(). Set ``$GLOBALS['PHP_UNIT_TEST_RUNNING'] = TRUE;`` in your Unit Test in the ``setUp()`` method of the unit test.

2015-05-25 Andreas Beutel - Version 5.0.0-dev
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.4.x release (4.4.7)
- [CHANGE] Set TYPO3 compatibility for 6.2 to 7.2

2015-05-26 Andreas Beutel - Version 4.19.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Feature: Add check for ``$GLOBALS['PHP_UNIT_TEST_RUNNING']`` in class ``tx_phpmyadmin_utilities`` to disable session and cookie handling if PHP Unit Tests are in progress using createFakeFrontEnd (). Set ``$GLOBALS['PHP_UNIT_TEST_RUNNING'] = TRUE;`` in your Unit Test in the ``setUp()`` method of the unit test.

2015-05-23 Andreas Beutel - Version 4.19.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.0.x release (4.0.10.10)
- [SECURITY] Includes several security fixes
- `PMASA-2015-3 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-3.php>`_: Vulnerability allowing man-in-the-middle attack on API call to GitHub.
- `PMASA-2015-2 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-1.php>`_: XSRF/CSRF vulnerability in phpMyAdmin setup.
- `PMASA-2015-1 <http://www.phpmyadmin.net/home_page/security/PMASA-2015-1.php>`_: Risk of BREACH attack due to reflected parameter.
- [BUGFIX] Add extension configuration to disable transparent session ids to fix bugs in JSON output – see https://forge.typo3.org/issues/58263 - thanks to Stefan Froemken for providing this fix
- [CHANGE] Remove obsolete configuration option »AjaxEnable« (no longer available in pMA)
- [CHANGE] Switch documentation to reST

2014-12-05 Andreas Beutel - Version 4.18.5
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.0.x release (4.0.10.5)
- [SECURITY] Includes several security fixes
- `PMASA-2014-13 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-13.php>`_: Multiple XSS vulnerabilities.
- `PMASA-2014-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-14.php>`_: Local file inclusion vulnerability.
- `PMASA-2014-17 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-17.php>`_: DoS vulnerability with long passwords.

2014-11-01 Andreas Beutel - Version 4.18.4
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.0.x release (4.0.10.5)
- [SECURITY] Includes several security fixes
- `PMASA-2014-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-11.php>`_: XSS vulnerabilities in table search and table structure pages.
- `PMASA-2014-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-12.php>`_: XSS vulnerabilities in SQL debug output and server monitor page.

2014-09-25 Andreas Beutel - Version 4.18.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.0.x release (4.0.10.3)
- [SECURITY] Includes several security fixes
- `PMASA-2014-10 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-10.php>`_: XSRF/CSRF due to DOM based XSS in the micro history feature
- `PMASA-2014-8 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-8.php>`_: Multiple XSS vulnerabilities in browse table, ENUM editor, monitor, query charts and table relations pages

2014-07-20 Andreas Beutel - Version 4.18.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable 4.0.x release (4.0.10.1)
- [SECURITY] Includes non-critical security fixes
- `PMASA-2014-5 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-5.php>`_: Self-XSS due to unescaped HTML output in database triggers page.
- `PMASA-2014-6 <http://www.phpmyadmin.net/home_page/security/PMASA-2014-6.php>`_: Multiple XSS in AJAX confirmation messages.
- [FEATURE] #56522: Do not remove PL language on packaging for T3O

2014-03-03 Andreas Beutel - Version 4.18.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Set TYPO3 6.2 compatibility

2014-01-31 Andreas Beutel - Version 4.18.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Set TYPO3 6.1 compatibility
- [FEATURE] Updated pMA to the stable release (4.0.10)

2013-09-01 Andreas Beutel - Version 4.17.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] #51384: Add EM-config option to disable Ajax in pMA (thanks to Gabriel Kaufmann for the suggestion)

2013-07-29 Andreas Beutel - Version 4.16.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.5.8.2)
- [SECURITY] Includes several security fixes
- `PMASA-2013-15 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-15.php>`_: SQL injection vulnerabilities, producing a privilege escalation (control user).
- `PMASA-2013-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-14.php>`_: Self-XSS due to unescaped HTML output in schema export.
- `PMASA-2013-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-12.php>`_: Full path disclosure vulnerabilities.
- `PMASA-2013-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-11.php>`_: If a crafted version.json would be presented, an XSS could be introduced.
- `PMASA-2013-9 <http://www.phpmyadmin.net/home_page/security/PMASA-2013-9.php>`_: 5 XSS vulnerabilities in setup, chart display, process list, and logo link.

2013-03-11 Andreas Beutel - Version 4.15.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] #46165: Wrong include files can be used (thanks to Dmitry Dulepov for reporting the issue and providing the patch!)

2012-11-28 Andreas Beutel - Version 4.15.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Set TYPO3 6.0 compatibility
- [FEATURE] Updated pMA to the latest stable release (3.5.4)
- [BUGFIX] #42517: Typo3 6.0 - 'backend required' error

2012-08-13 Andreas Beutel - Version 4.14.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.5.2.2)
- [BUGFIX] #18560: Every first BE-Login fails (thanks to Markus Kappe for a patch and the others for testing)
- [SECURITY] Includes non-critical security fixes
- `PMASA-2012-3 <http://www.phpmyadmin.net/home_page/security/PMASA-2012-3.php>`_: Path disclosure due to missing library.
- `PMASA-2012-4 <http://www.phpmyadmin.net/home_page/security/PMASA-2012-4.php>`_: Fixed XSS vulnerabilities.

2012-03-31 Andreas Beutel - Version 4.13.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.10.2)
- [BUGFIX] #18245: phpmyadmin 4.11.3 - Error on first Access after login (thanks to Jerome Schneider for the patch!)

2012-02-14 Andreas Beutel - Version 4.12.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.10)

2011-12-22 Andreas Beutel - Version 4.11.10
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.9)
- [SECURITY] Non-critical security fixes
- `PMASA-2011-20 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-20.php>`_: XSS in export.

2011-11-10 Andreas Beutel - Version 4.11.9
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.7.1)
- [SECURITY] Security fixes
- `PMASA-2011-17 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-17.php>`_: Local file inclusion.

2011-10-23 Andreas Beutel - Version 4.11.8
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.7)
- Version number 4.11.7 was skipped due an erroneous upload in EM

2011-10-16 Andreas Beutel - Version 4.11.6
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.6)
- [SECURITY] Security fixes
- `PMASA-2011-15 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-15.php>`_: Local path disclosure vulnerability
- `PMASA-2011-16 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-16.php>`_: XSS in setup (host/verbose parameter)

2011-09-14 Andreas Beutel - Version 4.11.5
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.5)
- [SECURITY] Security fixes
- `PMASA-2011-14 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-14.php>`_: Multiple XSS

2011-08-24 Andreas Beutel - Version 4.11.4
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.4)
- [SECURITY] Security fixes
- `PMASA-2011-13 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-13.php>`_: Multiple XSS in the Tracking feature

2011-07-23 Andreas Beutel - Version 4.11.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.3.2)
- [SECURITY] Security fixes
- `PMASA-2011-9 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-9.php>`_: XSS in table Print view
- `PMASA-2011-10 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-10.php>`_: Local file inclusion
- `PMASA-2011-11 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-11.php>`_: Local file inclusion vulnerability and code execution
- `PMASA-2011-12 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-12.php>`_: Possible session manipulation in swekey authentication

2011-07-03 Andreas Beutel - Version 4.11.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.3.1)
- [SECURITY] Security fixes
- `PMASA-2011-5 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-5.php>`_: Fixed possible session manipulation in swekey authentication
- `PMASA-2011-6 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-6.php>`_: Fixed possible code injection incase session variables are compromised
- `PMASA-2011-7 <http://www.phpmyadmin.net/home_page/security/PMASA-2011-7.php>`_: Fixed regexp quoting issue in Synchronize code

2011-05-23 Andreas Beutel - Version 4.11.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fixed #18148: Configuration: Allowed IPs doesn't work

2011-05-21 Andreas Beutel - Version 4.11.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.4.1)
- [SECURITY] Security fix (PMASA-2011-3)

2011-03-07 Andreas Beutel - Version 4.10.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Implemented #15492: 'doNotLoadInFE' => 1 in EM_CONF

2011-03-07 Andreas Beutel - Version 4.10.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fixed #17850: Using t3lib\_div::cmpIP for access control

2011-02-26 Andreas Beutel - Version 4.10.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.3.9.2)
- [FEATURE] IP-Access restrictions in extension configuration (Thanks to Søren Malling!)
- [FEATURE] TYPO3 4.5 compatibility
- [CHANGE] Disabled the TYPO3 theme until next update

2010-08-20 Andreas Beutel - Version 4.9.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2010-5 and TYPO3-SA-2010-017) <http://www.phpmyadmin.net/home_page/security/PMASA-2010-5 and TYPO3-SA-2010-017).php>`_: Several XSS vulnerabilities were found in the code.
- [FEATURE] Updated pMA to the latest stable release (3.3.5.1)

2010-07-28 Andreas Beutel - Version 4.8.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Critical security fix for broken backend permission check

2010-03-05 Andreas Beutel - Version 4.8.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.2.5)
- [BUGFIX] Fixed #13481: Get signon uri for redirect (initial patch provided by Michael Klapper, thanks!)
- [BUGFIX] Follow-up/Changed: Using vars $extPath and ``$typo3DocumentRoot``

2009-11-26 Andreas Beutel - Version 4.7.3
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Feature #12678: Allow empty password for MySQL user.

2009-11-26 Andreas Beutel - Version 4.7.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fixed #12772: Removed erroneous require statement

2009-11-25 Andreas Beutel - Version 4.7.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fixed a bug: Fixed another issue with path calculation (works now for installations in subdirectories)
- [FEATURE] Compatibility for TYPO3 4.3

2009-11-19 Andreas Beutel - Version 4.7.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Fixed #12056: Wrong calculation of $BACK\_PATH
- [BUGFIX] Workaround for #12057: Empty MySQL password blocks EXT:phpmyadmin
- [FEATURE] Updated pMA to the latest stable release (3.2.3)
- [FEATURE] Added custom TYPO3 theme

2009-11-19 Andreas Beutel - Version 4.6.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
– was erroneously omitted during update and released as 4.7.0

2009-10-20 Andreas Beutel - Version 4.5.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2009-6) <http://www.phpmyadmin.net/home_page/security/PMASA-2009-6).php>`_: XSS and SQL injection vulnerabilities
- [FEATURE] Updated pMA to the latest stable release (3.2.2.1)
- [FEATURE] Updated the manual to latest documentation template

2009-06-15 Andreas Beutel - Version 4.4.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.2.0)
- [BUGFIX] Fixed a bug: Logoff in 4.3.x did not work since directory name was wrong

2009-03-24 Andreas Beutel - Version 4.3.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2009-3) <http://www.phpmyadmin.net/home_page/security/PMASA-2009-3).php>`_: Insufficient output sanitizing when generating configuration file.
- [FEATURE] Updated pMA to the latest stable release (3.1.3.1)

2008-12-14 Andreas Beutel - Version 4.2.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2008-10) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-10).php>`_: SQL injection through XSRF on several pages
- [FEATURE] Updated pMA to the latest stable release (3.1.1)
- [CHANGE] Changed extension config: Set 'clearcacheonload' to 0
- [CHANGE] Renamed ChangeLog to ChangeLog.txt

2008-11-01 Andreas Beutel - Version 4.1.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2008-9) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-9).php>`_: XSS in a Designer component
- [FEATURE] Updated pMA to the latest stable release (3.0.1.1)
- [FEATURE] Configuration: Restored the default behavior of the left navigation frame. Set link to sql.php - Thanks to Julian Hofman for pointing me to this option.

2008-10-25 Andreas Beutel - Version 4.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Updated pMA to the latest stable release (3.0.1)
- [BUGFIX] Fixed bug #6934: Setting the path variables in SESSION to avoid file includes
- [FEATURE] Changed extension to use typo3/mod.php. See also http://bugs.typo3.org/view.php?id=5278

2008-10-02 Andreas Beutel - Version 4.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [BUGFIX] Trying to fix the redirect bug by a forcing the cookie according to issue #8884 http://bugs.typo3.org/view.php?id=8884#c23323 suggested by Rene Nitzsche

2008-09-28 Andreas Beutel - Version 4.0.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [FEATURE] Updated pMA to the latest stable release (3.0.0)
- [CHANGE] Branching the pMA extension into two branches: The 3.x series with PHP4 support and the 4.x series with a minimum requirement of MySQL 5, PHP5 (5.2 and above)
- [CHANGE] Old (3.x) versions may be obtained at https://www.mehrwert.de/content-management/typo3-extensions/

2008-09-22 Andreas Beutel - Version 3.4.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [SECURITY] Security fix (`PMASA-2008-8) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-8).php>`_: XSS in MSIE using NUL byte
- [FEATURE] Updated pMA to the latest stable release (2.11.9.2)

2008-09-15 Andreas Beutel - Version 3.3.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Skipping 3.2.0 see below
- [SECURITY] Security fix (`PMASA-2008-7) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-7).php>`_: Code execution vulnerability
- [FEATURE] Updated pMA to the latest stable release (2.11.9.1)

2008-06-25 Andreas Beutel - Version 3.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- was release as 3.2.0 by the TYPO3 Security Team by accident
- [SECURITY] Security fix (`PMASA-2008-4) <http://www.phpmyadmin.net/home_page/security/PMASA-2008-4).php>`_: XSS on plausible insecure PHP installation
- [CHANGE] Updated pMA to the latest stable release (2.11.7)
- [CHANGE] Changed handling of required/included files
- [CHANGE] Removed XCLASS call in modsub/index.php

2008-05-01 Andreas Beutel - Version 3.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Fixed a bug related to required files (only occurred if pMA is installed globally). Thanks to Laurent for pointing me to this issue

2008-04-30 Andreas Beutel - Version 3.0.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Updated pMA to the latest stable release (2.11.6)
- [CHANGE] Changed the authentication concept for pMA
- [CHANGE] Using signon auth (see http://wiki.cihar.com/pma/auth\_types#signon) now (Thanks to Marc Bastian Heinrichs for pointing me to this method)
- [CHANGE] Added a call to the TYPO3 BE logoff hook to delete the pMA session on logout
- [CHANGE] Updated the version number

2007-07-16 Andreas Beutel - Version 0.2.2
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- Security fix (mehrwert-Issue #4110): Provides exactly the same functionality as the previous version but contains an important bug fix.

2007-02-10 Andreas Beutel - Version 0.2.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Merged changes from latest release of the global extension (from T3 3.8.1)
- [CHANGE] Updated phpMyAdmin to 2.6.4pl3 for security reasons
- [CHANGE] Extension is no longer a shy extension
- [CHANGE] Removed lock type GLOBAL, extension can be installed locally
- [CHANGE] Merged new translations

2006-09-10 Andreas Beutel - Version 0.1.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Pre-release of 2.6.4pl3

2006-08-16 Andreas Beutel - Version 0.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] Updated the phpMyAdmin version to 2.6.0pl3 and fixed the stylesheet bug
- [CHANGE] Merged translations

2005-11-09 Michael Stucki
^^^^^^^^^^^^^^^^^^^^^^^^^
- [CHANGE] New upstream release
- [CHANGE] Check server environment settings using isset() - caused phpMyAdmin module to stop loading otherwise