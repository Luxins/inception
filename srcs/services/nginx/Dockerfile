FROM debian:buster

RUN apt-get update && apt-get install -y nginx
RUN apt-get install -y vim

# <wordpress directory>
RUN mkdir -p /var/www
# </wordpress directory>

RUN mkdir -p /etc/ssl/certs/
COPY conf/certs/cert.pem /etc/ssl/certs/
COPY conf/certs/key.pem /etc/ssl/certs/

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
