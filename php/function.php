<?php
	// FUNCTION
	/*
		nama_function (){
			baris kode
		}
	*/
	
	// function non parameter
	function nama(){
		echo "Nama saya : Adelia";
	}
	
	nama();
	echo "<br>";
	
	// function dengan parameter
	function nama_lengkap($nm_awal = "Nama depan masih kosong", $nm_akhir = "Nama belakang masih kosong"){
		echo "Nama depan : ".$nm_awal;
		echo "<br>";
		echo "Nama akhir : ".$nm_akhir;
	}
	
	nama_lengkap("ardelia");
	
	// perhitungan luas & keliling persegi, persegi panjang , segitiga, lingkaran;
?>