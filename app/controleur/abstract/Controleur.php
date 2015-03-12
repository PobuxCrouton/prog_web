<?php
/**
* Classe abstraite pour les contrôleurs
*/
abstract class Controleur
{
	
	/**
	 * Header message
	 * @var string
	 */
	static public $notice = "";

	/**
	 * List of errors
	 * @var array 
	 */
	static public $errorList = array();

	/**
	 * Objet vue
	 * @var Object
	 */
	public $vue;

	/**
	 * Par défaut accueil est initialisé
	 */
	
	public function render($template = 'accueil') 
	{
		$this->vue = new Vue($template);
		$this->vue->setNotice(self::$notice);
		$this->vue->setErrorDetails(self::$errorList);
		$this->vue->show();
	}
}