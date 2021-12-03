# Model-View-Controler(MVC) - en Programmation Orienté Objet
---
Cette architecture MVC Objet dépend d'un fichier Composer et permet de démarrer la programmation d'une application avec un layout HTML5 Standard

`Cette branche à été réalisé et donné au Rectorat de l'Académie de Besançon lors d'une recherche nécessitant une version compatible php5.3`

Les urls d'accès sont de type www.domain.tld/page/varname1/varvalue1/varname2/varvalue2/ ...

Afin de créer une nouvelle page vous devez instancier trois fichiers contenant diverses variables, dont voici les commandes:


"application > include > controlleurs > mapage.php" contenant:
> les commandes permettant de gérer un formulaire
> un ou plusieurs accès à la base de données
> les variables ainsi instanciées permettent l'affichage dans la vue

"application > include > modeles > mapage.model" contenant
>les variables spécifiques à la page de l'application exemple:
```
name : le nom de mapage
description : ma description pour les moteur de recherche
params : paramètre(s) supplémentaire(s)
```

"application > include > vues > mapage.phtml" contenant
>les blocs html qui seront affichés dans le layout standard

Le dossier "application > layout" vous permet de modifier les en-têtes html et les éléments fixes de l'application (menu, sous-menu, fil d'ariane, pied de page, etc).

pour le reste, c'est a vous de voir, mais c'est une architecture fonctionnelle à 2.5 vitesses
