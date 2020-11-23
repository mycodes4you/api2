<?php
	
	if (empty($connect)) {
    	require "connect.php";
	}

	$db = "admin_api2rest";

	if (!mysql_select_db($db)) {
	
	    echo("creating database 'admin_api2rest'!<br/>");
	    mysql_query('CREATE DATABASE '. $db);
	
	} else {
		echo("'admin_api2rest' database already exists!<br/>");
	}

	$selectingDatabase = true;
	$connect->selectDB();

?>