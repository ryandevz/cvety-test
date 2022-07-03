# Test - cvety.kz

> English
## Requirements
- `Docker` equal or higher version 19.03.12, build 48a66213fe
- `Docker Compose` equal or higher version 1.26.2, build eefe0d31 

## Installation
Install dependency packages
```bash
cd cvety_test/source
docker-compose run --rm composer update
```

Run enviroment in docker
```bash
cd ..
docker-compose up -d --build
```
Open next browser address: http://localhost:8080/

## Used Packages
```bash
composer require symfony/routing
composer require symfony/validator
composer require nette/database
composer require doctrine/migrations
composer require vlucas/phpdotenv
```

## Authors
- [@ryandevz](https://github.com/ryandevz)