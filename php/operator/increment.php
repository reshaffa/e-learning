<?php 
	/*
		Operator Increment / Decrement
		- Increment : ++$x (Pre-increment) dan $x++ (Post-increment)
		- Decrement : --$x (Pre-decrement) den $x-- (Post-decrement)
	*/
	
	// Deklarasi variabel
	$angka = 100;
	echo "Nilai Angka : ".$angka."<br>";
	// ++$x (Pre-increment) 1 + $x
	echo "Pre-increment : ".++$angka; // hasilnya 101
	echo "<br>";
	
	// $x++ (Post-increment) $x + 1
	echo "Post-increment : ".++$angka; // hasilnya 102
	
?>