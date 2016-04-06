<?php 

	class Vehiculo{
		//attributes
		public $motor = false;
		public $marca;
		public $color;

		//methods
		protected function estado(){
			if ($this->motor) {
				echo "encendido<br>";
			}else{
				echo "apagado<br>";
			}
		}

		public function encender(){
			if ($this->motor) {
				echo "el motor ya esta encendido<br>";
			}else{
				echo "...<br>";
				$this->motor = true;
			}
		}
	}

	class Moto extends Vehiculo{

		public function estadoMoto() {
			$this->estado();
		}

	}

	class CuatriMoto extends Moto{
	}
	
	$c = new CuatriMoto();
	$c->encender();
 ?>