<?php 

	spl_autoload_register(function($class){
		$ruta = str_replace("\\", "/", $class) . ".php";
		if (is_readable($ruta)) {
			require_once $ruta;
		}else{
			echo "el archivo no existe.";
		}
	});

	Models\Persona::Hola();
	echo "<br>";
	Controllers\PersonasControllers::Hola();

 ?>