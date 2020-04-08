<?php // tag pembuka php 
	/* 
		Operator Penugasan 
		(= , += , -= , %=, /= ,*=)
	*/
	
	$angka = 20;
	$nominal = 5;
	
	echo "Angka awal : ".$angka."<br>";
	echo "Nominal : ".$nominal;
	echo "<br>";
	
	$angka = $nominal; // nilai anngka diisi dengan nilai variabel nominal
	
	echo "Set angka : ".$angka."<br>";  // set angka menjadi nilai nominal 5
	
	// += 
	$angka += $nominal;
	echo "Angka += : ".$angka."<br>"; // ini nilainya jadi 10
	
	// -= 
	$angka -= $nominal;
	echo "Angka -= : ".$angka."<br>"; // ini nilainya jadi 5
	
	// *=
	$angka *= $nominal;
	echo "Angka *= : ".$angka."<br>"; // ini nilainya jadi 25
	
	// /=
	$angka /= $nominal;
	echo "Angka /= : ".$angka."<br>"; // ini nilainya jadi 5
	
	// %=
	$angka %= $nominal;
	echo "Angka %= : ".$angka."<br>"; // ini nilainya jadi 0
?>