<?php 

	function autoload($class){
		include "clases/".$class.".php";
	}
	spl_autoload_register("autoload");

	Persona::mostrar('Mierda');
	Auto::mostrar('Mierda');

 ?>