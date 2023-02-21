FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server

# <mariadb config>
COPY conf/my.cnf /etc/mysql/my.cnf
# </mariadb config>

# <database config>
COPY conf/database.sql /etc/mysql/database.sql
# </database config>

# <Makeing sure all directories exist>
RUN mkdir -p /var/run/mysqld
RUN touch /var/run/mysqld/mysqld.sock
# RUN mkdir -p /var/log/mysql
# </Makeing sure all directories exist>

EXPOSE 3306

# COPY conf/put_state_and_launch.sh .
# RUN chmod +x ./put_state_and_launch.sh
# ENTRYPOINT ["./put_state_and_launch.sh"]

CMD ["/usr/sbin/mysqld", "--user=root", "--init-file=/etc/mysql/database.sql"]
# CMD ["bash", "-c", "while true; do sleep 1; done"]