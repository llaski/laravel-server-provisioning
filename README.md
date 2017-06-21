# laravel-server-provisioning

## Specs

- Ubuntu 16.04

# Commands

Run Playbook
```
ansible-playbook -i hosts provision.yml
```

## Setup Instructions

- Setup encryption vault file
- Customize Variables
- Generate and configure ssh keys for repo

    ssh-keygen -t rsa -b 4096 -C "john@example.com"

- Encypt group vars and ssh keys

######

To Do

- get apt restart working
- deploy playbook

```
cd /var/www/example.com
git pull
composer install --no-interaction --prefer-dist --optimize-autoloader

npm install
npm run prod

php artisan dump-autoload
php artisan migrate --force
php artisan cache:clear

php reload

if [ -f artisan ]
then
    php artisan migrate --force
fi
```

-----

- opcache configuration
    - https://ma.ttias.be/a-better-way-to-run-php-fpm/
    - https://medium.com/appstract/make-your-laravel-app-fly-with-php-opcache-9948db2a5f93
