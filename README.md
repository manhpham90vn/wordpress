# Wordpress 

## Start development
```shell
docker-compose up -d --build
```

## Post install 
```shell
./development/scripts/docker_post_install.sh
```

## Restore database
```shell
./development/scripts/docker_restore_database.sh
```

## Backup database
```shell
./development/scripts/docker_backup_database.sh
```

## Build docker for production
```shell
docker build ./src -f Dockerfile
```