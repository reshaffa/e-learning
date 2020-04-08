<?php 
	
	/* DO_WHILE 
	
		do {
			kode yang akan dieksekusi
		}while( kondisi benar);
	*/
	
	// deklarasi variabel
	$angka = 10;
	// infinite loop
	do{
		echo "Angkanya ".$angka."<br>";
		$angka-=1; // post decrement
	}while($angka >= 1);
	
?>