<?php 

	trait Persona{
		public $name;

		public function mostrarNombre($na){
			echo $this->name = $na;
		}

		abstract function asignarNombre($name);
	}

	trait Trabajador{
		protected function mensaje(){
			echo "Mi nombre es: ";
		}
	}

	class Person{
		use Persona, Trabajador;

		public function asignarNombre($name){
			$this->name = $name . $this->mensaje();
		}
	}

	$persona = new Person();
	$persona->asignarNombre("Jose");
	echo $persona->name;

 ?>