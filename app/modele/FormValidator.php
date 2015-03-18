<?php 
/**
* Vérifie si le formulaire remplit bien les besoins
* @todo Faire un form builder qui crée la liaison entre
*       les inputs et leur validation directement 
*/
class FormValidator
{
	public $status;

	static public $static_status;

	protected $formData;

	public function __construct()
	{
		$this->status = array(
				'success' => array(),
				'error'   => array()
			);
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

	/**
	 * @todo, conserver les données
	 */
	public function estVide($arrData)
	{
		foreach ($arrData as $data) {
			if($this->formData[$data] == "") {
				$this->status['error'][$data] = 'Le champs est vide';
			} else {
				//Keep data that are sucessful
				$this->status['success'][$data] = $this->formData[$data];
			}
		}
		
		return $this;
	}

	public function estSelectionne($arrData) 
	{
		foreach ($arrData as $data) {
			if($this->formData[$data] == '0') {
				$this->status['error'][$data] = 'Le choix du '.$data.' n\'est pas sélectionné';
			} else {
				//Keep data that are sucessful
				$this->status['success'][$data] = $this->formData[$data];
			}
		}
		
		return $this;
	}

	public function ageValide($data, $min, $max) 
	{
		if($this->formData[$data] < $min || $this->formData[$data] > $max ) {
			$this->status['error'][$data] = 'L\'âge est invalide';
		} else {
			$this->status['success'][$data] = $this->formData[$data];
		}

		return $this;
	}

	public function sansVirgule($arrData)
	{
		foreach ($arrData as $data) {
			if(strpos($this->formData[$data], ',') !== false) {
				$this->status['error'][$data] = 'Il ne doit pas avoir de virgule';
			} else {
				$this->status['success'][$data] = $this->formData[$data];
			}
		}

		return $this;
	}

	public function close()
	{
		// $status = $this->status;
		// unset($this->load);
		// $this->status = false;
		self::$static_status = $this->status;
		return $this->status;
	}

	static public function hasError($field, $render = false)
	{
		if($render) {
			if(isset(self::$static_status['error'][$field])) {
				$output = 'class="input-error"';
			} else {
				// var_dump(self::$static_status['success']);
				$output = 'value="'.self::$static_status['success'][$field].'"';
			}
			echo $output;
		} else {
			return self::$static_status['error'][$field] || 
			   	   self::$static_status['sucess'][$field] ;	
		}	
	}

	static public function isSelected($select, $option)
	{
		if(self::$static_status['success'][$select] == $option) {
			echo 'selected';
		}
	}
}