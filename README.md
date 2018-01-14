# crypto_watcher
Tracker for cryptocurrency

Framework - **Laravel 5**

Laravel needs to be installed to run the application.

Database configuration can be updated in the .env file
These 3 parameters needs to be set as per your database environment.

**DB_DATABASE**<br>
**DB_USERNAME**<br>
**DB_PASSWORD**<br>

I've included the csv files for loading the tables.
Once the database is migrated, you can run<br><br>
<code>php artisan migrate:refresh --seed</code><br><br>
to refresh the database.

Once everything is setup, execute this command after navigating to the project directory.<br>

<code>php artisan serve</code><br>