# Laravel YouCanPay boilerplate

To Start testing the [laravel-youncan-pay](https://github.com/devinweb/laravel-youcan-pay)

1- Update the `.env`

```shell
# Database env keys
DB_CONNECTION=
DB_HOST=127.0.0.1
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# YouCanPay env keys
SANDBOX_MODE=
PRIVATE_KEY=
PUBLIC_KEY=
CURRENCY=MAD
SUCCCESS_REDIRECT_URI=
FAIL_REDIRECT_URI=
```

2- Migrate the database.

-   [youcanpay-database-migration](https://github.com/devinweb/laravel-youcan-pay#Database-Migrations)

```shell
php artisan migrate
```

3- Create your first users.

```shell
User::factory()->count(10)->create();
```

4- You may need to configure the schulder if you need to clean the pending transactions automatically based on the tolerance defined in youcanpay config file.

```shell
User::factory()->count(10)->create();
```

5- Navigate to the route `/`.

> If you want testing the standalone integration you can navigate to the route `/standalone`
