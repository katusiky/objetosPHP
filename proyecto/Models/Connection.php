<?php namespace Models;

	class Connection{

		private $data = array(
			"host" => 'localhost',
			"user" => 'root',
			"pw" => '40072115',
			"db" => 'proyect'
			);

		private $con;

		public function __construct(){
			$this->con = new \mysqli($this->data['host'],
															$this->data['user'],
															$this->data['pw'],
															$this->data['db']);
		}

		public function consult($sql){
			$this->con->query($sql);
		}

		public function returnConsult($sql){
			print $con;
			$data = $this->con->query($sql);
			return $data;
		}
	}

	$c = new Connection();

 ?>