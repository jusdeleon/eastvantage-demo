## Prerequisites

This guide assumes that you have these software installed on your machine:

- [PHP 7+](http://php.net/downloads.php)
- [Composer](https://getcomposer.org/download)

## Installation

cd to the project root directory and run the command below:

- Install Composer dependencies by running `composer install`

After successfully running the command, create a database then populate these items in the `.env` file with the correct settings:

```
DB_HOST=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

After populating the settings, import `db.sql` in the database you created.

Run the script by typing `php index.php`.

## Bad practices

These are some of the bad practices I've noticed in the old codebase:

- Classes are not autoloaded. File/class requires are scattered all around the codebase
- Not using a well-maintained and well-tested DB manager component. A lot of time will be saved if a library was used.
- DB credentials are hardcoded(!). This poses a huge security risk.


