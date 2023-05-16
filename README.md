# Requirements
Creating a CRUD Application for Accounting System

## LARAVEL Tasks:
- Database schema: Create a database schema with two tables - 'accounts' and 'transactions'. The 'accounts' table should have columns for 'id', 'name', and 'balance'. The 'transactions' table should have columns for 'id', 'account_id', 'amount', 'type', and 'date'. The 'account_id' column in the 'transactions' table should be a foreign key that references the 'id' column in the 'accounts' table.
- Migration: Create a migration to create the 'accounts' and 'transactions' tables in the database.
- Seeder: Create a seeder to populate the 'accounts' table with some sample data. The sample data should include at least 5 accounts with unique names and random balances.

- Route: Create a route to display a list of accounts with their balances. The route should display a table with columns for 'name' and 'balance', and each row should display the name and balance of one account.
- Add validation to the 'transactions' table to ensure that the 'amount' column is always positive.

- Add a form to the route to allow users to add new transactions to an account. The form should have fields for 'account', 'amount', 'type', and 'date'. When the form is submitted, a new transaction should be added to the 'transactions' table and the 'balance' column in the 'accounts' table should be updated accordingly.

## Additional Requirements
- You may use any external packages or libraries that you deem appropriate.
- Once you have completed the task, please send us a GitHub link to the repository containing your solution.

## I used the following
- Laravel 10.X (Framework)

# How to Setup
1. Pull the repository form
https://github.com/ahsan-ullah/dsl-test.git
- or Run the following command 
> git clone https://github.com/ahsan-ullah/dsl-test.git .

## Run the following (quote) commands
> cp .env.example .env
- Create a database by dsl
- Update .env file database name to dsl

> composer install

> php artisan key:generate

> php artisan migrate

> php artisan db:seed

> php artisan serve

## Dependencies
- PHP 8.1 or hire
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).