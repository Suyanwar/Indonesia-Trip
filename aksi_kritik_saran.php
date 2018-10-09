
        <?php
        $konek = mysqli_connect("localhost","root","","pariwisata");
        // Fungsi untuk Merubah susunan format tanggal
        
        // Ambil variabel dari form
        
        $tgl=date('Y-m-d');
        $nama = $_POST['fullname'];
        $email = $_POST['email'];
        $komen = $_POST['message'];
       
        $konek = mysqli_connect("localhost","root","","pariwisata");
        $query = "INSERT INTO kritik_saran(nama, isi, email, tanggal)
                VALUES('$nama','$komen','$email','$tgl')";
        $input = mysqli_query($konek, $query);
        //Simpan dalam folder
        
        //Pengalihan Button
        if (isset($_POST['submit'])){
        header('location:index.php');
    }
    
    ?>