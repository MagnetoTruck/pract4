<?php

	/**
	 * 	Footer : generates footer
	 * 
	 * @package lib
	 * @subpackage constructs
	 * @author Guillem
	 * 
	 *  */
	 

	 class Footer
	 {
	 	private $footer;

	 	public function __construct($footer)
	 	{
	 		$this -> footer = $footer;
	 	}

	 	public function show()
	 	{
	 		echo '<h5>'.$this->footer.'</h5>';
	 		echo '</footer>';
	 	}
	 }