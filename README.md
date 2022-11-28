To run this project, you will need installed: Composer, php, node, mysql

to launch this project:

1. Clone repository
2. Run composer install, npm install comands
3. Rename .env.example to .env
4. Run php artisan key:generate
5. Create database mysql
6. Enter user and password from database to .env fill\
6.1 DB_USERNAME="your username"\
6.2 DB_PASSWORD="your password"
7. Create new schema in database with naming you want
8. Write naming of schema to .env file \
8.1 DB_DATABASE= "Your name of schema"
9. run php artisan migrate:fresh --seed

Now everything is set up, and you can launch site. Run php artisan serve
http://127.0.0.1:8000 this is your URL to the site.
