<?php
include ('../../koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM article WHERE article_id='$id' ") or die(mysqli_error());
if ($query){
	header('location:../article.php');
}
?>