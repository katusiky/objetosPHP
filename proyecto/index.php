<?php 

	require_once "Config/Autoload.php";

	Config\Autoload::run();

	$st = new Models\Student();
	$st->set("id", 3);
	$data = $st->view();
	print $data['nombre'];
 ?>