<html>
	<head>
	<title>Rekod Suhu Pelajar</title>
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
	<center>
	<h2>Senarai Nama Pelajar Pertandingan Catur Peringkat Kolej Vokasional </h2>
	
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=lightsalmon style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	
	<tr>
		<td>Id Pelajar</td><td>:</td><td> <input type="text" name="id_pelajar" required><br><br></td>
	</tr>
	<tr>
		<td>Nama Pelajar</td><td>:</td><td> <input type="text" name="nama" required><br><br></td>
	</tr>
	<tr>
		<td>Kelas</td><td>:</td><td> <input type="text" name="kelas" required><br><br></td>
	</tr>
	<tr>
		<td>Negeri Kelahiran</td><td>:</td><td> <select type="text" name="negeri" required>
		<option value="Johor">Johor</option>
    	<option value="Kedah">Kedah</option>
    	<option value="Kelantan">Kelantan</option>
    	<option value="Melaka">Melaka</option>
    	<option value="Pahang">Pahang</option>
		<option value="Pulau Pinang">Pulau Pinang </option>
		<option value="Perak">Perak </option>
		<option value="Perlis ">Perlis </option>
		<option value="Selangor ">Selangor </option>
		<option value="Terengganu">Terengganu </option>

  		</select><br><br></td>


	</tr>
	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
	</tr>

	</form>
	</tr>
	</table>
	</body>

<!--memproses input yang dimasukkan ke dalam db-->
<?php

include('config.php');
if(isset ($_POST['hantar'])){
	
	$id_pelajar = $_POST['id_pelajar'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$negeri = $_POST['negeri'];
	
	$query = "INSERT INTO pelajar WHERE VALUES ('$id_pelajar','$nama','$kelas','$negeri')";
	$result = mysqli_query($connect,$query) or die (mysqli_connect_error());
	mysqli_close($connect);
	header('Location:index.php');
	
}
?>

</html>