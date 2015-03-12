<?php 
require_once(dirname(__FILE__).'/../modele/Modele.php');
require_once(dirname(__FILE__).'/../modele/FormValidator.php');
/**
* Spécifique au projet, gère les commandes
*/
class Commande extends Controleur
{
	public $commandeValide;

	public $success;

	public function checkRequest($request)
	{
		$this->valider($request);
		if($this->success['success'] == true) {
			$fileManager = new Modele();
			$fileManager->write($request); //Toujours une nouvelle ligne
		}
		return $this;
	}

	/**
	 * Valide les données reçu d'un formulaire
	 * @param $data mixed $_REQUEST
	 * @return $success bool
	 *
	 * @todo  les champs sont hardcodés, rendre les champs 
	 *        de n'importe quel formulaire disponible pour la validation
	 */

	public function valider($data)
	{
		$formValidator = new FormValidator();
		$formValidator->load($data)

					  ->estVide(array('nomParent', 'nomEnfant'))
					  ->sansVirgule(array('nomParent', 'nomEnfant'))
					  ->ageValide('age', 4, 12)
					  ->estSelectionne(
					  		array(
					  			'lundi',
					  			'mardi',
					  			'mercredi',
					  			'jeudi',
					  			'vendredi'
					  		)
					  	);

		$this->success = $formValidator->close();
		if($this->success['success'] == false) {
			$this->setErrorDetails();
		}
		return $this;
	}

	public function render($template = 'accueil')
	{
		$request = Router::request();
		if(isset($request['submit'])) {
			if($this->success['success'] == false){			
				self::$notice = 'error';
			} else {
				self::$notice = 'success';
			}	
		}

		parent::render('commande');
	}

	private function setErrorDetails()
	{
		foreach($this->success['error'] as $error) {
			self::$errorList[] = $error;	
		}
		
	}
}