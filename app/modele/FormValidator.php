<?php 
/**
* Vérifie si le formulaire remplit bien les besoins
* @todo Faire un form builder qui crée la liaison entre
*       les inputs et leur validation directement 
*/
class FormValidator
{
	public $success;

	protected $formData;

	public function __construct()
	{
		$this->success = array(
				'success' => true,
				'error'   => array()
			);
	}

	protected function getData($type)
	{

	}

	/**
	 * Gère la requête $_POST / $_GET
	 *
	 * @param  mixed $data $_REQUEST
	 * @return null
	 */
	public function load($request)
	{
		$this->formData = $request;
		return $this;
	}

	public function estVide($arrData)
	{
		foreach ($arrData as $data) {
			if($this->formData[$data] == "") {
				$this->success['success'] = false;
				$this->success['error'][] = array($data, 'Le champs est vide');
			}
		}
		
		return $this;
	}

	public function estSelectionne($arrData) 
	{
		foreach ($arrData as $data) {
			if($this->formData[$data] == '0') {
				$this->success['success'] = false;
				$this->success['error'][] = array($data, 'Le champs n\'est pas sélectionné');
			}
		}
		
		return $this;
	}

	public function ageValide($data, $min, $max) 
	{
		if($this->formData[$data] < $min || $this->formData[$data] > $max ) {
			$this->success['success'] = false;
			$this->success['error'][] = array($data, 'L\'âge est invalide');
		}

		return $this;
	}

	public function sansVirgule($arrData)
	{
		foreach ($arrData as $data) {
			if(strpos($this->formData[$data], ',') !== false) {
				$this->success['success'] = false;
				$this->success['error'][] = array($data, 'Il ne doit pas avoir de virgule');
			}
		}

		return $this;
	}

	public function close()
	{
		$success = $this->success;
		unset($this->load);
		$this->success = false;
		return $success;
	}
}
