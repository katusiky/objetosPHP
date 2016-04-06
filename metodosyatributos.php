<?php 

	class Person{
	
		//attributes
		public $name = array();
		public $last = array();

		//methods
		public function save($name, $last){
			$this->name[] = $name;
			$this->last[] = $last;
		}

		public function show(){
			for ($i=0; $i < count($this->name); $i++) { 
				Person::format($this->name[$i], $this->last[$i]);
			}
		}

		public function format($name, $last){
			echo "Nombre: ". $name." | Apellido: ". $last . "<br>";
		}
	};


	$person = new Person();
	$person->save("Jose", "De Leon");
	$person->save("Oscar", "Martinez");
	$person->save("Brian", "Del Alcazar");
	$person->show();

 ?>