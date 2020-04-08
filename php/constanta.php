<?php 
	/*
		KONSTANTA : 
		define('name','value',case_insensitive);
		case-insensitive : false
		name : status
		value: offline
		case-sensitive : harus sama persis
	*/
	
	define('status','offline',true); // case-insensitive
	echo Status;
	
	echo "</br>";
	define('phi',3.14,true); // konstanta
	$r = 10;
	$luas = phi * $r * $r; // ;bagian dari operator yaitu perkalian 
	
	echo "Luas Lingkaran dengan jari-jari ".$r." : ".$luas;
	
?>