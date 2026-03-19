# Projet TodoList (A2 Lyon 2025)

Application PHP simple de gestion de listes de tâches (todo listes) avec un mini‑framework MVC.

## 🚀 Objectif

Permettre à un utilisateur de s'inscrire, se connecter, et créer/éditer/supprimer des todo listes et leurs tâches.

## ✔️ Prérequis

- PHP (>= 7.4)
- Composer

## 📁 Structure du projet

public/
index.php
style.css
src/
Controllers/
Models/
Views/
Router.php
composer.json

## 🔧 Installation

1. Cloner le projet
2. Installer l’autoload Composer :

```bash
composer install
php -S localhost:8000 -t public
```
## 🧭 Routes principales
/ ou /dashboard : affichage des todo listes et tâches
/login : connexion
/register : création de compte
/dashboard/task/nouveau : création d’une tâche
/dashboard/{todo}/task/{task} : affichage / édition d’une tâche
/dashboard/{todo}/task/{task}/delete : suppression d’une tâche
🧩 Fonctionnalités implémentées
Inscription / connexion (sessions PHP)
Création / édition / suppression de todo listes
Création / édition / suppression de tâches
Affichage des listes et tâches associées
Si besoin, adapte l’installation en fonction de ta base de données (SQLite / MySQL) ou du système de stockage utilisé dans src/Models/*.