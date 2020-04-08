<?php 
	/*
		Array :  
		Index dimulai dari nol (0) element dimulai dari 1
		- Indexed array 	: Array dengan numeric index
		- Associative array : Array dengan nama key-nya
		- Multidimensional 	: Array yang meliliki array didalamnya (akan sering dipakai dalam pengolahan json)
	*/
	
	// Indexed array :
	// $data[0] = Satu;
	$data = array("Satu","Dua","Tiga","Empat"); // 4 element atau 3 index 
	echo "Index ke 0 element pertama : ".$data[0]."<br>";
	echo "Index ke 3 element keempat : ".$data[3]."<br>";
	
	// Associative array
	$array = array('nim'=>123456,"nama"=>'Ardian');
	echo "Data dari : ".$array['nim']." dengan nama ".$array['nama']."<br>";
	
	// Multidimensional
	$multi = array(
					'siswa' => array("Anda","Dia","Saya"),
					'guru'	=> array("Guru 1","Guru 2")
				);
	// Nama siswa Dia diajar oleh Guru 1
	echo "Nama siswa ".$multi['siswa'][1]." diajar oleh ".$multi['guru'][1];
	
	echo "<br>";
	$siswa = $multi['siswa'];
	$guru  = $multi['guru'];
	echo "Jumlah Siswa : ".count($siswa)." orang <br>";
	echo "Nama siswa ".$siswa[1]." diajar oleh ".$guru[1];
?>