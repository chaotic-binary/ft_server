FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y

WORKDIR /var/www/localhost

#nginx
RUN apt-get install nginx -y
RUN rm /etc/nginx/sites-enabled/default
COPY ./srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

#php
RUN apt install -y php7.3 php-cli php-fpm php-mbstring php-mysql php-curl

#mariadb
RUN apt-get install mariadb-server -y

#tools
RUN apt-get install wget curl -y

#SSL
RUN apt-get -y install openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/CN=ttamesha"

#wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xzf latest.tar.gz
RUN cp -a wordpress/. .
RUN rm -rf wordpress
RUN rm ./latest.tar.gz
COPY ./srcs/wp-config.php .

#phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar xzf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm ./phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages phpMyAdmin

COPY ./srcs/start.sh ./
COPY ./srcs/autoindex.sh ./

RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 777 /var/*

EXPOSE 80 443

CMD bash ./start.sh