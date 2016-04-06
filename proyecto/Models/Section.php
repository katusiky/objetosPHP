<?php namespace Models;

	class Section{

		private $id;
		private $nombre;
		private $con;

		public function __construct(){
			$this->con = new Conection();
		}

		public function set($attribute, $content){
			$this->$attribute = $content;
		}

		public function get($attribute){
			return $this->$attribute;
		}

		public function toList(){
			$sql = "SELECT * FROM sections";
			$data = $this->con->returnConsult($sql);
			return $data;
		}


		public function add(){
			$sql = "INSERT INTO sections(id, nombre) VALUES (null, '{$this->nombre}')";
			$this->con->consult($sql);
		}

		public function delete(){
			$sql = "DELETE FROM sections WHERE id = '{$this->id}'";
			$this->con->consult($sql);
		}

		public function edit(){
			$sql = "UPDATE FROM sections SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consult($sql);
		}

		public function view(){
			$sql = "SELECT * FROM sections WHERE id = '{$this->id}'";
			$data = $this->con->returnConsult($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

	}

 ?>