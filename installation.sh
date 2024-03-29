#!/bin/bash

# Update Package Index
sudo apt update

# Install Apache2, MySQL, PHP
sudo apt install apache2 mysql-server php php-mysql libapache2-mod-php php-cli

# Allow to run Apache on boot up
sudo systemctl enable apache2

# Restart Apache Web Server
sudo systemctl start apache2

# Adjust Firewall
sudo ufw allow in "Apache Full"

# Allow Read/Write for Owner
sudo chmod -R 0755 /var/www/html/

# Create info.php for testing php processing
sudo echo "<?php phpinfo(); ?>" > /var/www/html/info.php

sudo tar xvf master.zip -C /var/www/html/

PASSWORD=qwerty

mysql -uroot <<MYSQL_SCRIPT

CREATE USER 'phpmyadmin'@'localhost' IDENTIFIED BY '$PASSWORD';
GRANT ALL PRIVILEGES ON * . * TO 'phpmyadmin'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

echo "MySQL user created."
echo "Username:   phpmyadmin"
echo "Password:   qwerty"

mysql -u user -p < create.sql
