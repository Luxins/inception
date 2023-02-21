#!/bin/bash

# Backup the database in the mariadb container
docker exec mariadb mysqldump --all-databases -uroot -pwordpress > srcs/services/mariadb/conf/State.sql

# <Wordpress state>
rm -rf srcs/services/wordpress/conf/all_php_stuff/*
cp -r srcs/wp_volume/* srcs/services/wordpress/conf/all_php_stuff/
# </Wordpress state>
