<?php 
	class Facebook
	{
		
		// attributes
		public $name;
		public $edad;
		private $pass;

		// methods
		public function __construct($name, $edad, $pass){
			$this->name = $name;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verInfo() {
			echo $this->name."<br>";
			echo $this->edad."<br>";
			self::cambiarPass("123");
			echo $this->pass."<br>";
		}

		private function cambiarPass ($pass){
			$this->pass = $pass;
		}
	}

	$facebook = new Facebook("jose",18,"12345");
	$facebook->verInfo();

 ?>