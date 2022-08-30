# Fullstack-Angular-Laravel
basics angualr with laravel

Setup Angular Project: Clone this project

$ git clone https://github.com/ZebbaraAbdessamad/fullstack-laravel-angular.git

Setup Angular Project: Open a terminal or command prompt and go to Frontend

$ cd Frontend Install node dependencies

$ npm install Run the angular server (Optional: required during development only)

$ ng serve Do not close this terminal

See check to see if it works in the browser (Optional: It is required during front-end development only)

http://localhost:4200

Open a new terminal and build the project into the public directory of Backend. (Don't miss the final slash)

$ ng build --base-href http://localhost:8000/app/

Setup Laravel Project: Open a new Terminal and go to Backend

$ cd /Backend Install composer dependencies

$ composer install Create an .env file and copy the contents of .env.example into it

$ cp .env.example .env Change the database credentials of .env files

DB_DATABASE = your_database_name DB_USERNAME = your_database_username DB_PASSWORD = your_database_password Generate application keys

$ php artisan key:generate Run the database migration

$ php artisan migrate Run the angular server

$ php artisan serve See check to see if it works in the browser

http://localhost:8000

Congratulations, you have successfully completed the project setup. The following command is the most important command that you might want to use over and over again after any modification in angular. So, make sure you copy this command in a safe place. During production, you will need to change the URL to whatever your URL is with a prefix /app/

$ ng build --base-href http://localhost:8000/app/

![My Image](Capture.jpg)
