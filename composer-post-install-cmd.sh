#!/bin/bash

rm -rf phpmyadmin
composer create-project phpmyadmin/phpmyadmin
cp Resources/Private/Configuration/config.inc.php phpmyadmin
chmod 755 phpmyadmin/config.inc.php