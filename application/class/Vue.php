<?php

namespace MVC\Classe;

define( "LAYOUT_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "layout");


class Vue{
	
	public $ecran;
	public $block_body;
	
	public function __construct($baseControlleur){
		
		extract( $baseControlleur->modele->page );

		ob_start();
        require CONTROLLER_PATH.DIRECTORY_SEPARATOR.$name.'.php';
        $loader = new \Twig\Loader\FilesystemLoader(VIEW_PATH);
        $twig = new \Twig\Environment($loader, array(
            'cache' => INCLUDE_PATH.DIRECTORY_SEPARATOR.'cache',
            'auto_reload' => true,
            'autoescape' => true
        ));
        $template = $twig->load("$name.html.twig");
        $twig_var['page_title'] = $page_title;
        $twig_var['description'] = $description;

        echo $template->render($twig_var);
		$this->ecran = ob_get_clean();

		/*ob_start();
		require LAYOUT_PATH.DIRECTORY_SEPARATOR."standard.phtml";
		$this->ecran = ob_get_clean();*/

	}
	
}
