#!/bin/bash

wp-cli --allow-root core config \
		--dbhost=${DB_HOST} \
		--dbname=${DB_NAME} \
		--dbuser=${DB_USER} \
		--dbpass=${DB_PASS} \
		--locale=en_US \
		--skip-check

wp-cli --allow-root core install \
		--url=${WEBSITE_URL_WITHOUT_HTTP} \
		--title=${WEBSITE_TITLE} \
		--admin_user=${ADMIN_USER} \
		--admin_password=${ADMIN_PASS} \
		--admin_email=${ADMIN_EMAIL}

wp-cli --allow-root option update siteurl ${WEBSITE_URL}
wp-cli --allow-root rewrite structure '/%year%/%monthnum%/%day%/%postname%/'
wp-cli --allow-root user create ${OTHER_USER} ${OTHER_USER_EMAIL} --role=contributor --user_pass=${OTHER_USER_PASS}

exec "$@" # Execute next command given as argument to the script