# 🏫 Système de Gestion Académique - PHP & MySQL

[![Tech - PHP](https://shields.io)]()
[![Tech - MySQL](https://shields.io)]()
[![Security - Sessions](https://shields.io)]()

Conception et développement d'une application web dynamique de **Gestion Académique** permettant l'administration des départements, des cours et des utilisateurs (enseignants/étudiants). Ce projet a été entièrement réalisé dans le cadre du cursus d'ingénierie à l'**EMSI**.

---

## 🏗️ Architecture des Données & Schéma SQL

Le projet repose sur une base de données relationnelle MySQL normalisée (respect des contraintes d'intégrité et clés étrangères) permettant de lier de manière robuste les cours aux départements académiques.

📂 **[Découvrir le script d'initialisation de la base de données (database.sql)](./database.sql)**

---

## 🚀 Fonctionnalités Clés Implémentées

* **🔐 Authentification Métier Sécurisée** : Mécanisme complet de vérification des droits d'accès via des formulaires sécurisés contre les injections SQL (requêtes préparées PDO) et gestion de l'état de l'utilisateur par des **sessions globales PHP**.
* **📂 Gestion Modulaire des Départements** : Architecture CRUD complète pour ajouter, lister, modifier et supprimer des départements, avec assignation dynamique des cours.
* **🛡️ Filtrage des Rôles** : Protection des vues d'administration selon le privilège de l'utilisateur connecté (`admin` ou `enseignant`).

## 📁 Organisation du Code Source

```text
├── config/
│   └── database.php      # Connexion sécurisée PDO à l'instance MySQL
├── auth/
│   ├── login.php         # Algorithme d'authentification et ouverture de session
│   └── logout.php        # Clôture sécurisée de la session utilisateur
├── database.sql          # Schéma de base de données relationnelle complet
└── README.md             # Guide et documentation technique du projet
```
