<?php

	/**
	 * 	Header : generates header
	 * 
	 * @package lib
	 * @subpackage constructs
	 * @author Guillem
	 * 
	 *  */
	 

	 class Header
	 {
	 	private $logo;
	 	private $title;
	 	private $css;

	 	public function __construct($title,$logo,$css)
	 	{
	 		$this -> title = $title;
	 		$this -> logo = $logo;
	 		$this -> css = $css;
	 	}

	 	public function show()
	 	{
	 		$html = LAYOUT.$this->css.'</style></head><body>';
	 		echo $html;
	 		echo '<img height="200px" width="35%" src="'.$this->logo.'"/>';
	 		echo '<h1>'.$this-> title.'</h1>';
	 		echo '</head>';

	 	}
	 }//END CLASS HEADER
