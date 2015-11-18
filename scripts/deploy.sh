#!/bin/bash

./migrateandseed.sh

cd .. 


sudo composer dump-autoload

php composer dumpautoload -o

php artisan config:cache

php artisan route:cache

php artisan optimize