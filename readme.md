## Artbees Test

This is a test to show:

- Laravel 5.x
- Use of docker
- Create/Read User Model with CSV as persistence layer
- [StyleCi](https://styleci.io/)
- jQuery validation
- GitFlow


The goal is to realize a web application to insert **client** and list them
By specs there is no authentication or roles (admin/user) for use this app
The persistence layer is the (private) file "client.csv" inside the storage directory

The access is done by the Models\Client that extends Model also if this is not an eloquent model
This is justified by the fact that in the future this app could be scale until use a real DB.

To access the client.csv file we will use the league/csv package

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