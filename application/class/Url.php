<?php

namespace MVC\Classe;

class Url
{
	public $page;
	
	public function __construct(){

	$page = array();
	$page['name'] = 'accueil';
	$page['description'] = "";
	$page['params'] = array();
	$page['control'] = false;

	//définition du layout html à charger
	$page['layout'] = 'standard';



	$url = parse_url($_SERVER['REQUEST_URI']);
	$urlTrim = trim( $url['path'] , '/' );
	$urlParts = explode('/' , $urlTrim );

    if(isset($urlParts[0])) {
        //Récupération du nom de la page
        ($urlParts[0] == 'index' || $urlParts[0] == '') ? $page['name'] = 'accueil' : $page['name'] = $urlParts[0];
        unset($urlParts[0]);
    }else{
        $page['name'] = 'accueil';
    }

	//vérification si c'est une page de traitement
	if($page['name'] == 'control'){
	    $page['control'] = true;
        ($urlParts[1] == 'index' || $urlParts[1] == '' ) ? $page['name']='accueil' : $page['name']=$urlParts[1];
        unset($urlParts[1]);

    }

	//vérification du nombre de parametres: s'il n'existe pas autant de clé que
	// de valeurs on sort de la fonction et on renvoie une page d'erreur.
	$numParts = count($urlParts);
	if ( $numParts%2 != 0 ) {
		$page['name'] = 'error';
		$page['params'] = array();
		return $page;
	}else if ( $numParts != 0 ){
		$values = array();
		$keys = array();
		foreach( $urlParts as $key => $value ){
			if($key%2 == 0) {
				$values[] = $value;
			} else {
				$keys[] = $value;
			}
		}
		if($page['control']){
            $page['params'] = array_combine($values, $keys);
        }else {
            $page['params'] = array_combine($keys, $values);
        }
	}
	
	//verification de l'existence de la page dans les controlleurs
    if($page['control']){
        $pageFile = TRAITEMENT_PATH . DIRECTORY_SEPARATOR . $page['name'] . '.php';
    }else {
        $pageFile = CONTROLLERS_PATH . DIRECTORY_SEPARATOR . $page['name'] . '.php';
	}
	
	if(!file_exists($pageFile)){
		$page['name'] = 'error';
	}

	$this->page = $page;

	return;
	}
}
