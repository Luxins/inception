FROM debian:buster

RUN apt-get update && apt-get install -y php-fpm php-mysqli
#curl unzip


# # <wordpress directroy>
RUN mkdir -p /var/www/wordpress
COPY conf/wordpress/ /var/www/wordpress
# RUN curl -O https://wordpress.org/latest.zip
# RUN unzip latest.zip
# RUN rm -f latest.zip
RUN chown www-data:www-data -R /var/www
# </wordpress directroy>

COPY conf/wp-cli /usr/local/bin/wp-cli
COPY conf/wp-cli_install.sh /bin

COPY  /conf/php-fpm.conf  /etc/php/7.3/fpm/php-fpm.conf


EXPOSE 9000

# COPY /conf/wordpress_mariadb.pcap .
WORKDIR /var/www/wordpress
ENTRYPOINT [ "wp-cli_install.sh" ]

CMD ["php-fpm7.3"]
