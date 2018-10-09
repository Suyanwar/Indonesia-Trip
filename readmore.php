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
    <link href="administrator/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="administrator/assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="administrator/assets/data-tables/DT_bootstrap.css" />
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  </head>
  
  
  
  
  <body>
    <header>
      <div id="home" class="mainArticle">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                <a class="imel" ><i class="fa fa-envelope"></i>indonesia-trip@gmail.com</a>
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
                <li><a href="#map-lokasi">MAP LOKASI</a></li>
              </ul>
            </nav>
          </div>
        </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
            <?php
              $id = $_GET['id'];
        $query = mysqli_query($connect, "select * from article where article_id='$id'") or die(mysqli_error());
        
        $data = mysqli_fetch_array($query);
        ?>
            <h1 class="text-center"><?php echo $data['judul'] ?></h1>
            <h4 class="text-center"><?php echo $data['lokasi'] ?></h4>
            </div>
            <div class="teamInfo">
              <ul>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><a href="administrator/gambar/<?php echo $data['gambar1'];?>" class="fancybox"><img class="img-responsive" src="administrator/gambar/<?php echo $data['gambar1'] ?>"></a></div>
                    </div>
                </li>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><a href="administrator/gambar/<?php echo $data['gambar2'];?>" class="fancybox"><img class="img-responsive" src="administrator/gambar/<?php echo $data['gambar2'] ?>"></a></div>
                    </div>
                </li>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><a href="administrator/gambar/<?php echo $data['gambar3'];?>" class="fancybox"><img class="img-responsive" src="administrator/gambar/<?php echo $data['gambar3'] ?>"></a></div>
                    </div>
                </li>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><a href="administrator/gambar/<?php echo $data['gambar4'];?>" class="fancybox"><img class="img-responsive" src="administrator/gambar/<?php echo $data['gambar4'] ?>"></a></div>
                    </div>
                </li>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><a href="administrator/gambar/<?php echo $data['gambar5'];?>" class="fancybox"><img class="img-responsive" src="administrator/gambar/<?php echo $data['gambar5'] ?>"></a></div>
                    </div>
                </li>
              </ul>
            </div>
            <div class="glView">
            <br>
            <?php echo $data['isi']; ?>
            <div id="map-lokasi" class="section3">
              <h1 class="text-center map-title">MAP LOKASI</h1>
               <div id="map" class="map"></div>
              </div> 
          </div>
        </div>
      </div>
      </div> 

    
    <div class="opener text-center">
       
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->

</body>
<script src="administrator/js/jquery-1.8.3.min.js"></script>
   <script src="administrator/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="administrator/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="administrator/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="administrator/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/untuk-table.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/DT_bootstrap.js"></script>


   <!--common script for all pages-->
   <script src="administrator/js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="administrator/js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>


   <script src="administrator/js/jquery.nicescroll.js" type="text/javascript"></script>

   <script src="administrator/js/jquery.blockui.js"></script>

      
      
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
      <script type="text/javascript">
              
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(<?php echo $data['koordinat']?>);
 
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom:  15, 
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"<?php echo $data['judul']?>"
              });
      </script>

       <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
	  <script type="text/javascript" src="administrator/assets/fancybox/source/jquery.fancybox.pack.js"></script>
	  <script type="text/javascript">$(document).ready(function() {
  /*
   *  Simple image gallery. Uses default settings
   */     
$('.fancybox').fancybox();
      });
</script>
</html>