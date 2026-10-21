# 🏫 Système de Gestion Académique - PHP & MySQL

Conception et développement d'une application web dynamique de **Gestion Académique** permettant l'administration des départements, des cours et des utilisateurs (enseignants/étudiants). Ce projet a été réalisé dans le cadre du cursus d'ingénierie à l'**EMSI**.

## 🚀 Fonctionnalités Clés

* **🔐 Authentification & Sécurité** : Formulaires de connexion (Login) et d'inscription (Register) sécurisés avec vérification des identifiants en base de données et gestion des sessions PHP pour restreindre l'accès aux pages d'administration.
* **📂 Gestion des Départements & Enseignants** : CRUD complet permettant d'ajouter, d'afficher, de modifier et de supprimer des départements académiques ainsi que d'y affecter des cours.
* **🗄️ Persistance des Données (SQL)** : Base de données relationnelle MySQL structurée pour lier logiquement les utilisateurs, les cours et leurs départements respectifs.
* **🎨 Interface Utilisateur Fluide** : Utilisation de formulaires HTML5 validés côté client et de tableaux dynamiques pour l'affichage des listes de données.

## 🛠️ Stack Technique

* **Langage Serveur :** PHP (Architecture procédurale / modulaire)
* **Base de Données :** MySQL / MariaDB
* **Serveur Web Local :** XAMPP / WampServer
* **Interface Front-End :** HTML5 / CSS3 / Bootstrap

## 📁 Structure Globale du Projet

```text
├── config/
│   └── database.php      # Fichier de connexion PDO / MySQLi à la BDD
├── auth/
│   ├── login.php         # Formulaire et traitement de la connexion
│   ├── register.php      # Formulaire et traitement de l'inscription
│   └── logout.php        # Destruction de la session et déconnexion
├── departements/
│   ├── index.php         # Affichage de la liste des départements
│   └── ajouter.php       # Formulaire d'ajout d'un département
├── cours/
│   └── index.php         # Gestion et affichage des cours académiques
├── index.php             # Page d'accueil principale de l'application
└── README.md             # Documentation du projet
```
