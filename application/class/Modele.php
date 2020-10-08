<?php

namespace MVC\Classe;

class Modele{
	
	public $page;
	
	public function __construct($base_param){
		
		if(file_exists(MODELS_PATH.DIRECTORY_SEPARATOR.$base_param['name'].'.model')){
			//Chargement du fichier .model
			$fichier = file(MODELS_PATH.DIRECTORY_SEPARATOR.$base_param['name'].'.model');
			//lecture du fichier lignes a lignes et instanciation des variables
			foreach ($fichier as $ligne_num => $ligne) {
                if (preg_match("#[ ]*([a-zA-Z-_+]*)[ ]*[:][ ]*([a-zA-Z-_+ ']*[ ]*)#", $ligne, $matches)) {
                    $this->page[$matches[1]] = $matches[2];
                }
			}
			//Ajout des varaible provenant de la lecture de l'url
            $this->page['url_params'] = $base_param['params'];
		}else{
			//Chargement des variables de base 
			$this->page['name'] = $base_param['name'];
			$this->page['description'] = $base_param['description'];
			$this->page['url_params'] = $base_param['params'];
		}
	}
	
}
