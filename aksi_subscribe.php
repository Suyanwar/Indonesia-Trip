    <?php
        $email = $_POST['email'];
        $konek = mysqli_connect("localhost","root","","pariwisata");
        $query = "INSERT INTO subscribers(email)
                VALUES('$email')";
        $input = mysqli_query($konek, $query);
        if ($input == 1){
            echo "window.alert('Data Berhasil Ditambah!')";
            header('location:index.php');
        }
        else {
           echo"<script>alert('Data Berhasil Ditambah!');history.go(-1);</script>";
            header('location:index.php');
        }
    ?>