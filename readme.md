# Test - cvety.kz

## Requirements
- `Docker` equal or higher version 19.03.12, build 48a66213fe
- `Docker Compose` equal or higher version 1.26.2, build eefe0d31 

## Installation
Install dependency packages
```bash
cd cvety-test/source
docker-compose run --rm composer install
```

Run enviroment in docker
```bash
cd ..
docker-compose up -d --build
```
Open next browser address: http://localhost:8080/

Shutdown docker enviroment
```bash
docker-compose down
```
## API Reference

#### Store form

```http
POST /api/form/store
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`   | `string` | **Required**.                     |
| `phone`   | `string` | **Required**.                     |
| `message` | `string` | **Required**.                     |

Curl example
```bash
curl --location --request POST 'http://localhost:8080/api/form/store' \
--form 'email="4@4.com"' \
--form 'phone="77774444444"' \
--form 'message="Message 4"'
```

#### Get forms

```http
GET /
```

#### Get IP location by your ip

```http
GET /api/mylocation
```

#### Get IP location by input

```http
GET /api/getlocation
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `ip`      | `string` | **Required**.                     |

Curl example
```bash
curl --location --request POST 'http://localhost:8080/api/getlocation' \
--form 'ip="8.8.8.8"'
```

## Used Packages
```bash
composer require symfony/routing
composer require vlucas/phpdotenv
composer require guzzlehttp/guzzle
composer require nette/database
```

## Authors
- [@ryandevz](https://github.com/ryandevz)