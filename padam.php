<?php

include('config.php');
$id_pelajar = $_GET['id_pelajar'];
$query = mysqli_query($connect,"DELETE FROM pelajar WHERE id_pelajar = '$id_pelajar'");
header('Location:index.php');

?>