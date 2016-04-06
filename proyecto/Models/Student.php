<?php namespace Models;

	class Student{

		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $image;
		private $id_section;
		private $fecha;
		private $con;

		public function __construct(){
			$this->con = new Connection();
		}

		public function set($attribute, $content){
			$this->$attribute = $content;
		}

		public function get($attribute){
			return $this->$attribute;
		}

		public function toList(){
			$sql = "SELECT t1.*, t2.nombre as name_section FROM students t1 INNER JOIN sections t2 ON t1.id_section = t2.id";
			$data = $this->con->returnConsult($sql);
			return $data;
		}

		public function add(){
			$sql = "INSERT INTO students(id, nombre, edad, promedio, image, id_section, fecha)
							VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->image},
							'{$this->id_section}, NOW())";
			$this->con->consult($sql);
		}

		public function delete(){
			$sql = "DELETE FROM students WHERE id = '{$this->id}'";
			$this->con->consult($sql);
		}

		public function edit(){
			$sql = "UPDATE FROM students SET nombre = '{$this->nombre}', edad = '{$this->edad}', 
																									promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}',
																									image = '{$this->image}' WHERE id = '{$this->id}'";
			$this->con->consult($sql);
		}

		public function view(){
			$sql = "SELECT t1.*, t2.nombre as name_section FROM students t1 INNER JOIN sections t2 ON t1.id_section = t2.id 
							WHERE t1.id = '{$this->id}'";
			$data = $this->con->returnConsult($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

		public function hola($me){
			echo "hola";
		}

	}

 ?>