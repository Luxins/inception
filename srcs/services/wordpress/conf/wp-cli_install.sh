#!/bin/bash

wp-cli --allow-root core config \
		--dbhost=mariadb \
		--dbname=wordpress_db \
		--dbuser=ljahn \
		--dbpass=${DB_PASS} \
		--locale=en_US \
		--skip-check

wp-cli --allow-root core install \
		--url=${URL} \
		--title=${TITLE} \
		--admin_user=${ADMIN} \
		--admin_password=${ADMIN_PASS} \
		--admin_email=${ADMIN_EMAIL}

wp-cli --allow-root user create ${USER} ${USER_EMAIL} --role=contributor --user_pass=${USER_PASS}

exec "$@"