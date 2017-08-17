MGDSoft personal page using symfony flex
---------------------------------------

Install dependencies

```
composer install
```

Configure ***.env*** file with your db credentials

Load db structure information

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

Insert fixtures

```
php bin/console doctrine:fixtures:load
```

run server

```
php bin/console server:run
```
