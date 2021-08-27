<?php
session_start();


	$servername="localhost";
	$user="root";
	$pass="";

	try {
	$conn= new PDO ("mysql:host=$servername; dbname=form; charset=utf8mb4",$user,$pass );
	$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
		
	 catch (PDOException $e) {
		echo "connection failed". $e->getMessage();
	}
?>