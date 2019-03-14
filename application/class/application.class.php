<?php

require APPLICATION_PATH . DIRECTORY_SEPARATOR . "parameters.php";
define( "TRAITEMENT_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "traitements");
define( "CONTROLLER_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "controlleurs");

class Application
{
	public $url;
	
	public function __construct(){
		$this->url = new Url();
	}

	public function launch(){

		$controlleur = new Controlleur($this);
		if(!$this->url->page['control']) {
            print($controlleur->vue->ecran);
        }
	}
	
}
