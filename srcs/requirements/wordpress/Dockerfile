FROM debian:buster

RUN apt-get update && apt-get install -y php-mysql php-fpm mariadb-client wget unzip curl sendmail

# <the fpm process has www-data user>
RUN mkdir -p /var/www/html
WORKDIR /var/www/
RUN chown -R www-data:www-data /var/www/
# <the fpm process has www-data user>

# <Getting the latest wordpress distributions>
RUN wget https://wordpress.org/latest.zip
RUN unzip /var/www/latest.zip
RUN rm -f /var/www/latest.zip
# </Getting the latest wordpress distributions>

# <Where wordpress stores its php-files>
RUN mkdir -p /run/php
RUN chown www-data:www-data /run/php
# </Where wordpress stores its php-files>

# <The wordpress command line interface>
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp-cli
# </The wordpress command line interface>

# <Running the script for the configuration and installation of a wordpress website>
COPY --chown=www-data:www-data conf/wordpress-entrypoint_backup.sh /var/www/wordpress/wordpress-entrypoint_backup.sh
RUN chmod +x /var/www/wordpress/wordpress-entrypoint_backup.sh
COPY --chown=www-data:www-data conf/www.conf /etc/php/7.3/fpm/pool.d
# </Running the script for the configuration and installation of a wordpress website>

EXPOSE 9000
WORKDIR /var/www/wordpress

# <On startup>
ENTRYPOINT ["/bin/bash", "/var/www/wordpress/wordpress-entrypoint_backup.sh"] 

CMD ["/usr/sbin/php-fpm7.3", "-F"]