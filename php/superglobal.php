<?php 
	//require_once('../config.php');
	include_once('../config.php');
	/*
		SUPERGLOBAL VARIABLES :
		- $_SERVER	: Menangkap informasi tentang server
		- $_GET		: Menerima parameter data yang dikirimkan oleh client
		- $_POST	: Menerima parameter data yang dikirimkan oleh client 
		- $_REQUEST	: Menerima data setelah submit dalam satu file
		- $_FILE	: Mengambil informasi tentang file yang dikirimkan oleh client
		- $_SESSION	: Membuat sessi / cache data
	*/
	
	// $_SERVER 
	echo "Informasi Hostname : ".$_SERVER['HTTP_HOST'];
	echo "<br>";
	echo "Server Name : ".$_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "User information : ".$_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo "Full script path : ".$_SERVER['SCRIPT_NAME'];
	echo "<br>";
	
	// example call base_url function
	echo $config['base_url']."/html/index.html";
	
?>