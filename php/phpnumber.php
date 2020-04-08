<?php // ini tag pembuka php

	/* 
		# PHP NUMBER 
		is_int() / is_integer() / is_long() ->kapasitas berjuta-juta
		is_float() / is_double() -> tipe data desimal
		is_nan() -> is not number : true / false
		is_numeric() -> mengecek bilangan numeric
		Boolean : true (1) false (0/kosong)
	*/
	
	$int_var = 12345.06; // ini float
	$string = "12234489";
	
	echo "Apa ".$int_var." integer ? Jawaban : ".is_int($int_var); // 
	echo "</br>";
	echo "Apa ".$int_var." integer ? Jawaban : ".is_integer($int_var); // 32678
	echo "</br>";
	echo "Apa ".$int_var." integer ? Jawaban : ".is_long($int_var); // batasan sampai jutaan
	echo "</br>";
	
	echo "Apakah ".$int_var." adalah float ? Jawaban: ".is_float($int_var);
	echo "</br>";
	
	echo "Apakah ".$int_var." adalah double ? Jawaban: ".is_double($int_var);
	echo "</br>";
	
	echo "Apakah ".$int_var." adalah numeric ? Jawaban: ".is_numeric($int_var);
	echo "</br>";
	
	// cara convert dari float ke int dan dari string ke int
	$parse_int_from_float = (int) $int_var;
	$parse_int_from_string = (int) $string;

	
	echo "Parse from float to in : ".$parse_int_from_float;
	echo "<br>";
	echo "Parse from string to int : ".$parse_int_from_string;
?>