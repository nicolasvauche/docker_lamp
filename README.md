# Docker & LAMP  
Installation d'un environnement NginX / MySQL / PHP8 / NodeJS / Yarn avec Docker.  
Services complémentaires : PHPMyAdmin    

---  

## Installation  
  1. Cloner le dépôt git :  
  `git clone https://github.com/nicolasvauche/docker_lamp.git`  

  2. Dupliquer le fichier .env-sample et le renommer en .env :  
  `cd docker_lamp`  
  `cp .env-sample .env`  
  Modifier ce fichier en renseignant vos informations  

  3. Monter les conteneurs Docker :  
  `docker-compose up -d --build`  

  4. Ouvrir un autre onglet de votre terminal, et accéder à la console de votre conteneur principal :  
  `docker-compose exec php /bin/bash`

---  

## Lignes de commandes :  
Toutes les commandes sont exécutées dans le terminal de votre conteneur principal :  
- `php bin/console […]`  
- `git […]`  
- `npm […]`  
- `yarn […]`  
