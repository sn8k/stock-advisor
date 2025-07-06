# agents.md

**Projet : Virtual Portfolio Advisor & Alert System**  
**Version : 1.0.2**  
**Date : 2025-07-06**  
**Auteur : [Ton nom ou pseudo]**

---

## Table des matières

1. [Introduction](#introduction)
2. [Liste des agents](#liste-des-agents)
3. [Descriptions détaillées](#descriptions-détaillées)
4. [Roadmap agents](#roadmap-agents)
5. [Annexes](#annexes)

---

## Introduction

Ce document détaille les rôles et interactions des “agents” (modules/assistants/services) du projet **Virtual Portfolio Advisor & Alert System**.  
Le système est conçu pour suivre un portefeuille multi-actifs, générer des alertes d’achat/vente selon des critères paramétrables, et proposer des recommandations pour atteindre un objectif d’investissement (ex : 300 000 € à horizon donné).

---

## Liste des agents

| Agent                | Rôle principal                                      | Statut    |
|----------------------|-----------------------------------------------------|-----------|
| Portfolio Manager    | Gestion des positions et de l’historique            | [x] En cours |
| Market Data Fetcher  | Récupération temps réel des prix et historiques     | [ ] À faire |
| Alert Engine         | Génération d’alertes (selon règles customisées)     | [ ] À faire |
| Recommendation Core  | Conseils d’achats/ventes pour l’allocation cible    | [ ] À faire |
| Notification Agent   | Envoi de notifications (mail, browser, Telegram…)   | [ ] À faire |
| UI/Frontend Agent    | Dashboard interactif, configuration, graphiques     | [ ] À faire |
| Settings Manager     | Gestion des préférences utilisateurs & critères     | [ ] À faire |

---

## Descriptions détaillées

### Portfolio Manager
- **Fonction :** Stocke, édite et affiche le portefeuille de l’utilisateur (actifs, quantités, PRU, perf, historique des ordres)
- **Entrées :** UI utilisateur, fichiers d’import (CSV/XLS)
- **Sorties :** Données pour dashboard, Alert Engine

### Market Data Fetcher
- **Fonction :** Récupère les prix temps réel/historique via API externes (Yahoo, Twelve Data, CoinGecko…)
- **Entrées :** Liste des actifs à suivre
- **Sorties :** Prix, perfs, historiques pour Portfolio Manager, Alert Engine

### Alert Engine
- **Fonction :** Génère des alertes selon les critères définis par l’utilisateur (seuils, variations, ratios, etc.)
- **Entrées :** Données Market Data + Portfolio Manager + Settings
- **Sorties :** Notifications, logs, suggestions

### Recommendation Core
- **Fonction :** Analyse l’état du portefeuille, compare à l’allocation cible, propose des opérations à effectuer (achat/vente)
- **Entrées :** Données Portfolio Manager, Settings
- **Sorties :** Suggestions affichées sur le dashboard, logs

### Notification Agent
- **Fonction :** Transmet les alertes à l’utilisateur (mail, navigateur, push mobile, Telegram…)
- **Entrées :** Alertes, recommandations
- **Sorties :** Messages/notifications envoyés

### UI/Frontend Agent
- **Fonction :** Interface utilisateur, configuration, visualisation, interactions, gestion des alertes
- **Entrées :** Interactions utilisateur, recommandations, alertes
- **Sorties :** Affichage dynamique, dashboard, formulaires de config

### Settings Manager
- **Fonction :** Centralise les préférences utilisateur (allocations cibles, critères d’alertes, notifications…)
- **Entrées :** UI
- **Sorties :** Configs pour les autres agents

---

## Roadmap agents

| Agent                | Version 1.0 | Version 1.1 | Version 2.0 |
|----------------------|-------------|-------------|-------------|
| Portfolio Manager    | [x]         |             |             |
| Market Data Fetcher  | [x]         | [ ]         |             |
| Alert Engine         | [x]         | [ ]         |             |
| Recommendation Core  | [ ]         | [x]         | [ ]         |
| Notification Agent   | [ ]         | [x]         |             |
| UI/Frontend Agent    | [x]         | [x]         | [ ]         |
| Settings Manager     | [x]         | [x]         | [ ]         |

---

## Règles d'installation

- Toutes les dépendances nécessaires (PHP, MySQL, extensions...) doivent être déclarées dans `install.sh`.
- Le script d'installation doit se charger de leur installation avant la mise en place du projet.

---

## Annexes

- [API utilisées](#)
- [Diagramme de flux](#)
- [Changelog des agents](#)
- [TODO list détaillée](#)

---

*Document à compléter et maintenir à chaque évolution majeure du projet.*  
