    <?php
        include('../../koneksi.php');
        $lokasi = $_POST['lokasi'];
        $kategori = $_POST['kategori'];       
        $query = "INSERT INTO lokasi_kategori(lokasi)
                VALUES('$lokasi')";
        $input = mysqli_query($connect, $query);
        $query2 = "INSERT INTO kategori(kategori)
                VALUES('$kategori')";
        $input2 = mysqli_query($connect, $query2);
        if(isset($_POST['simpandankeluar'])){
          header('location:../article.php');
    }
    ?>