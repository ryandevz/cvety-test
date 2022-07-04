# Test - cvety.kz

> English
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

#### Get forms

```http
POST /api/form/get
```

#### Get IP location

```http
GET /api/location
```

## Used Packages
```bash
composer require symfony/routing
composer require vlucas/phpdotenv
```

## Authors
- [@ryandevz](https://github.com/ryandevz)