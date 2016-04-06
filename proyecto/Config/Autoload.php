<?php namespace Config;

	class Autoload{

		public static function run(){
			spl_autoload_register(function($class){
				$rout = str_replace("\\", "/", $class). ".php";
					include_once $rout;
			});
		}

	}

 ?>