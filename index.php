<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>Senarai Nama Pelajar </title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #F9C6FF;
	}
	</style>
   

	<body>
	<h2>Senarai Nama Pelajar Pertandingan Catur</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=lightsalmon>
		<tr>
		<th>ID PELAJAR</th>
		<th>NAMA PELAJAR</th>
		<th>KELAS</th>
		<th>NEGERI KELAHIRAN</th>
		<th>TINDAKAN</th>
		
		</tr>
	  
		<!--memaparkan rekod staf-->
<?php

$papar = mysqli_query($connect,"SELECT *FROM pelajar");
while($row = mysqli_fetch_array ($papar)){
	echo"
	
	<tr>
	<td>".$row['id_pelajar']."</td>
	<td>".$row['nama']."</td>
	<td>".$row['kelas']."</td>
	<td>".$row['negeri']."</td>
	<td><a href=\"padam.php?id_pelajar=".$row['id_pelajar'].="\">Padam</td>
	</tr>
	
";
}
?>

	</table>
	<p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
	
	</center>
	</body>
</html>
