<?php 
require_once(BASE_DIR.'/app/modele/Modele.php');
require_once(BASE_DIR.'/app/modele/FormValidator.php');
/**
* Spécifique au projet, gère les commandes
*/
class Commande extends Controleur
{
	public $commandeValide;

	public $status;

	public function checkRequest($request)
	{
		$this->valider($request);
		if(count($this->status['error']) == 0) {
			$fileManager = new Modele();
			$fileManager->write($request); //Toujours une nouvelle ligne
		}
		return $this;
	}

	/**
	 * Valide les données reçus d'un formulaire
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

					  ->estVide(array('nom_parent', 'nom_enfant'))
					  ->sansVirgule(array('nom_parent', 'nom_enfant'))
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

		$this->status = $formValidator->close();
		if(count($this->status['error']) > 0) {
			$this->setErrorDetails();
		} else {
			$this->setSuccessDetails();
		}
		
		return $this;
	}

	public function render($template = 'accueil')
	{
		$request = Router::request();
		if(isset($request['submit'])) {
			if(count($this->status['error']) == 0){			
				self::$notice = 'success';
			} else {
				self::$notice = 'error';
			}	
		}

		parent::render('commande');
	}

	private function setErrorDetails()
	{
		foreach($this->status['error'] as $error) {
			self::$errorList[] = $error;	
		}
		
	}

	private function setSuccessDetails()
	{
		self::$successList = $this->status['success'];
	}
}