<?php

namespace MVC\Classe;

class Modele{
	
	public $page;
	
	public function __construct($base_param){
		
		if(file_exists(MODELS_PATH.DIRECTORY_SEPARATOR.$base_param['name'].'.model')){
			//Chargement du fichier .model
			$fichier = file(MODELS_PATH.DIRECTORY_SEPARATOR.$base_param['name'].'.model');
<<<<<<< HEAD:application/class/modele.class.php
			$params = array();
=======
			//lecture du fichier lignes a lignes et instanciation des variables
>>>>>>> nude-composer:application/class/Modele.php
			foreach ($fichier as $ligne_num => $ligne) {
			    //on recherche le pattern des parametres
                if (preg_match("#[ ]*([a-zA-Z_+]*)[ ]*[:][ ]*([a-zA-Z0-9-_+'\{\,\ \}]*[ ]*)#", $ligne, $matches)) {
                    //on recherche le pattern des tableau dans la valeur du paramètre
                    if(preg_match("#{.*}#", $matches[2])) {
                        if (preg_match_all("#(?<capture>[0-9a-zA-Z-_+]*)#", $matches[2], $arrayMatches)) {
                            $array = array();
                            foreach ($arrayMatches['capture'] as $val) {
                                if($val != ''){
                                $array[] = $val;
                                }
                            }
                            $params[$matches[1]] = $array;
                            continue;
                        }
                    }
                    $params[$matches[1]] = $matches[2];
                }
<<<<<<< HEAD:application/class/modele.class.php
            }
			//définitions des paramètres model obligatoires
            $this->page['name'] = $params['name'];
            $this->page['description'] = $params['description'];
            $this->page['page_title'] = $params['page_title'];
            //ajout des parametres inclues dans le fichier model
            $this->page['model_params'] = $params;
            //ajout des parametres inclues dans l'url
            $this->page['url_params'] = $base_param['params'];
		}else{
            //définitions des paramètres model obligatoires
			$this->page['name'] = $base_param['name'];
			$this->page['description'] = "";
            $this->page['page_title'] = "";
            //ajout des parametres inclues dans l'url
            $this->page['url_params'] = $base_param['params'];
=======
			}
			//Ajout des varaible provenant de la lecture de l'url
            $this->page['url_params'] = $base_param['params'];
		}else{
			//Chargement des variables de base 
			$this->page['name'] = $base_param['name'];
			$this->page['description'] = $base_param['description'];
			$this->page['url_params'] = $base_param['params'];
>>>>>>> nude-composer:application/class/Modele.php
		}
	}
	
}
