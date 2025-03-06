# YouShope - Application E-commerce
## Contexte du projet


YouShope est une application e-commerce développée avec Laravel 9 et PHP 8. Ce projet vise à fournir une plateforme complète de gestion de produits, de paniers, de commandes et de paiements en ligne.

-  implémenter l’authentification avec Laravel  Breeze.
- Gérer les rôles et permissions pour restreindre l’accès aux fonctionnalités.
-  Développer un CRUD complet pour la gestion des produits et categorie avec Eloquent ORM.
-  Mettre en place un système de panier avec LocalStorage pour stocker les produits ajoutés.
- Intégrer le paiement en ligne avec Stripe.

## Structure du projet 

📂 Controllers
___\CategorieController.php
___\CommandeController.php
___\HomeController.php
___\ProduitController.php
___\ProduitDetailController.php
___\ShopController.php

📂 Models
___\Adresse.php
___\Categorie.php
___\Commande.php
___\Payment.php
___\Produit.php
___\ProduitCommande.php
___\Role.php
___\User.php







## Installation

Cloner le projet
```git clone 
https://github.com/zakaria-123kardache/YouShope.git
```

Accéder au dossier du projet ...

```
cd Youshope
```
Installer les dépendances  ...

```
composer install
npm install && npm run dev
```
Copier le fichier .env.example en .env et configurer la base de données  ...

```
cp .env.example .env
```
Modifier .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=youshope
DB_USERNAME=root
DB_PASSWORD=
```
Générer la clé d'application

```
php artisan key:generate
```
Démarrer le serveur

```
php artisan serve
```
##  Liens utiles


- [Jira](https://kardachezakaria.atlassian.net/jira/software/projects/SHP/boards/26?sprints=29&atlOrigin=eyJpIjoiMjgyMTgzZDJiYjM3NGEzMzhlNDE0MDVmMjZlMDZhOGQiLCJwIjoiaiJ9) -  Gestion du projet
- [Conception ](https://lucid.app/lucidchart/278a0396-86ef-456c-88b0-1cdb09e7d6a2/edit?viewport_loc=-2880%2C-762%2C3907%2C1747%2CHWEp-vi-RSFO&invitationId=inv_ea692ce1-6cfe-4081-a998-36933885102b) -  Class Diagram Und use case Diagram
- [Canva ](https://www.canva.com/design/DAGgAimLSB8/xr7Y4CYOBrxP56-yWwmdNw/edit?utm_content=DAGgAimLSB8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton) -  Présentation du projet




