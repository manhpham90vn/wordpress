# Wordpress 

## Start development
```shell
docker-compose up -d --build
```

## Post install 
```shell
./development/scripts/post-install.sh
```

## Restore database
```shell
./development/scripts/restore.sh
```

## Backup database
```shell
./development/scripts/backup.sh
```

## Build docker for production
```shell
docker build .
```