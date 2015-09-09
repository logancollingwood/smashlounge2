### Smashlounge 2
This repository is the directory for all future development on SmashLounge. Signficant work will be put in building 
an external API as well as a more modular interface. 

##Installation
{( will be filled in )}
Run composer install

update environment
copy .env.example to .env and configure

run `sudo npm install` to install node dependencies
update database config

Run `php artisan migrate` to create database migration 
Run `php artisan db:seed` to run seed

###Serve
serve the application with `php artisan serve`
Might also need MAMP to run the mysql database backend

###Gulp Tasks
All raw scripts are placed in `public/js/scripts`. Running `gulp scripts` will run a gulp
task which will compile scripts and place the minfied, combined file in `public/js/compiled/app.js`.