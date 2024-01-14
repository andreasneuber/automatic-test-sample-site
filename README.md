# Automatic Test Sample Site
## Purpose
A site you can use to try out things with Automatic Test frameworks.

Of course, one can fire tests on production sites out there on the world wide web. But not good practice and very likely not much appreciated by site owners :-)

## Setup & start test site - directly on your machine
After `git clone` run this...
```
cd automatic-test-sample-site
composer install
composer dump-autoload -o
```
Composer lock file is optimized for PHP 8.2

To start site...
```
cd automatic-test-sample-site
php -S localhost:8000
```
then open in browser: `http://localhost:8000`


## Setup & start test site - Docker
After `git clone` and navigating inside `automatic-test-sample-site` directory build the container...
```
docker build --no-cache -t sample-site .
```

To start container...
```
docker run -p 8000:8000 -it sample-site:latest php -S 0.0.0.0:8000
```
then open in browser: `http://localhost:8000`

## Development - Add new controller and view - steps
1. Make sure you are in the root dir of the framework
2. Then run these console commands

```
// Create a new controller
php bin/console create:controller <name>

// Create a new view
php bin/console create:view <name>
```
3. In new controller file adjust the name of template - in method `renderView`
4. The new page can now be called via `index.php?action=<name>` (name = basically controller class name without `Controller`)


## PHP version
Goal is to keep things compatible with the latest released stable major PHP version.

## API
Site has also an API (very simple one and works only without Docker). You can use:
- `http://localhost:8000/api/allusers`
- `http://localhost:8000/api/user/1` or `http://localhost:8000/api/user/2`

### Docu
- https://medium.com/@miladev95/how-to-make-crud-rest-api-in-php-with-mysql-5063ae4cc89
- https://www.a2hosting.com/kb/developer-corner/sqlite/connect-to-sqlite-using-php/
