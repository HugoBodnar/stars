# Prérequis
- PHP 8, Composer, Node.js 19, npm 9
- Une base de données MySQL 8

# Installation
```
cp .env.example .env
```
- Mettre à jour les infos de connexion à la base de données le fichier .env
- Installation php / Laravel :
```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed --class="StarSeeder"
```
- Installation javascript / Vue.js :
```
npm i
npm run build
```
- Tester l'application en local :
```
php artisan serve
```

Liens :
- "/" : page publique, affichage des stars
- "/stars" : backoffice, création/édition/suppression