<?php
/**
* Permet de sauvegarder les commandes
*/
class Modele
{
	private $fileSrc;

	function __construct()
	{
		$this->fileSrc = dirname(__FILE__).'/../../data/commande.txt';
		if(file_exists($this->fileSrc)) {
			@chmod($this->fileSrc, 0777); //S'assure de l'écriture du fichier
		}
	}

	public function write($data)
	{
		try {
			$commande =  "";
			$commande .= "Parent:".$data['nom_parent'].", ";
			$commande .= "Enfant:".$data['nom_enfant'].", ";
			$commande .= "Age: ".$data['age'].", ";
			$commande .= "Ecole:".$data['ecole'].", ";
			$commande .= "Lundi:".$data['lundi'].", ";
			$commande .= "Mardi:".$data['mardi'].", ";
			$commande .= "Mercredi:".$data['mercredi'].", ";
			$commande .= "Jeudi:".$data['jeudi'].", ";
			$commande .= "Vendredi:".$data['vendredi'];
			$commande .= PHP_EOL;
			file_put_contents($this->fileSrc, $commande, FILE_APPEND);
		} catch(Exception $e) {
			echo 'Il est malheureusement impossible d\'enregistrer votre commande pour l\'instant';
		}
	}
}