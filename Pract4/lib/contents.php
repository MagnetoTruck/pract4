<?php

	/**
	 * 	Footer : generates content
	 * 
	 * @package lib
	 * @subpackage constructs
	 * @author Guillem
	 * 
	 *  */
	 

	 class Contents
	 {
	 	private $body;

	 	public function __construct($body)
	 	{
	 		$this -> body = $body;
	 	}

	 	public function show()
	 	{
	 		echo '<h3>'.$this->body.'</h3>';
	 		echo '</body>';
	 	}
	 }