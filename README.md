Halo Battle - Symfony version
========================

Voici la version symfony de HB.
----------------------------------

## Installation

### Cloner le projet

    git clone **url**

### Télécharger Composer

http://getcomposer.org/

### Configurer le projet

    cp /app/config/parameters.yml.dist app/config/parameters.yml

Remplisez le fichier paremeters.yml avec vos données (Accés base de donnée, chemin vers nodejs, etc.)

### Configurer les droits acl

    sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs && sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

### Vérifier la configuration du serveur.

    php app/check.php

### Installer les assets

    rm -rf web/bundles/* && sf assets:install --symlink web

### Installer les dépendances

    php composer.phar install --dev

ou

    composer install --dev

Enjoy !