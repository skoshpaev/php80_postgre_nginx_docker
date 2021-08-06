# Php 8.0 + Postgres + NGINX + symfony 5.3 + authentication

docker-compose up -d;
docker-compose exec template-fpm composer install;
docker-compose exec template-fpm bin/console d:m:m 
