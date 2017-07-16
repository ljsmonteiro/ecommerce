<?php 

require_once("vendor/autoload.php");
require_once("config.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	// echo "ok";
    
	//$sql = new Hcode\DB\Sql();
	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

$app->run();

 ?>