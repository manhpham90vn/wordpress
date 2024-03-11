#!/bin/bash

docker exec -it wordpress_boilerplate_database mysqldump -u admin -padmin wordpress > ./database/backup.sql