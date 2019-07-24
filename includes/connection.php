<?php

function db_connect() {

	$db_params = array(
		"host" 		=> "localhost",
		"database" 	=> "dojo_7comm",
		"user" 		=> "root",
		"password"	=> ""
	);

	$db_connection = mysqli_connect($db_params['host'], $db_params['user'], $db_params['password']);

	if(!$db_connection) {
		die("Não foi possível conectar-se ao banco de dados");
	}

	if(!mysqli_select_db($db_connection, $db_params['database'])) {
		die("Não foi possível selecionar o banco de dados");
	}

	return $db_connection;
}

function db_close($db_connection) {
	mysqli_close($db_connection);
}

