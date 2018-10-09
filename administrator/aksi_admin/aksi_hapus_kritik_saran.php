<?php
include ('../../koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM kritik_saran WHERE isi_id='$id'";
if (mysqli_query($connect, $query)){
	header('location:../dashboard.php');
}
?>