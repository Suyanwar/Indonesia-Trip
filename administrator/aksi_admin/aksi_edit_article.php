<?php
        include ('../../koneksi.php');
        
        $tgl=date('Y-m-d');
        $id = $_POST['article_id'];
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
        
    if($fileName1!="" && $fileName2!="" && $fileName3!="" && $fileName4!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', gambar3='$fileName3', gambar4='$fileName4', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
		$move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
	}elseif($fileName5!="" && $fileName3!="" && $fileName2!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar3='$fileName3', gambar4='$fileName4', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
	}elseif($fileName1!="" && $fileName3!="" && $fileName2!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', gambar3='$fileName3', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName3!="" && $fileName4!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar3='$fileName3', gambar4='$fileName4', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName2!="" && $fileName4!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar4='$fileName4', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName2!="" && $fileName3!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar3='$fileName3', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName1!="" && $fileName2!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName1!="" && $fileName2!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName1!="" && $fileName3!="" && $fileName2!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', gambar3='$fileName3', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
		$move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
    }elseif($fileName4!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar4='$fileName4', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName3!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar3='$fileName3', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName3!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar3='$fileName3', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName2!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName2!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName2!="" && $fileName3!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', gambar3='$fileName3', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
    }elseif($fileName1!="" && $fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName1!="" && $fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName1!="" && $fileName3!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar3='$fileName3', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
    }elseif($fileName1!="" && $fileName2!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', gambar2='$fileName2', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
    }elseif($fileName5!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar5='$fileName5', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move5 = move_uploaded_file($_FILES['gambar5']['tmp_name'],'../gambar/'.$fileName5);
    }elseif($fileName4!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar4='$fileName4', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move4 = move_uploaded_file($_FILES['gambar4']['tmp_name'],'../gambar/'.$fileName4);
    }elseif($fileName3!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar3='$fileName3', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/'.$fileName3);
    }elseif($fileName2!=""){
        $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar2='$fileName2', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/'.$fileName2);
    }elseif($fileName1!=""){
       $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', gambar1='$fileName1', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/'.$fileName1);
    }else{		
       $query = mysqli_query($connect, "UPDATE article SET judul='$judul', isi='$isi', kategori='$kategori', lokasi='$lokasi', tanggal='$tgl', koordinat='$koordinat' WHERE article_id='$id' ")
        or die(mysqli_error());
	}
           if(isset($_POST['simpandankeluar'])){
          header('location:../article.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>