#!/bin/bash

docker exec -i wordpress_boilerplate_database mysql -uadmin -padmin wordpress < ./database/backup.sql