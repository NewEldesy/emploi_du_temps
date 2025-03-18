# Gestion d'Emploi du Temps

Ce projet est une application web de gestion d'emploi du temps pour une école. Il permet de créer, modifier et afficher des événements (cours, réunions, etc.) dans un calendrier interactif. Le projet utilise PHP, MySQL, jQuery (AJAX) et la bibliothèque FullCalendar.

## Fonctionnalités

- **Affichage du calendrier** : Visualisation des événements par jour, semaine ou mois.
- **Ajout d'événements** : Possibilité d'ajouter des événements en cliquant sur une plage horaire.
- **Modification d'événements** : Glisser-déposer pour modifier l'horaire des événements.
- **Sauvegarde en base de données** : Les événements sont stockés dans une base de données MySQL.
- **Interface intuitive** : Utilisation de FullCalendar pour une expérience utilisateur fluide.

## Technologies Utilisées

- **Frontend** : HTML, CSS, JavaScript (jQuery, FullCalendar)
- **Backend** : PHP
- **Base de données** : MySQL
- **Autres** : AJAX pour les requêtes asynchrones

## Installation

### Prérequis

1. **Serveur Web** : Apache, Nginx ou tout autre serveur web supportant PHP.
2. **PHP** : Version 7.x ou supérieure.
3. **MySQL** : Serveur de base de données MySQL.
4. **Composer** : (Optionnel) Pour gérer les dépendances PHP.

### Étapes d'Installation

1. **Cloner le dépôt** :

   ```bash
   git clone https://github.com/votre-utilisateur/emploi-du-temps.git
   cd emploi-du-temps ```

3. **Configurer la base de données** :

  - **Créez une base de données MySQL nommée emploi_du_temps.**
  - **Importez la structure de la table events.**

3. **Configurer les fichiers PHP** :

  - **Modifiez le fichier php/config.php pour y ajouter les informations de connexion à votre base de données**

4. **Installer les dépendances** :
  - **Téléchargez les bibliothèques jQuery et FullCalendar et placez-les dans les dossiers js/ et css/ respectivement.**

5. **Démarrer le serveur** :

  - **Placez le projet dans le répertoire de votre serveur web (par exemple, htdocs pour XAMPP).**
  - **Accédez à l'application via un navigateur web : http://localhost/emploi-du-temps.**

### Utilisation

1. **Ajouter un événement** :

  - **Cliquez sur une plage horaire dans le calendrier.**
  - **Saisissez le titre de l'événement et validez.**
  - **L'événement sera automatiquement sauvegardé dans la base de données.**

2. **Modifier un événement** :

  - **Glissez-déposez un événement pour modifier son horaire.**
  - **Les modifications sont automatiquement sauvegardées.**

3. **Supprimer un événement** :

  - **(À implémenter si nécessaire) Cliquez sur un événement pour afficher les options de suppression.**
