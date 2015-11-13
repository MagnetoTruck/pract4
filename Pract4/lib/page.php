<?php

/**
*
* 	Page : generates one web page
* 
* @package    lib
* @subpackage constructs
* @author     Guillem
* 
*/



	class Page
	{
		private $header;
		private $menu;
		private $contents;
		private $footer;

		public function __construct($logo,$title,$links,$body,$footer,$css)
		{
			$this -> header=new Header($title,$logo,$css);
			$this -> menu=new Menu($links);
			$this -> contents=new Contents($body);
			$this -> footer=new Footer($footer);
		}

		public function show()
		{
			$this ->header-> show();
			$this ->menu-> show();
			$this ->contents-> show();
			$this ->footer-> show();
		}//END FUNCTION SHOW


	}//END CLASS PAGE