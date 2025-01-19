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
- La gestion de base de données est optimisée avec **Doctrine**, qui offres des solutions robustes pour interagir avec les données.

Un autre avantage majeur de Symfony est sa **grande communauté modiale de développeurs**. Cette communauté contribut activement à maintenir et à enrichir le framework, le rendant extêmement stable. C'est une plateforme fiable et adaptée au développement rapide de projet variés.

## Environnement de développement  

pour développer avec Symfony, j'utilise **XAMPP**, un outil gratuit et faciele à installer. Une fois installé il me fournit tout c'est donc j'ai besoin travailler.

- **Serveur Web Apache**
- **Base de données Mysql**
- **PHP** et **Perl**
- Un serveur **FTP**
- **phpMyAdmin** pour gérer mes bases de données de manière graphique

XAMPP est une solution complète qui simplifie la configuration de mon environnement de développement.

Concernant Symfony, je m'appuie sur sa documenttation officielle, notamment la section sur les **exigences techniques**. Pour utiliser Symfony 7, voici les prérequis principaux :

- **PHP 8.2** pour profiter des dernières fonctionnalités et des meilleures performances.
- **Composer**, un outil indispensable pour gérer et installer des packages PHP nécessaires au projet.

Grâce à ces outils et à la richesse de documentation de Symfony, je peux développer mon site efficacement en respectant les bonnes pratiques.

## Choix de l'éditeur de code

J'ai testé plusieurs éditeurs de codes gratuits, comme **Sublime TEXT**, **Notepad++**, ou encore **Brackets**. Bien qu'ils soient effices, je trouve que l'un des meilleurs est **Visual Studio Code**. C'est pourquoi j'ai choisi d'utiliser ce dernier.  
Visual Studio Code offre une interface moderne, une large bibliothèque d'extensions, et nombreuses fonctionnalités qui facilitent le développement, notamment :  

- La **complétion automatique du code** (IntelliSence)
- Un **terminal intégré**.
- La **gestion native de Git**
- Une exellente prise de charge des frameworks et langages, dont PHP pour Symfony.

Ces atouts font VS Code un outil incontournable pour mes projets de développement.

## Symfony et Visual Studio Code

Concernant Symfony, Visual Studio Code s'avère être exellent choix d'éditeur de code grâce à ses nombreuses fonctionnalités et extenxions adaptées. Pour travailler efficacement avec Symfony, j'utilise des extensions spécifiques qui optimise mon flux de de travail, telles que :  

- **PHP intelephense** : pour l'autocomplétion et analyse statique du code PHP.
- **Symfony support** : une extension dédiée qui aide gérer les commandes Symfony, les fichiers de configurations et les annotations.
- **PHP debug** : pour déboguer facilement mes applications Symfony avec Xdebug.
- **Composer Extension** : pour gérer directement les dépendances de Composer depuis l'éditeur.  

Grâce à ces outils, Visual Studio Code devient une plateforme puissance et personnalisée pour le développement avec Symfony. De plus, l'intégration avec Git et le terminal intégré facilite encore d'avantage la gestion de mon projet.  

En combinant Symfony et Visual Studio Code je peux développer de manière rapide, structurer et efficace.   

## Les options pour installer Symfony  

Pour ce faire, je me rends sur le site officiel de Symfony afin de consulter la documentation. Deux options sont proposées pour démarrer le projet Symfony :









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