<html>
	<head>
		<title>SAMPLE FOREACH</title>
		<style>
			table{ width: 80%}
			table, th, td {
				border:1px solid black; border-collapse: collapse;
			}
			th {
				background-color:orange;
			}
		</style>
	</head>
	<body>
		<?php 
			// FOR & FORACH
			
			for($i=0; $i<=10; $i++){
				echo "Angkanya : ".$i."<br>";
			}
			
			
			/* FORACH */
			// Fetch data array to table
			$data = array(
				array('nim'=>12145366,'nama'=>'Angga Sudiro','kelas'=>'12 IA'),
				array('nim'=>12145364,'nama'=>'Veronica','kelas'=>'12 IA'),
				array('nim'=>12145367,'nama'=>'Astusi','kelas'=>'12 IA'),
				array('nim'=>12145368,'nama'=>'Angelina','kelas'=>'12 IA'),
				array('nim'=>12145370,'nama'=>'Firda Ayunda','kelas'=>'12 IA')
			);
		?>
		<table>
			<tr> 
				<th>No</th> <!-- table header --->
				<th>Nim</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
			<?php
				// deklarasi nomor
				$no = 1;
				foreach($data as $item){
					echo "<tr>";
					echo "<td>".$no."</td>"; // table data atau column
					echo "<td>".$item['nim']."</td>";
					echo "<td>".$item['nama']."</td>";
					echo "<td>".$item['kelas']."</td>";
					echo "</tr>";
					$no++;
				}
			?>
		</table>
		
	</body>
</html>