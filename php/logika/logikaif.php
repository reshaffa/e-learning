<?php 
	/* 
		IF STATEMENT
	*/
	
	// If tunggal : if(condition){ statement }else{ statement }
	// deklarasi variabel :
	$angka = 100;
	$nilai = 100;
	
	# IF TUNGGAL
	if($angka > $nilai){
		// statement
		echo "Angka lebih dari Nilai";
	}else{
		echo "Angka kurang dari nilai.";
	}
	
	echo "<br><br>";
	# IF NESTED IF
	if($angka == $nilai){
		// statement jika angka sama dengan nilai
		echo "Angka sama dengan Nilai";
	}elseif($angka > $nilai){
		// statement jika angka lebih dari nilai
		echo "Angka lebih dari Nilai";
	}elseif($angka < $nilai){
		// statemnet angka kurang dari nilai
		echo "Angka Kurang dari Nilai";
	}else{
		// statement selain dari if yang ada
		echo "Angka bukan Nilai";
	}
?>
