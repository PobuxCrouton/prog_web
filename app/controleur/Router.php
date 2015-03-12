<?php 
require_once('abstract/Controleur.php');
require_once('Page.php');
require_once('Commande.php');
require_once(BASE_DIR.'/app/modele/Modele.php');
require_once(BASE_DIR.'/app/modele/FormValidator.php');
require_once(BASE_DIR.'/app/vue/Vue.php');

/**
* Fait le routage en fonction de la requête
* @todo Sanitize get / post
* @todo utiliser un autoload
*/
class Router
{
	private $ctrlPage;
	private $ctrlCommande;
	public $request;

	function __construct()
	{
		if(isset($_REQUEST)) {
			$this->request = $_REQUEST;
		}
		//Initialisation contrôleur
		// var_dump($_REQUEST);
		$this->ctrlPage = new Page();
	}

	public function dispatch()
	{
		if(isset($_GET['action'])) {
			try {
				//Sûrement mieux à faire que ça..
				if($_GET['action'] == 'commande') {
					$this->ctrlCmd = new Commande();
					if(isset($this->request['submit'])) {
						$this->ctrlCmd->checkRequest($this->request);
					}
					$this->ctrlCmd->render($_GET['action']);
				} else {
					$this->ctrlPage->render(($_GET['action']));	
				}
			} catch(Exception $e) {
				$this->ctrlPage->render404($e);
			}
		} else {
			$this->ctrlPage->render();
		}
	}

	public static function request()
	{
		return $_REQUEST;
	}
}