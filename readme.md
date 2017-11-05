## Artbees Test

This is a test to show:

- Laravel 5.x
- Use of docker
- Create/Read User Model with CSV as persistence layer
- [StyleCi](https://styleci.io/)
- jQuery validation
- GitFlow

## How to Start

### Requirements
- Git
- Composer
- Docker

### Steps
1. Clone the repo with:
git clone https://github.com/fcorbi/artbees-test && cd artbees-test

- Install Composer dependencies:
composer install

- Generate key:
cp .env.example .env && php artisan key:generate

- Run docker containers in background:
cd docker && docker-compose up -d

- Visit localhost:8080

## We would like...

We would like to have (supposed in order):

- Detail view page
- Pagination
- PHPUnit
- CI
- Cloud logging service
- Deploy to a free provider
- Code quality service
- A good Readme file (Hi! i am!)

## Contributing

Use GitFlow for contributing with new feature