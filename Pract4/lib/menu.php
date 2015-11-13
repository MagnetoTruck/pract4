<?php

	/**
	 * 	Menu : generates menu
	 * 
	 * @package lib
	 * @subpackage constructs
	 * @author Guillem
	 * 
	 *  */
	 

	 class Menu
	 {
	 	private $links;

	 	public function __construct($links)
	 	{
	 		$this -> menu = $links;
	 	}//end constructor

	 	public function show()
	 	{
	 		echo '<ul>';
	 			foreach ($this->menu as $key => $value) 
	 			{
	 				echo '<li><a href="'.$value.'">'.$key.'</a></li>';
	 			}
	 		echo '</ul>';
	 	}

	 }