# Smashlounge 2
All smashlounge development lives here. Smashlounge serves to deliver high-quality smash data and provide a rich API for modifying, flagging, moderating, and delivering quality smash knowledge.

##Installation
1. Run `composer install` to install php libraries. These external dependencies can be found in composer.json.

2. Update .env.example and fill in with local mysql credentials. Once this is done, save as .env.

3. Run `sudo npm install` to install node dependencies

4. Create database `smashlounge` or whatever you want to call it (just update .env)
5. Run `php artisan migrate` to create database migration 
6. Run `php artisan db:seed` to run seed with example data
7. Serve the database using mysql, and configure apache2 virtualhosts to point to where you want to store the application (with virtualbox this will be where you mount the shared folder).
8. Run `sudo service apache2 restart` to restart apache (on Ubuntu)

###Serve
The ideal setup for self-hosting a dev server is using Virtualbox Vagrant, and to run a *AMP server with a static IP to host. It is best to share a folder with the VM, and modify apache so that it serves from the shared file. That way, you can develop on the host OS and just use the VM for hosting a clean webserver. 

(**NOTE**)
NPM has a known lack of support for shared folders on VirtualBox. This is because the shared folder does not support symlinks, which causes issues for npm. Because of this, you may encounter issues with gulp, and other npm dependencies. However, there are workarounds for this.

###Gulp Tasks
All raw scripts are placed in `public/js/scripts`. Running `gulp scripts` will run a gulp
task which will compile scripts and place the minfied, combined file in `public/js/compiled/app.js`.
