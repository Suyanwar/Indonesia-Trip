    <?php
        include ('../../koneksi.php');
        $tgl=date('Y-m-d');
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $kategori = $_POST['kategori'];
        $lokasi = $_POST['lokasi'];
        $koordinat = $_POST['koordinat'];
        $fileName1 = $_FILES['gambar1']['name'];
        $fileName2 = $_FILES['gambar2']['name'];
        $fileName3 = $_FILES['gambar3']['name'];
        $fileName4 = $_FILES['gambar4']['name'];
        $fileName5 = $_FILES['gambar5']['name'];
        $query = "INSERT INTO article(judul, isi, kategori, lokasi, gambar1, gambar2, gambar3, gambar4, gambar5, tanggal, koordinat)
                VALUES('$judul','$isi','$kategori','$lokasi','$fileName1','$fileName2','$fileName3','$fileName4','$fileName5','$tgl','$koordinat')";
        $input = mysqli_query($connect, $query);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], '../gambar/'.$_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], '../gambar/'.$_FILES['gambar2']['name']);
        move_uploaded_file($_FILES['gambar3']['tmp_name'], '../gambar/'.$_FILES['gambar3']['name']);
        move_uploaded_file($_FILES['gambar4']['tmp_name'], '../gambar/'.$_FILES['gambar4']['name']);
        move_uploaded_file($_FILES['gambar5']['tmp_name'], '../gambar/'.$_FILES['gambar5']['name']);
        if (isset($_POST['simpandankeluar'])){
        header('location:../article.php');
    }
    ?>