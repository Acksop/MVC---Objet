<?php

define( "MODELS_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "modeles");
define( "VIEW_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "vues");

class Controlleur{
	
	public $modele;
	public $vue;
	
	public function __construct($application){

	    if($application->url->page['control']){
            $url_params = $application->url->page['params'];
	        require TRAITEMENT_PATH . DIRECTORY_SEPARATOR . $application->url->page['name'] . '.php';
        } else {
            $this->modele = new Modele($application->url->page);
            $this->vue = new Vue($this);
        }
	}
	
}
