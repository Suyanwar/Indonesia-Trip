<!DOCTYPE html>
<?php
include ('koneksi.php');
?>
<html lang="en">
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
    
    <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="css/fullcalendar/jquery-ui.min.css" rel="stylesheet" />
    <link href="css/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />

    <link rel="stylesheet" type="text/css" href="administrator/assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="administrator/assets/data-tables/DT_bootstrap.css" />
    <script src="js/modernizr.custom.js"></script>
  </head>
  
  
  
  
  <body>
  <!-- Start Of HEADER -->
     <header>
      <div id="home" class="mainArticle">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                <a class="imel"><i class="fa fa-envelope"></i>indonesia-trip@gmail.com</a>
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
<!-- End Of HEADER -->

    <!-- Start Of SLIDER -->
        <div id="slider" class="nivoSlider">
        <?php
                    $query1 = mysqli_query($connect, "SELECT * FROM slider where id = '1'");
                    $data1 = mysqli_fetch_array($query1, MYSQLI_BOTH);                      
                ?>
            <a href="<?php echo $data1['link'] ?>"><img src="administrator/gambar/<?php echo $data1['gambar'] ?>" alt="slide 1" /></a>
            <?php
                    $query2 = mysqli_query($connect, "SELECT * FROM slider where id = '2'");
                    $data2 = mysqli_fetch_array($query2, MYSQLI_BOTH);                      
                ?>
            <a href="<?php echo $data2['link'] ?>"><img src="administrator/gambar/<?php echo $data2['gambar'] ?>" alt="slide 2" /></a>
            <?php
                    $query3 = mysqli_query($connect, "SELECT * FROM slider where id = '3'");
                    $data3 = mysqli_fetch_array($query3, MYSQLI_BOTH);                      
                ?>
            <a href="<?php echo $data3['link'] ?>"><img src="administrator/gambar/<?php echo $data3['gambar'] ?>" alt="slide 3" /></a>
            <?php
                    $query4 = mysqli_query($connect, "SELECT * FROM slider where id = '4'");
                    $data4 = mysqli_fetch_array($query4, MYSQLI_BOTH);                      
                ?>
            <a href="<?php echo $data4['link'] ?>"><img src="administrator/gambar/<?php echo $data4['gambar'] ?>" alt="slide 4" /></a>
        </div>
        <!-- End Of SLIDER -->

