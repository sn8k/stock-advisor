# Virtual Portfolio Advisor & Alert System

![Status](https://img.shields.io/badge/status-in%20development-orange)
![License](https://img.shields.io/github/license/votre-repo/portfolio-advisor)

## Vision

**Virtual Portfolio Advisor & Alert System** est un assistant d’investissement virtuel et open source, conçu pour :
- Suivre votre portefeuille boursier (actions, ETF, crypto…)
- Générer des alertes intelligentes sur seuils personnalisés
- Proposer des conseils d’achats/ventes pour atteindre vos objectifs financiers
- Offrir une interface claire, moderne, 100% privée (données locales par défaut)

---

## Fonctionnalités principales

- Suivi multi-portefeuilles (actions, ETF, crypto…)
- Ajout/édition/import/export d’actifs et opérations
- Cours en temps réel via API (Yahoo, TwelveData, CoinGecko…)
- Moteur d’alertes ultra-paramétrable (baisse, hausse, dérive allocation, etc.)
- Recommandations d’achats/ventes selon votre cible
- Notifications (browser, email, Telegram…)
- Dashboard graphique, responsive
- Mode “conseiller virtuel” sans aucun automatisme d’ordre (compatible eToro, DEGIRO, etc.)

---

## Stack technique

- **Frontend** : [React.js] (ou Vue.js, à préciser)
- **Backend (optionnel)** : Node.js (Express)
- **API données** : Yahoo Finance, Twelve Data, CoinGecko
- **Notification** : Web push, mail, Telegram Bot (selon config)
- **Stockage** : localStorage (par défaut), option backend ou cloud à venir
- **Tests** : Jest, React Testing Library
- **CI/CD** : (optionnel) GitHub Actions

---

## Installation

1. **Clone du repo**
  
   git clone https://github.com/votre-repo/portfolio-advisor.git
   cd portfolio-advisor

2. **Démarrage local**
   npm install
   npm start

3. **Configuration initiale**
   Ajoutez vos premiers actifs manuellement ou via import CSV
   Définissez vos alertes et préférences dans le menu “Paramètres”

**Roadmap prevue**
 V1.0 : Suivi manuel portefeuille, alertes personnalisées, dashboard, notifications browser
 V1.1 : Suggestions d’allocations, recommandations achat/vente
 V2.0 : Import/export multi-formats, notifications Telegram/email, stockage cloud (optionnel)
 V2.1 : Intelligence de conseil (machine learning, scoring)

**Contribuer**
- Forkez ce repo, proposez vos PR, ouvrez vos issues !
- Merci de suivre les conventions (voir CONTRIBUTING.md et agents.md)
- Toute contribution sérieuse (code, UI, doc) est la bienvenue


## Utilisation rapide

```bash
./install.sh
php src/portfolio_manager.php --version
./remove.sh
```

