<?php
	define('db_server', 'localhost');
	define('db_username', 'test');
	define('db_password', '12345');
	define('db_name', 'oneforall');
	define('db_charset', 'utf8');
	
	$options = [
		PDO::ATTR_EMULATE_PREPARES=>false,
		PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
	];
	
	try {
		$db = new PDO("mysql:host=".db_server.";dbname=".db_name.";charset=".db_charset,db_username,db_password,$options);
	} catch (PDOException $e) {
		die("Connection failed: " . $e->getMessage());
	}
?>