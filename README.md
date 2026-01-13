# 🎓 Base de Code — Cours Laravel : Middleware, Autorisations, Gates, Policies & Rôles

Ce dépôt contient la base de code utilisée pour suivre le module sur la sécurisation d’une application Laravel :  
**Middleware → Gates → Policies → Rôles & Permissions (Spatie)**.

L’objectif est de fournir un environnement prêt à l’emploi afin que vous puissiez vous concentrer sur les notions du cours sans perdre de temps sur la mise en place technique.

---

## 🚀 Contenu du projet

Cette base inclut :

### ✔ Authentification Breeze  
- Login, inscription, mot de passe oublié, etc.  
- Layout responsive (`<x-app-layout>`)

### ✔ Modèle Product + CRUD complet  
- `Product` appartient à un `User`  
- Champs : `name`, `price`, `is_public`, `user_id`  
- Contrôleur `ProductController` avec CRUD  
- Vues au format Breeze (`products/index`, `create`, `edit`, `show`)

### ✔ Menu mis à jour  
Lien **Produits** accessible après connexion.

## 📦 Prérequis
Assurez-vous d’avoir installé :
- **PHP ≥ 8.1**
- **Composer**
- **Node.js & NPM**
- **MySQL / MariaDB / PostgreSQL** (ou un autre SGBD compatible)
- **Git** (optionnel mais recommandé)

## Installation
### Dépendances
```bash
composer install
```
```bash
npm install
```

### Configuration de l’environnement
```bash
cp .env.example .env
```
Penser à modifier les informations de la base de données si besoin

### Générer la clé de l'application
```bash
php artisan key:generate
```

### Lancer les migrations et seeders
```bash
php artisan migrate:fresh --seed
```

### Démarrer le serveur Laravel
```bash
composer run dev
```