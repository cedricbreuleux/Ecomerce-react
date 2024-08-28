Pour tester le projet il faut que Mysql tourne.

Dans le dossier client "npm i"

Dans le dossier server:
    "composer update"
    "php artisan migrate"
    "php artisan serve"

Si la base de donnée est déja existante pour un reset:
    "php artisan migrate:reset"
    "php artisan migrate:fresh"

Par defaut un compte administrateur est créer:
    "admin@gmail.com"
    "admin"
