#!/bin/bash

cd .. && sudo composer dump-autoload && php artisan migrate:refresh && php artisan db:seed