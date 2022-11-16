#!/bin/bash

yes_im_sure="n"

while getopts ":f:" opt; do
    case $opt in
    f)
        yes_im_sure="$OPTARG"
        ;;
    \?)
        echo "Invalid option -$OPTARG" >&2
        ;;
    esac
done

if [ $yes_im_sure = "n" ]; then
    echo -n "This command will do a clean install and wipe the database, are you sure you want to continue?"
    read yes_im_sure
fi

if [[ "$yes_im_sure" == "y" ]] || [[ "$yes_im_sure" == "Y" ]]; then

    echo "Installing laravel dependencies"
    composer install

    echo "Installing Vue dependencies"
    yarn

    # Remove old logs
    echo "Removing old logs"
    rm storage\logs\*.log -f

    # Empty existing databases
    echo "Wiping databases"
    php artisan db:wipe -v
    #	php artisan db:wipe -v --env=testing

    # Add demo Database
    echo "Clearing storage"
    rm -rf storage/app/public
    cp -r demo/storage/public storage/app
    echo "Running migrations"
    php artisan migrate
    echo "Seeding database"
    php artisan db:seed

    # Run database migrations for local environment
    echo "Running migrations"
    php artisan migrate

else
    echo "Refresh aborted"
    php artisan migrate
#	php artisan migrate --env=testing
fi
