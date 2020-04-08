<?php	
	/*
		OPERATOR PEMBANDING
		== 			: Equal (Sama dengan).
		=== 		: Identical (Sama dengan baik value maupun tipe datanya).
		!= atau <>	: Not Equal (Tidak sama dengan).
		>			: Greater Than (Lebih dari).
		<			: Less Than (Kurang dari).
		>=			: Greater Than or Equal to (Lebih dari atau sama dengan)
		<=			: Less Than or Equal to (Kurang dari atau sama dengan)
	*/
	// Deklarasi variabel :
	$angka = 100; // type int
	$string = "100"; // type string
	$pembanding = 105;
	
	// Equal : 
	echo "Equal is : <br>";
	var_dump($angka == $string); // Boolean (True)
	echo "<br>";
	
	// Identical :
	echo "Identical is : <br>";
	var_dump($angka === $string); // Boolean false
	echo "<br>";
	
	// Not Equal : 
	echo "Not Equal is : <br>";
	var_dump($angka != $string); // false
	echo "<br>";
	
	// Lebih dari : 
	echo "Greater Than is : <br>";
	var_dump($angka > $pembanding); // false
	echo "<br>";
	
	// Kurang dari : 
	echo "Less Than is : <br>";
	var_dump($angka < $pembanding); // true
	echo "<br>";
	
	// Lebih dari sama dengan 100 >= 105 : 
	echo "Greater Than is or equal to : <br>";
	var_dump($angka >= $pembanding); // false
	echo "<br>";
	
	// Kurang dari sama dengan 100 <= 105 : 
	echo "Less Than is or equal to : <br>";
	var_dump($angka <= $pembanding); // true
	echo "<br>";
?>