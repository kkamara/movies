![php-react-boilerplate.png](https://github.com/kkamara/useful/blob/main/php-react-boilerplate.png?raw=true)

![lrb.png](https://github.com/kkamara/useful/raw/main/lrb.png)

# Movies [![API](https://github.com/kkamara/movies/actions/workflows/build.yml/badge.svg)](https://github.com/kkamara/movies/actions/workflows/build.yml)

(31-Jul-2023) With Laravel 10 we query the movies endpoint at www.rapidapi.com/rapidapi/api/movie-database-alternative/

* [Installation](#installation)

* [Usage](#usage)

* [Api Documentation](#api-documentation)

* [Unit Tests](#unit-tests)

* [Misc](#misc)

* [Contributing](#contributing)

* [License](#license)

## Installation

* [PhP and MySQL](https://www.apachefriends.org/download.html)
* [Yarn](https://yarnpkg.com/getting-started/install) (can be installed with `npm i -g yarn`)
* [https://laravel.com/docs/10.x/installation](https://laravel.com/docs/10.x/installation)
* [https://laravel.com/docs/10.x/mix#main-content](https://laravel.com/docs/10.x/mix#main-content)

Create our environment file.

```bash
cp .env.example .env
```

Install our app dependencies.

```bash
composer i
```

Generate app key.

```bash
# php artisan key:generate
composer run post-create-project-cmd
```

Run migrations with seeders.

```bash
php artisan migrate --seed
```

Install javascript required packages.

```bash
yarn && yarn dev
```

## Usage

* [https://github.com/kkamara/laravel-makefile](https://github.com/kkamara/laravel-makefile)
* [https://laravel.com/docs/10.x/sail#main-content](https://laravel.com/docs/10.x/sail#main-content)

```bash
# php artisan serve
php artisan serve --port 3000
```

## Api Documentation

```bash
php artisan route:list
# example output:
...
POST       api/user ............................ login › Api\UserController@login
GET|HEAD   api/user/authorize .................. Api\UserController@authorizeUser
POST       api/user/register ................... Api\UserController@register
...
```

## Unit Tests

```bash
# php artisan test --filter api
php artisan test
```

## Misc

[See food nutrition facts search web app.](food-nutrition-facts-search-web-app)

[See crm.](https://github.com/kkamara/crm)

[See birthday currency.](https://github.com/kkamara/birthday-currency)

[See php scraper.](https://github.com/kkamara/php-scraper)

[See amazon scraper.](https://github.com/kkamara/amazon-scraper)

[See python amazon scraper 2.](https://github.com/kkamara/selenium-py)

[See wordpress.](https://github.com/kkamara/wordpress)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)