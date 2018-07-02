My Rabbit V1.0
==============

Gestion d'élévages des lapins


How to install this project
===========================
    git clone https://github.com/mgaidiwahid/my-rabbit
    cd my-rabbit
    composer install
    Edit app/config/parameters.yml and configure credentials to acces a database for this demo.
    php bin/console doctrine:database:create
    php bin/console doctrine:schema:create
    php bin/console doctrine:fixtures:load --append
    php bin/console assets:install --symlink
    php bin/console server:run
    Browse http://localhost/my_rabbit/web/app_dev.php/easyadmin/
