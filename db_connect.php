<?php 
	$user_name= "root";
	$server= "localhost";
	$password=null;
	$db_name = "streetfood";
	try 
	{
		$conn = new PDO("mysql:host=$server;dbname=$db_name",$user_name,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) 
	{
			echo "Connection_Failed...!".$e->getMessage();
			$conn = null;
	}
?>