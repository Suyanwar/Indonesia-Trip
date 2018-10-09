    <?php
        include ('../../koneksi.php');
        
        $kategori = $_POST['kategori'];
        $judul = $_POST['judul'];
        $id = $_POST['tips_id'];
        $isi = $_POST['isi'];
        $tgl=date('Y-m-d');
        $fileName = $_FILES['gambar']['name'];
        
        if($fileName==""){
            $query = mysqli_query($connect, "UPDATE tips SET judul ='$judul', kategori='$kategori', isi='$isi', tanggal='$tgl' WHERE tips_id='$id' ")
        or die(mysqli_error());
        }else{
        $query = mysqli_query($connect, "UPDATE tips SET judul ='$judul', isi='$isi', kategori='$kategori', pic='$fileName', tanggal='$tgl' WHERE tips_id='$id' ")
        or die(mysqli_error());
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/'.$fileName);
            }
        if (isset($_POST['simpan'])){
        header('location:../tips.php');
    }
    
    ?>