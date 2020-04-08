<?php // tag pembuka php
	/*
		strlen : hitung karakter (termasuk spasi)
		strrev : membalikkan kalimat
		str_word_count : jumlah kata
		strpos : kapan kata dimulai (pada karakter ke berapa dimulai)
		str_replace : mereplace kata/ mengganti kata tertentu
		strtolower : merubah ke huruf kecil
		strtoupper : merubah ke kapital
		ucfirst : merubah huruf pertama jadi kapital pada kalimat
		ucwords : merubah semua huruf pertama jadi besar dalam sebuah kalimat
	*/
	
	$kalimat = "Ini adalah sebuah contoh kalimat";
	echo $kalimat;
	echo "<br>";
	
	echo "Panjang kalimat : ".strlen($kalimat);
	echo "<br>";
	
	echo "Membalik kata : ".strrev($kalimat);
	echo "<br>";
	
	echo "Mencari awal kata dimulai : ".strpos($kalimat,"contoh");
	echo "<br>";
	
	echo "Replace kata : ".str_replace("contoh kalimat","paragraf replace",$kalimat);
	echo "<br>";
	
	echo "Ke kapital : ".strtoupper($kalimat);
	echo "<br>";
	
	echo "Ke huruf kecil : ".strtolower($kalimat);
	echo "<br>";
	
	echo "Ucfirst : ".ucfirst($kalimat);
	echo "<br>";
	
	echo "Ucwords : ".ucwords($kalimat);
?> 