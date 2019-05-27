<p align="center"><img src="https://zupimages.net/up/19/21/0ncm.gif"></p>

## Description
 

  **CasseOrdi** est un site _e-commerce_ de vente et d'achat d'ordinateur d'occasion et ces accessoires.


## Installation


1. Cloner le dépôt, puis entrer dans le dossier
1. Taper la commande `composer install`
1. Copier le ficier `.env.example` et le renommer en `.env`
1. Taper les commandes du tableau ci-dessous dans l'ordre
| Commandes | Actions |
|--|--|
| `php artisan key:generate` | Générer la clé secret de l'application|
|`php artisan mirate`|Créer les tables de la base de données|
| `php artisan make:auth`| Mettre en place le système d'authentification |
|`php artisan db:seed`|Précharger les données dans la base de données|
|`php artisan serve`|Lancer le serve de développement|
1. Les données de connexion 
    - **Email :** `casseordi@local.dev`
    - **Mot de passe :** `123456`
