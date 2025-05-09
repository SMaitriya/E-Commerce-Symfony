# 🛍️ E-Boutique Laravel

Ce projet est une boutique en ligne développée avec Laravel. Il permet à un utilisateur de :

- Naviguer dans un catalogue de produits par catégories
- Ajouter des produits au panier et modifier la quantité
- Visualiser un récapitulatif de la commande avec frais de transport
- Commander uniquement après connexion
- Créer un compte avec nom, email, mot de passe et adresse de livraison
- Modifier son profil utilisateur
- Gérer les produits dans un back-office (admin)

---

## ✅ Fonctionnalités utilisateur

### 🧭 Navigation et panier
- Les produits sont affichés par **catégories**.
- L'utilisateur peut **ajouter un produit au panier** (stocké en session).
- L'utilisateur peut **modifier la quantité** de chaque produit dans le panier.
- Le **montant total** de la commande est affiché avec :
  - Le prix de chaque ligne (quantité × prix)
  - Le total général
  - Un **frais de transport fixe de 5 €**

### 🔐 Connexion et enregistrement
- L'utilisateur peut **s'enregistrer** avec :
  - Nom
  - Email
  - Mot de passe
  - Adresse de livraison
- L'utilisateur doit **être connecté pour passer une commande**.
- Lors de la connexion, ses données sont **enregistrées en session**.

### 👤 Mon compte
- L'utilisateur connecté peut **voir et modifier son profil**.

---

## 🛠️ Back-office (admin)

- L'administration du **catalogue produit** est accessible uniquement avec ce compte :

```
Email : toto@outlook.fr
Mot de passe : tata
```

- L'admin peut **créer, modifier, supprimer** des produits et des catégories.

---

 ⚙️ Technologies utilisées

- PHP 8.2+
- Symfony 7.2.5
- Blade
- Tailwind CSS (pour le design responsive)
- Session (gestion panier et utilisateur)

---

## (Optionnel) Charger les données de test (fixtures) :

```bash
php bin/console doctrine:fixtures:load
