#!/bin/bash

docker exec -it wordpress_boilerplate_php chown -R www-data:www-data /var/www/html
docker exec -it wordpress_boilerplate_php find /var/www/html -type d -exec chmod 755 {} \;
docker exec -it wordpress_boilerplate_php find /var/www/html -type f -exec chmod 644 {} \;