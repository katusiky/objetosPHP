<?php 

	abstract class Molde{

		abstract public function ingresarNombre($na);
		abstract public function obtenerNombre();

		/*public static function mensaje($m) {
			print $m;
		}*/
	}

	//Molde::mensaje("hola");

	class Persona extends Molde{
		
		private $m = "Hola gente<br>";	
		private $n;

		public function ingresarNombre($na, $ap = "k<br>"){
			$this->n = $na. $ap;
		}

		public function obtenerNombre(){
			echo $this->n;
		}

		public function mostrar() {
			echo $this->m;
		}
	}

	$o = new Persona();
	$o->ingresarNombre("Jose");
	$o->obtenerNombre();
	$o->mostrar();

 ?>