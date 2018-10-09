<?php
    include('../../koneksi.php');
    $judul = $_POST['judul'];
    $startdate= $_POST['start'];
    $dateend= $_POST['end'];
    $query = "INSERT INTO events(title, start, end) VALUES('$judul', '$startdate','$dateend')";
    $input = mysqli_query($connect, $query);
    if (isset($_POST['simpandankeluar'])){
        header('location:../events.php');
    }
?>