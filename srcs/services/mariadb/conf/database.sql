use mysql;
CREATE DATABASE IF NOT EXISTS wordpress_db;
CREATE USER IF NOT EXISTS 'ljahn'@'%' IDENTIFIED BY 'ljahn';
GRANT ALL PRIVILEGES ON *.* TO 'ljahn'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'wordpress';

