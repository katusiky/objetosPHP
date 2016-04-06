<?php 

	interface Auto{
		public function encender();
		public function apagar();
	}

	interface gasolina extends Auto{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}

	class Deportivo implements gasolina{

		private $estado = false;
		private $tanque = 0;


		public function estado() {
			if ($this->estado && $this->tanque >0) {
				echo "El auto esta encendido y tiene ". $this->tanque ." litros en el tanque."."<br>";
			}else{
				echo "El auto esta apagado<br>";
			}
		}
		public function encender() {
			if ($this->estado) {
				echo "no puedes encender el auto 2 veces <br>";
			}else {
				if ($this->tanque >0) {
					echo "...<br>";
					$this->estado = true;
				}else{
					echo "el tanque esta vacio";
				}
			}
		}
		public function apagar() {
			if ($this->estado) {
				echo "!!!<br>";
				$this->estado = false;
			}else {
				echo "El auto ya esta apagado <br>";
			}
		}
		public function vaciarTanque() {
			$this->tanque = 0;
		}
		public function llenarTanque($cant) {
			$this->tanque = $cant;
		}

		public function usar($km) {
			if ($this->estado) {
				$reducir = $km / 3;
				$this->tanque -= $reducir;
				if ($this->tanque <= 0) {
				 	$this->estado = false;
				 } 
			}else{
				echo "Debe encender el auto";
			}
		}
	}

	$o = new Deportivo();
	$o->llenarTanque(100);
	$o->encender();
	$o->usar(3000);
	$o->estado();

 ?>