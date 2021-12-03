# MVP - en Programmation Orienté Objet
---
Cette architecture MVP Objet est composée d'un layout Twig Standard

`Cette branche est la troisième branche qui as été créée à partir de la branche orignelle master en quelques jours à la suite du premier projet Symfony3.6 réalisé par le Rectorat de l'Académie de Besançon lors de la demande d'une application php nécessitant une version compatible php5.3.`

Les urls d'accès sont de type www.domain.tld/page/varname1/varvalue1/varname2/varvalue2/ ...

Afin de créer une nouvelle page vous devez instancier trois fichiers contenant diverses variables, dont voici les commandes:


"application > include > controlleurs > mapage.php" contenant:
> les commandes permettant de gérer un formulaire
> un ou plusieurs accès à la base de données
> les variables ainsi instanciées permettent l'affichage dans la vue
> la variable $twig_var permettant de communiquer avec le moteur de template

"application > include > modeles > mapage.model" contenant
>les variables spécifiques à la page de l'application exemple:
```
name : mapage
page_title : La description de la page affiché dans les navigateur sur l'onglet
description : ma description pour les moteur de recherche
params : tout paramètre supplémentaire(s) dont vous auriez besoin sur la page
```

"application > include > vues > mapage.html.twig" contenant
>les blocs html qui seront affichés lors de l'affichage

Ce modèle MVC utilise Composer ainsi que les autoload de composer, afin de pouvoir faire 
fonctionner l'application il faut lancer la commande avant tout affichage:
>composer update

pour le reste, c'est a vous de voir, mais c'est une architecture fonctionnelle à 2.5 vitesses
