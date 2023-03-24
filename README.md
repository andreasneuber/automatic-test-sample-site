# automatic-test-sample-site
## Purpose
A site you can use to try out things with Automatic Test frameworks.

Of course, one can fire tests on production sites out there on the world wide web. But not good practice and very likely not much appreciated by site owners :-)

## Setup
After `git clone` run this...
```
cd automatic-test-sample-site
composer install
composer dump-autoload -o
```

## Run test site
```
cd automatic-test-sample-site
php -S localhost:8000
```
then open in browser: `http://localhost:8000`


## Add new controller and view - steps
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
