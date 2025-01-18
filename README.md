# Projet E-commerce

## Présentation

Pour ce site e-commerce tout-en-un, je vais développer étape par étape. Cependant, il se peut que je ne puisse pas toujours entrer dans les détails, car cela risquerait d'alourdir le projet. Je vais donc essayer de rester le plus concis possible.

La première partie sera **front-end**, destiné aux clients. ils pouront consulter le site, interagir avec les produits, et passer des commandes.

La deuxième partie concernera le **back-end**, avec un back-office dédié aux administrateurs. Ce dernier permettra de gérer la plateforme dans sa globalité :

- **Produits** : création, gestion des descriptions, des images, des slugs d'URLs, des règles de TVA, des prix HT et TTC.
- **Commandes** : gestion des commandes, suivi des status et des adresses de livraison.
- **Transporteurs** : configuration des options de livraison.
- **Paiement** : intégration avec Stripe pour les transactions.

Avec ces fonctionnalités, l'objectif est de créer une solution complète pour gérer un site e-commerce efficacement.

## Framework Symfony

j'utilise le framework **Symfony** pour créer mon site, car il permet de gagner un temps précieux dans le développement. Grâce à la documentation très complète de Symfony, on peut rapidement mettre en place des fonctionnalités essentielles comme :

- La gestion de la **sécurité** : utilisateurs, authentification, autorisation, gestion des mots de passe, etc.
- Les composants modulaires : Symfony a conçu des solutions simples à intégrer, ce qui rend le développement fluide et efficace.

En explorant la section "**The Basics**", on trouve des chapitres détaillés sur le base de données, Doctrine et les formulaires. Symfony propose des outils et des raccourcis qui simplifient considérablements le code, permettant d'aller plus vite. Par exemple :

- La mise en place de **formulaires** devient beaucoup plus intuitive, quelle que soit leur utilisation.
- La gestion de base de données est optimisée avec **Doctrine**, qui 




```markdown
# E-commerce Project

## Description
Ce projet est une application de commerce électronique développée avec XAMPP. Il permet aux utilisateurs de parcourir les produits, de les ajouter au panier et de passer des commandes.

## Installation
1. Clonez le dépôt :
    ```bash
    git clone https://github.com/votre-utilisateur/ecommerceProjectFolder.git
    ```
2. Déplacez-vous dans le répertoire du projet :
    ```bash
    cd ecommerceProjectFolder
    ```
3. Démarrez XAMPP et assurez-vous que Apache et MySQL sont en cours d'exécution.
4. Importez la base de données :
    - Ouvrez phpMyAdmin.
    - Créez une nouvelle base de données nommée `ecommerce`.
    - Importez le fichier `ecommerce.sql` situé dans le dossier `database`.

## Utilisation
1. Ouvrez votre navigateur et accédez à `http://localhost/ecommerceProjectFolder`.
2. Inscrivez-vous ou connectez-vous pour commencer à utiliser l'application.

## Tests
Pour exécuter les tests, utilisez la commande suivante :
```bash
phpunit --configuration phpunit.xml
```

## Contribuer
Les contributions sont les bienvenues ! Veuillez soumettre une pull request pour toute amélioration ou correction de bug.

## Licence
Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
```