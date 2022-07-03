# Test - cvety.kz

> English
## Requirements
```
- Docker
- Docker Compose
```

## Installation
```bash
cd cvety_test/source
docker-compose run --rm composer require symfony/routing
docker-compose run --rm composer update
cd ..
docker-compose up -d --build
```

## Used Packages
```bash
composer require symfony/routing
composer require symfony/validator
composer require nette/database
composer require doctrine/migrations
composer require vlucas/phpdotenv
```