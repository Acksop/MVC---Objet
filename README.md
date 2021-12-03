# MVC - en Programmation Orienté Objet
---
Cette architecture MVC Objet est composée d'un layout HTML5 Standard

`Cette branche est la branche master originelle qui as été créée à partir d'une recherche inaboutie lors d'une relecture, correction et aide d'un MVC d'un étudiant à l'AFPA. Elle fut réalisé en "midnight create". Une update personnelle et maison à été réalisé presque sans correction postérieurement à cela.`

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

Je ne peut que vous proposer de regarder dans le dossier layout afin de comprendre comment cela est affiché!


pour le reste, c'est a vous de voir, mais c'est une architecture fonctionnelle à 2.5 vitesses
