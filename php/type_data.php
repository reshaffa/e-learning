<?php
	# menganal type data : 
	# string
	# Int (integer)
	# Float (desimal)
	# Boolean (true & false)
	# Array
	# Object
	# Null
	# Resource
	
	// String : data diapit tanda 'data' atau "data"
	$string = 'String';
	var_dump($string);
	echo "<br>";
	//echo "Type data :".$string;
	
	// Integer :
	$int = 12345;
	var_dump($int);
	echo "<br>";
	
	$float = 10.56;
	var_dump("Type data float : ".$float);
	echo "<br>";
	
	// Boolean (true = 1 & false =0)
	$status = true;
	$kebenaran = false;
	var_dump("Boolean status :".$status."<br>"."Boolean kebenaran : ".$kebenaran);
	
	#array : [index0, index1, index2]
	$data = array("Sidik","Nana","Dian");
	var_dump($data);
	echo "<br>";
	
	# null 
	$output = "Output";
	$output = null; // kosong
	echo $output;
	
?>