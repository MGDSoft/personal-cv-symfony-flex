MGDSoft personal page using symfony flex
=======================================

Requirements
-------------

To use symfony flex php 7.1 is required

Installation
------------

Configure ***.env*** file with your db credentials

```
cp .env.dist .env
# Configure it
```

Install dependencies

```
composer install
```

Load db structure information

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

Insert fixtures

```
# Doesnt work with default path for this issue https://github.com/doctrine/DoctrineFixturesBundle/pull/192
php bin/console doctrine:fixtures:load --fixtures=src/DataFixtures/ORM
```

run server

```
php bin/console server:run
```

Now you can access to the following routes:

http://127.0.0.1:8000/

http://127.0.0.1:8000/admin/