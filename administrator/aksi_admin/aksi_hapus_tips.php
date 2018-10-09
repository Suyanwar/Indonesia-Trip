<?php
include ('../../koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM tips WHERE tips_id='$id' ") or die(mysqli_error());
if ($query){
	header('location:../tips.php');
}
?>