<?php
include ('../koneksi.php');
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
echo"<script>alert('Username Atau Password Kosong ! !');history.go(-1);</script>";
}
else
{
$username=$_POST['username'];
$password=$_POST['pass'];
$username = stripslashes($username);
$password = stripslashes($password);
$username1 = mysqli_real_escape_string($connect, $username);
$password1 = mysqli_real_escape_string($connect, $password);
$query = mysqli_query($connect, "select * from admin where pass_admin='$password1' AND user_admin='$username1'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username1;
header("location: ../dashboard.php");
} else {
$error = "Username atau Password belum terdaftar";
echo"<script>alert('Username Atau Password Salah !');history.go(-1);</script>";
}
mysqli_close($connect);
}
}
?>