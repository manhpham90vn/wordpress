#!/bin/bash

docker exec wordpress_boilerplate_database mysqldump -u admin --password=admin wordpress > ./database/backup.sql