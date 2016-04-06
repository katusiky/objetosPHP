<?php 

	class Person{
		public $nombre = "Jose";


		public function speak($message) {
			echo $this->nombre.': '.$message;
		}
	}

	$persona = new Person();

	$persona->speak("hola");
 ?>