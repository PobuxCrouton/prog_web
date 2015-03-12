<?php 

/**
* Permet de générer les vues
* @see Router.php
*/
class Vue
{
	public $header;
	
	public $footer;

	public $notice;

	public $errorList;

	function __construct($argument)
	{
		$this->setHeader('gabarit/header.php');
		$this->setFooter('gabarit/footer.php');
		$this->fichier = 'template/'.$argument.'.php';
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setHeader($header)
	{
		$this->header = $header;
		return $this;
	}

	public function getFooter()
	{
		return $this->footer;
	}

	public function setFooter($footer)
	{
		$this->footer = $footer;
		return $this;
	}

	public function setNotice($notice) 
	{
		$this->notice = $notice;
		return $this;
	}

	public function getNotice()
	{
		return $this->notice;
	}

	public function setErrorDetails($errorList)
	{
		$this->errorList = $errorList;
	}

	public function show()
	{
		$is404 = false;

		//head
		require($this->header);
		
		//content
		if(!file_exists(dirname(__FILE__).'/'.$this->fichier)) {
			include('gabarit/404.php');
		} else {
			include($this->fichier);
		}
		
		//footer
		require($this->footer);

		//error handling
		if($is404) {
			throw new Exception('Cette page n\'est pas disponible');
		}
	}

	static public function fetch($file)
	{
		include($file);
	}
}