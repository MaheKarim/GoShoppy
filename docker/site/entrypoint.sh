#!/bin/sh
set -e
chown -R www-data storage
chown -R www-data vendor
php-fpm && supervisord
