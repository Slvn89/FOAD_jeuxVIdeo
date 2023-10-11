# Projet Jeux Vidéo

Ce projet est une application web Symfony pour gérer une collection de jeux vidéo, ainsi que les joueurs inscrits. Il permet d'ajouter, afficher et gérer des jeux vidéo factices et des joueurs inscrits.

## Table des matières

- [Installation](#installation)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Captures d'écran](#captures-décran)
- [Auteur](#auteur)
- [License](#license)

## Installation

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :

Accédez au répertoire du projet :

bash
Copy code
cd projet-jeux-video
Installez les dépendances à l'aide de Composer :

bash
Copy code
composer install
Configurez votre base de données dans le fichier .env :

env
Copy code
# .env
DATABASE_URL=mysql://user:password@127.0.0.1:3306/jeux_video
Créez la base de données et chargez les fixtures :

bash
Copy code
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
Démarrez le serveur de développement Symfony :

bash
Copy code
symfony server:start
Accédez à l'application dans votre navigateur à l'adresse suivante : http://localhost:8000

Utilisation
Gestion des Jeux Vidéo : Vous pouvez ajouter de nouveaux jeux vidéo fictifs, afficher la liste des jeux vidéo disponibles, les trier et les filtrer par genre, etc.

Inscription/Connexion : Les joueurs peuvent s'inscrire avec leurs informations, y compris un avatar, et se connecter à leur compte.

Liste des Joueurs : Vous pouvez afficher la liste des joueurs inscrits.

Fonctionnalités
Ajout, modification, et suppression de jeux vidéo.
Inscription de joueurs avec informations personnelles et avatars.
Liste des joueurs inscrits.
Affichage des détails des jeux vidéo et des profils des joueurs.
Filtrage et triage des jeux vidéo.
Interface utilisateur conviviale.
Captures d'écran
Capture d'écran 1
Capture d'écran 2

Auteur
Votre nom
License
Ce projet est sous licence MIT - voir le fichier LICENSE pour plus de détails.
