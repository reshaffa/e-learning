<?php
	/*
		OPERATOR ARITMATIKA
		(+ - * / % **)
	*/
	// deklarasi variabel
		$nilai1 = 90;
		$nilai2 = 75;
	
	// operator penambahan :
		$hasil_tambah = $nilai1 + $nilai2; // hasilnya 165
	// operator pengurangan :
		$hasil_kurang = $nilai1 - $nilai2; // hasilnya 15
	// operator pembagian :
		$bagi_dua = $nilai1 / 2; // hasilnya 45
		$bagi_tiga = $nilai2 / 3; // hasilnya 25
	// operator perkalian :
		$kali_dua = $nilai1 * 2; // hasilnya 180
	// operator modulus :
		$modulus = $nilai1 % $nilai2; // hasilnya 15 (karna 90/75 sisanya 15)
	// operator pangkat :
		$pangkat = $nilai1 ** 2; // 8100
	
	// Bagian output :
	echo "Hasil Tambah : ".$hasil_tambah."</br>";
	echo "Hasil Kurang : ".$hasil_kurang."</br>";
	echo "Hasil perkalian : ".$kali_dua."</br>";
	echo "Hasil bagi dua : ".$bagi_dua."</br>";
	echo "Hasil bagi tiga : ".$bagi_tiga."</br>";
	echo "Hasil modulus : ".$modulus."</br>";
	echo "Hasil pangkat dua : ".$pangkat."</br>";
	
	// Perhitungan luas persegi panjang :
	$panjang = 10;
	$lebar  = 17.5;
	$luas = $panjang * $lebar;
	echo "Luas persegi panjang dengan panjang ".$panjang." & lebar ".$lebar." adalah ".$luas;
	
?>