    <?php
        include ('../../koneksi.php');	
        $id = $_POST['id'];
        $fileName = $_FILES['gambar']['name'];
        $link = $_POST['link'];
       
        $query = "UPDATE slider
                SET gambar='$fileName', link='$link' where id = '$id'";
        $input = mysqli_query($connect, $query);
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../gallery.php');
    }
    ?>