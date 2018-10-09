    <?php
        include ('../../koneksi.php');
        $id = $_POST['id'];
        $title = $_POST['judul'];
        $start = $_POST['start'];
        $end = $_POST['end'];
		
			$query = mysqli_query($connect, "UPDATE events SET title ='$title', start='$start', end='$end' WHERE id='$id' ")
        or die(mysqli_error());
		if (isset($_POST['simpan'])){
        header('location:../events.php');
    }
    
    ?>