<!-- Start Of LOGO & MENU BAR -->
    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
            <a rel="nofollow" href="index.php"><img src="images/header.png"  alt="Kompres" class="img-responsive center-block"></a>
            </div>
          </div>
          
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#home">HOME</a></li>
                <li><a href="#wisata">WISATA</a></li>
                <li><a href="#events">EVENTS</a></li>
                <li><a href="#tips_trick">TIPS &amp; TRICK</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- End Of LOGO & MENU BAR -->
  <!-- Start Of MENU WISATA -->  
  <div id="wisata" class="section2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">

              <h1 class="text-center">WISATA INDONESIA</h1>
              <p class="text-center"><medium>Indonesia, merupakan sebuah negara yang memiliki banyak destinasi wisata. Keindahan alam menjadi salah satu daya tarik wisatawan lokal maupun asing.</medium></p>         
              <h5 class="text-center">Gunakan Fungsi Search Untuk Mencari Nama, Kategori, Dan Lokasi Wisata</h5>
            </div>

                <div class="row">
                <table class="table table-striped table-hover" id="editable-sample">
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM article ORDER BY tanggal DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)){
                      $isi = $data['isi'];
                      $potong_text=substr($isi, 0, 300);
                      $kategori = $data['kategori'];
                      
                ?>
                
                <?php
                if($kategori=="Alam"){
                ?>
                <tr>
                <td>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox-list prod-cnt  alam">
                    <div class="itemCont">
                      <a rel="nofollow" href="readmore.php?id=<?php echo $data['article_id']; ?>">
                        <div class="thumb"><img class="img-responsive center-block"  src="administrator/gambar/<?php echo $data['gambar1']?>"></div>
                        <div class="itemInfo">      
                          <h4><?php echo $data['judul']; ?></h4>
                          <h6><?php echo $data['kategori']; ?></h6>
                          <h6><?php echo $data['lokasi']; ?></h6>
                          <p><?php echo $potong_text; ?>...</p>
                        </div>
                      </a>
                      <a rel="nofollow"  <a rel="nofollow" href="readmore.php?id=<?php echo $data['article_id']; ?>">
                      <button type="button" name="index" class="btn btn-primary goto" >Baca</button>
                      </a>
                    </div>
                  </div>
                  </td>
                  </tr>
                  <?php
                  }else{
                      
                    ?>
                  <tr>
                  <td>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox-list prod-cnt modern">
                    <div class="itemCont">
                       <a rel="nofollow" href="readmore.php?id=<?php echo $data['article_id']; ?>">
                        <div class="thumb"><img class="img-responsive center-block"  src="administrator/gambar/<?php echo $data['gambar1']?>"></div>
                        <div class="itemInfo">
                         <h4><?php echo $data['judul']; ?></h4>
                          <h6><?php echo $data['kategori']; ?></h6>
                          <h6><?php echo $data['lokasi']; ?></h6>
                          <p><?php echo $potong_text; ?>...</p>
                        </div>
                      </a>
                      <a rel="nofollow"  <a rel="nofollow" href="readmore.php?id=<?php echo $data['article_id']; ?>">
                      <button type="button" class="btn btn-primary goto">Baca</button>
                      </a>
                    </div>
                  </div>
                  </td>
                  </tr>
                  <?php 
                    $no++;
                  }
                }
                
                  ?>                        
                           
        </table>                  
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- End Of MENU WISATA -->
    <div class="container">
    <div id="events" class="section2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">

             <h1 class="text-center">CALENDAR EVENTS</h1>
              <p class="text-center"><medium>Nikmati perjalanan wisatamu dengan mengunjungi tempat yang sedang mengadakan event-event di dalamnya. Pastinya perjalanan wisata akan lebih menyenangkan dan menyadarkan bahwa betapa indahnya Indonesia.   </medium></p>         
              <br>
              <div class="panel panel-danger calendar">
                    <div class="panel-heading">
                        <h4></h4>
                        <div class="options">
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id='calendar-drag'></div>
                    </div>
                </div>

            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
   <!-- Start Of TIPS & TRICK -->    
     <div id="tips_trick" class="section4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">TIPS &amp; TRICK</h1>
              <p class="text-center"><medium>Mulailah perjanalan wisata anda dengan persiapan dan perlengkapan yang sesuai dengan destinasi wisata anda. Kami akan memberikan Tips & Trick untuk memulai perjalanan wisata anda.</medium></p>
            </div>
            
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                
                  <div class="hexagon-a">
                    <a class="hlinktop" href="tips_trick_tujuan.php">
                      <div class="hexa-a">
                        <div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="hexagon">
                    <a class="hlinkbott" href="tips_trick_tujuan.php">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>Tujuan</h4>
                  <p><small></small></p>
                  <a class="btn btn-primary" href="tips_trick_tujuan.php">Baca</a>
                </div>
              </div>
              
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                  <div class="hexagon-a">
                    <a class="hlinktop" href="tips_trick_persiapan.php">
                      <div class="hexa-a">
                        <div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-suitcase"></i></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="hexagon">
                    <a class="hlinkbott" href="tips_trick_persiapan.php">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>Persiapan</h4>
                  <p><small></small></p>
                  <a class="btn btn-primary" href="tips_trick_persiapan.php">Baca</a>
                </div>
              </div>
              
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="blok text-center">

                <div class="hexagon-a">
                  <a class="hlinktop" href="tips_trick_perjalanan.php">
                    <div class="hexa-a">
                      <div class="hcontainer-a">
                        <div class="vertical-align-a">
                          <span class="texts-a"><i class="fa fa-plane"></i></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="hexagon">
                  <a class="hlinkbott" href="tips_trick_perjalanan.php">
                    <div class="hexa">
                      <div class="hcontainer">
                        <div class="vertical-align">
                          <span class="texts"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <h4>Perjalanan</h4>
                <p><small></small></p>
                <a class="btn btn-primary" href="tips_trick_perjalanan.php">Baca</a>
              </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="blok text-center">

                <div class="hexagon-a">
                  <a class="hlinktop" href="tips_trick_liburan.php">
                    <div class="hexa-a">
                      <div class="hcontainer-a">
                        <div class="vertical-align-a">
                          <span class="texts-a"><i class="fa fa-camera"></i></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="hexagon">
                  <a class="hlinkbott" href="tips_trick_liburan.php">
                    <div class="hexa">
                      <div class="hcontainer">
                        <div class="vertical-align">
                          <span class="texts"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <h4>Liburan</h4>
                <p><small></small></p>
                <a class="btn btn-primary" href="tips_trick_liburan.php">Baca</a>
              </div>
            </div>
          </div>
          </div>
          
        </div>
         </div>
</div>
<!-- End Of TIPS & TRICK -->

  <!-- Start Of FOOTER -->
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
        <div class="templatemo_footer">Powered By: Dpoint.</div>
      </div>


   <script src="administrator/js/jquery-1.8.3.min.js"></script>
<script type='text/javascript' src='js/jqueryui-1.10.3.min.js'></script>
<script type='text/javascript' src='js/fullcalendar/fullcalendar.min.js'></script> 
<script type='text/javascript' src='js/demo-calendar.js'></script> 
   <script src="administrator/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="administrator/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="administrator/js/jquery.blockui.js"></script>

   <script type="text/javascript" src="administrator/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/untuk-table.js"></script>
   <script type="text/javascript" src="administrator/assets/data-tables/DT_bootstrap.js"></script>



   <script src="administrator/js/common-scripts.js"></script>

   <script src="administrator/js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>


   <script src="administrator/js/jquery.nicescroll.js" type="text/javascript"></script>

   <script src="administrator/js/jquery.blockui.js"></script>

    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script src="js/jquery.cookie.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>
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