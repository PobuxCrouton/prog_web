<?php

/**
* Page générale qui affiche tout type de page
* à caractère "contenu"
* @todo Une page fait pas grand chose sauf afficher
* 		du statique en ce moment
* @todo ajouter une méthode qui appelle une BD ou un .txt
*/
class Page extends Controleur
{
	protected $_code;

	public function __construct()
	{
		$this->_code = __FILE__;
	}
}