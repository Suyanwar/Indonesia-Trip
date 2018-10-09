    <?php
        include('../../koneksi.php');		
        $isi = $_POST['isi'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $tgl=date('Y-m-d');
        $fileName = $_FILES['gambar']['name'];		
        $query = "INSERT INTO tips(judul, isi, kategori, tanggal, pic) VALUES('$judul', '$isi','$kategori', '$tgl', '$fileName')";
        $input = mysqli_query($connect, $query);
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpandankeluar'])){
        header('location:../tips.php');
    }
    ?>