<?php 
	/*
	
		switch(param){
			case 'a': 
				statement option
			break;
		}
	*/
	
	$nilai = 71;
	
	switch($nilai){
		case 70 : 
			echo "Grade C";
		break;
		case 80 : 
			echo "Grade B";
		break;
		case 90 : 
			echo "Grade A";
		break;
		default:
			echo "Nilai belom ada !";
		break;
	}
?>