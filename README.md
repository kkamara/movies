<img src="https://github.com/kkamara/useful/raw/main/MainClass.png" alt="MainClass.png" width=""/>

<img src="https://github.com/kkamara/useful/raw/main/movies.png" alt="movies.png" width=""/>

# Movies [![API](https://github.com/kkamara/movies/actions/workflows/build.yml/badge.svg)](https://github.com/kkamara/movies/actions/workflows/build.yml)

(Test Driven Development) (31-Jul-2023) With Laravel 10 we query the movies endpoint at www.rapidapi.com/rapidapi/api/movie-database-alternative/ I have been working with Laravel since Laravel 5.4 - www.endoflife.date/laravel

* [Tinker](#tinker)

* [Installation](#installation)

* [Usage](#usage)

* [Api Documentation](#api-documentation)

* [Unit Tests](#unit-tests)

* [Misc](#misc)

* [Contributing](#contributing)

* [License](#license)

## Tinker

```bash
php artisan tinker
> $m = new \App\Models\Movie;
= App\Models\Movie {#6216}
> $m->searchApi('Avengers')
= {#6230
    +"Search": [
      {#6227
        +"Title": "The Avengers",
        +"Year": "2012",
        +"imdbID": "tt0848228",
        +"Type": "movie",
        +"Poster": "https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg",
      },
      {#6235
        +"Title": "Avengers: Endgame",
        +"Year": "2019",
        +"imdbID": "tt4154796",
        +"Type": "movie",
        +"Poster": "https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg",
      },
      {#6240
        +"Title": "Avengers: Infinity War",
        +"Year": "2018",
        +"imdbID": "tt4154756",
        +"Type": "movie",
    ...
```

## Installation

* [PHP and MySQL](https://www.apachefriends.org/download.html)
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
yarn && yarn build
# Do `yarn dev` during development to see live changes
# of your blade and js and css/scss dependencies with vite.config.js
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

[See laravel makefile](https://github.com/kkamara/laravel-makefile)

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
