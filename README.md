# Projet 5 - DA PHP SF

## Création d'un blog PHP - OpenclassRooms

-----------------

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f54c183bd3f7417eabf0a022943b0264)](https://www.codacy.com/manual/kindertheo/Projet-5-PHP-OpenClassrooms?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=kindertheo/Projet-5-PHP-OpenClassrooms&amp;utm_campaign=Badge_Grade)

[![Maintainability](https://api.codeclimate.com/v1/badges/e15855a809aa9305f539/maintainability)](https://codeclimate.com/github/kindertheo/Projet-5-PHP-OpenClassrooms/maintainability)

-----------------

### Installation 

*   Lancer la commande ` git https://github.com/kindertheo/Projet-5-PHP-OpenClassrooms.git`
*   Lancer la commande `cd Projet-5-PHP-OpenClassrooms`
*   Lancer dans le terminal `composer install`

### Remarques

*   Mettre à jour config/database.php

Pour que vous puissiez vous connecter à votre base de données, veuillez modifier le fichier avec vos identifiants, hôte et nom de base de données
Ces informations sont trouvables chez votre hébergeur.

    <?php
     
     define('DB_DSN', 'mysql:host=localhost;dbname=p5;charset=UTF8');
     
     define('DB_USER', '');
     
     define('DB_PASS', '');
     
     define('DB_OPTIONS', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 

*   Mettre à jour config/setupMail.php

Pour que vous puissiez pleinement profiter de l'envoi d'email, veuillez ajouter dans les '' vos identifiants, ports et protocole smtp
Ces informations sont trouvables chez votre hébergeur.

    <?php
    
    define('MAIL_SMTP', '');
    
    define('MAIL_PORT', '');
    
    define('MAIL_USERNAME', '');
    
    define('MAIL_PASSWORD', '');

*    Importer le fichier import.sql dans votre base de données

Pour que le site marche correctement il est important d'utilisé ce modèle de base de données
Il créera la base de données, les tables, les champs et inserera des données utiles au début du site (compte admin et utilisateur, premiers articles, commentaires...)

-----------------

Le site est consultable [ici](https://blog.kindertheo.net)

-----------------

Les identifiants par défaut sont :

Administrateur

>admin@admin.com
>password

Utilisateur

>user@user.com
>123

-----------------
### Contexte

Ça y est, vous avez sauté le pas ! Le monde du développement web avec PHP est à portée de main et vous avez besoin de visibilité pour pouvoir convaincre vos futurs employeurs/clients en un seul regard. Vous êtes développeur PHP, il est donc temps de montrer vos talents au travers d’un blog à vos couleurs.
Description du besoin

Le projet est donc de développer votre blog professionnel. Ce site web se décompose en deux grands groupes de pages :

*   les pages utiles à tous les visiteurs ;
*   les pages permettant d’administrer votre blog.

Voici la liste des pages qui devront être accessibles depuis votre site web :

*   la page d'accueil ;
*   la page listant l’ensemble des blog posts ;
*   la page affichant un blog post ;
*   la page permettant d’ajouter un blog post ;
*   la page permettant de modifier un blog post ;
*   les pages permettant de modifier/supprimer un blog post ;
*   les pages de connexion/enregistrement des utilisateurs.

Vous développerez une partie administration qui devra être accessible uniquement aux utilisateurs inscrits et validés.

Les pages d’administration seront donc accessibles sur conditions et vous veillerez à la sécurité de la partie administration.

Commençons par les pages utiles à tous les internautes.

Sur la page d’accueil, il faudra présenter les informations suivantes :

*   votre nom et votre prénom ;

*   une photo et/ou un logo ;

*   une phrase d’accroche qui vous ressemble (exemple : “Martin Durand, le développeur qu’il vous faut !”) ;

*   un menu permettant de naviguer parmi l’ensemble des pages de votre site web ;

*   un formulaire de contact (à la soumission de ce formulaire, un e-mail avec toutes ces informations vous sera envoyé) avec les champs suivants :
    
    *   nom/prénom,
    
    *   e-mail de contact,
    
    *   message,

*   un lien vers votre CV au format PDF ;

*   et l’ensemble des liens vers les réseaux sociaux où l’on peut vous suivre (GitHub, LinkedIn, Twitter…).

Sur la page listant tous les blogs posts (du plus récent au plus ancien), il faut afficher les informations suivantes pour chaque blog post :

*   le titre ;

*   la date de dernière modification ;

*   le châpo ;

*   et un lien vers le blog post.

Sur la page présentant le détail d’un blog post, il faut afficher les informations suivantes :

*   le titre ;

*   le chapô ;

*   le contenu ;

*   l’auteur ;

*   la date de dernière mise à jour ;

*   le formulaire permettant d’ajouter un commentaire (soumis pour validation) ;

*   les listes des commentaires validés et publiés.

Sur la page permettant de modifier un blog post, l’utilisateur a la possibilité de modifier les champs titre, chapô, auteur et contenu.

Dans le footer menu, il doit figurer un lien pour accéder à l’administration du blog.