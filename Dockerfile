FROM shivergard/docker-webserver
MAINTAINER Ronalds Sovas <sovas@greenbox.lv>

ADD Wordpress /var/www
ADD conf/nginx-site.conf /etc/nginx/sites-available/default.conf
ADD start.sh /start.sh

RUN chmod 755 /start.sh 