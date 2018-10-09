<!DOCTYPE html>
<?php
include ('koneksi.php');
?>
<html>
  <head>
    <title>Indonesia Trip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">

    <link rel="stylesheet" type="text/css" href="administrator/assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="administrator/assets/data-tables/DT_bootstrap.css" />
    <script src="js/modernizr.custom.js"></script>
  </head>
  
  
  
  
  <body>
   <header>
      <div id="templatemo_top" class="mainArticle">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                <a class="imel" href="google.com"><i class="fa fa-envelope"></i>indonesia-trip@gmail.com</a>
              </div>
            </div>
                    
            <div class="col-sm-12 col-md-6">
              <div class="socialss">
                <ul>
                  <li><a href="#"><i class="fa fa-twitter socc"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook socc"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram socc"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss socc"></i></a></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    



    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
            <a rel="nofollow" href="index.php"><img src="images/header.jpg" alt="Kompres"></a>
            </div>
          </div>
          
          
           <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php#wisata">WISATA</a></li>
                 <li><a href="index.php#events">EVENTS</a></li>
                <li><a href="index.php#tips_trick">TIPS &amp; TRICK</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>


    
  <div id="templatemo_portfolio" class="section2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">

              <h1 class="text-center">TIPS AND TRICK - PERSIAPAN</h1>
              <p class="text-center"><medium>Mulailah perjalanan wisata anda dengan persiapan dan perlengkapan yang sesuai dengan destinasi wisata anda. Kami akan memberikan Tips & Trick untuk memulai perjalanan wisata anda.</medium></p>         
            <br><br><br>
            </div>

                <div class="row">
             <?php
                    $query = mysqli_query($connect, "SELECT * FROM tips where kategori = 'Persiapan'");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)){
                      $isi = $data['isi'];
                      $potong_text=substr($isi, 0, 300);
                   
                    ?>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox-list prod-cnt  alam">
                    <div class="itemCont">
                      <a rel="nofollow" href="readmore-tips.php?id=<?php echo $data['tips_id']; ?>">
                        <div class="thumb"><img class="img-responsive center-block"  src="administrator/gambar/<?php echo $data['pic']?>"></div>
                        <div class="itemInfo">      
                          <h4><?php echo $data['judul']; ?></h4>
                          <h6><?php echo $data['kategori']; ?></h6>
                          <p><?php echo $potong_text; ?>...</p>
                        </div>
                      </a>
                      <a rel="nofollow"  <a rel="nofollow" href="readmore-tips.php?id=<?php echo $data['tips_id']; ?>">
                      <button type="button" name="index" class="btn btn-primary goto" >Baca</button>
                      </a>
                    </div>
                  </div>
                 
                  <?php 
                    $no++;
                  }
                
                
                  ?>                        
                  
        </div>
                                
            </div>
          </div>
        </div>
      </div>    

<footer class="footer" id="foo">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info1">
              <h4>Contact</h4>
              <div class="addr">
                <p>Untuk informasi lebih lanjut, hubungi :</p>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Gunadarma University Campus J</li>
                      <li><i class="fa fa-mobile-phone"></i>(+62) 85777011608</li>
                      <li><i class="fa fa-globe"></i><a rel="nofollow" href="#">www.dpoint.com</a></li>
                      <li><i class="fa fa-envelope"></i>indonesia-trip@gmail.com</li>
                </ul>

              </div>
            </div>
          </div>
          
        <div class="col-md-4">
            <div class="info3">
              <h4>Subscribe</h4>
              <p>Daftar dan dapatkan tips dan update terbaru tentang wisata di Indonesia setiap hari nya</p>
              <form action="aksi_subscribe.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                </div>
                <div><button type="submit" class="btn btn-primary">Kirim</button></div>
              </form>
            </div>
          </div>  
          
          <div class="col-md-4">
           <div class="info2">
            <h4>Komentar dan Saran</h4>
                <p>Berikan komentar dan saran untuk website kami pada kolom komentar dibawah ini :</p>
            <form name="kritik" action="aksi_kritik_saran.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Masukan Nama" maxlength="30"/>
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" id="email" placeholder="Masukan Email" maxlength="30"/>
              </div>
              <div class="txtarea">
              <textarea name="message" class="form-control" id="message" placeholder="Tuliskan Kritik Dan Saran"></textarea>
              </div>
              <br></br>
              <div>
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button></div>
            </form>
            </div>
            </div>

    </footer>

      <div class="bfWrap text-center">
        <div class="templatemo_footer">Powered By : Dpoint.</div>
      </div>

     <script src="administrator/js/jquery-1.8.3.min.js"></script>
   <script src="administrator/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="administrator/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="administrator/js/jquery.blockui.js"></script>

   <script type="text/javascript" src="administrator/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/untuk-table.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/DT_bootstrap.js"></script>



   <script src="administrator/js/common-scripts.js"></script>

    <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
    
</body>
</html>