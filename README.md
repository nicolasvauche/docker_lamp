# Docker & LAMP  
Installation d'un environnement LAMP avec Docker.  

## Installation  

1. Cloner le dépôt Git :  
`$ git clone https://github.com/nicolasvauche/docker_lamp.git`  

2. Dupliquer le fichier `.env-sample` et le renommer en `.env` :  
`$ cd docker_lamp`  
`$ cp .env-sample .env`  

3. Modifier ce fichier en renseignant vos informations (ports et base de données)

4. Dupliquer le fichier `.bashrc-sample` et le renommer en `.bashrc` :  
`$ cp .bashrc-sample .bashrc`  

5. Monter les conteneurs Docker (MySQL, Adminer, MailDev, PHP 7.4-apache) :  
`$ docker compose up`  

## Accéder à la console dans le conteneur principal :  
1. Ouvrir un autre onglet de votre terminal, et accéder à la console de votre conteneur principal :  
`$ docker exec -it docker_lamp_www bash`  
`$ cd app`

## Utilisation  
Dans votre navigateur :  
- http://localhost:[HTTP_PORT] => Votre application  
- http://localhost:[ADMINER_PORT] => Adminer  
- http://localhost:[MAILDEV_PORT] => MailDev  
