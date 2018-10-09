<?php
include ('../../koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM events WHERE id='$id' ") or die(mysqli_error());
if ($query){
	header('location:../events.php');
}
?>