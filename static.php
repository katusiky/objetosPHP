<?php 

	class Pagina{

		//attributes
		public $name = "jose";
		public static $url= "www.jose.com";

		//methods

		public function welcome(){
			echo "Bienvenidos a hablar con: ". "<b>" .$this->name. "</b> la pagina es: <b>". Pagina::$url. "</b>"; 
		}


		public static function welcome2($arg) {
			echo "Bienvenidos a: " . $arg;
		}

	}

	class Web extends Pagina{

	}

	Web::welcome2("cw.com");

 ?>