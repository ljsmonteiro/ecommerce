<?php 

	spl_autoload_register(function($class_name){

		$filename = "vendor".DIRECTORY_SEPARATOR."hcodebr".DIRECTORY_SEPARATOR."php-classes".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."DB".DIRECTORY_SEPARATOR.$class_name.".php";

		if (file_exists(($filename))) {
			require_once($filename);
		}

	});

 ?>