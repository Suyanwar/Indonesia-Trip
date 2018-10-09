<!DOCTYPE html>
<?php
include ('../koneksi.php');
include ('aksi_admin/session.php');
 ?>
<head>
   <title>Administrator</title>
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
</head>
<body class="fixed-top">
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <div class="navbar-inner">
           <div class="container-fluid">
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder"></div>
               </div>
               <a class="brand" href="dashboard.php">
                   <h3 class="sub-menu">Administrator</h3>
               </a>
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>               
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="aksi_admin/aksi_logout.php" data-original-title="Keluar">
                               <i class="icon-off"></i>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <div id="container" class="row-fluid">
      <div class="sidebar-scroll">
          <div id="sidebar" class="nav-collapse collapse">
              <ul class="sidebar-menu">
                  <li class="sub-menu">
                      <a class="" href="dashboard.php">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                     <li class="sub-menu">
                      <a href="article.php" class="">
                          <i class="icon-book"></i>
                          <span>Article</span>
                      </a>
                  </li>


                  <li class="sub-menu active">
                      <a href="tips.php" class="">
                          <i class="icon-road"></i>
                          <span>Tips &amp; Trik </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="gallery.php" class="">
                          <i class="icon-camera"></i>
                          <span>Gallery</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="events.php" class="">
                          <i class="icon-calendar"></i>
                          <span>Events</span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      <div id="main-content">
         <div class="container-fluid">  
            <div class="row-fluid">
               <div class="span12">
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <h3 class="page-title">
                     Tips &amp; Trick
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="dashboard.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Tips &amp; Trick
                       </li>                       
                   </ul>
               </div>
            </div>
             <div class="row-fluid">
                 <div class="span12">
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Daftar Tips &amp; Trick</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                 <a href="tambah_posting/tambah_tips.php" >
                                     <div class="btn-group">
                                         <button class="btn green" >
                                             Tambah Tips <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     </a>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover " id="editable-sample">
                                     <thead>
                                     <tr>
                                         <th>Opsi</th>
                                         <th>Judul</th>
                                         <th>Kategori</th>
                                         <th>Tanggal</th>
                                         <th>Gambar</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <?php
                                     $query = mysqli_query($connect, "SELECT * FROM tips ORDER BY tips_id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)){
                      $isi = $data['isi'];
                      $potong_text=substr($isi, 0, 300);
                    ?>
                                     <tr class="">
                                         <td><a href="edit_posting/edit_tips.php?id=<?php echo $data['tips_id']; ?>"><b class="icon-pencil"></b></a> || 
                                         <a href="aksi_admin/aksi_hapus_tips.php?id=<?php echo $data['tips_id'];?>"><b class="icon-trash"></b></a></td>
                                         <td><?php echo $data['judul']; ?></td>
                                         <td><?php echo $data['kategori']; ?></td>
                                         <td><?php echo $data['tanggal']; ?></td>
                                         <td><?php echo $data['pic']; ?></td>
                                     </tr>
                                      <?php
                    $no++;
                    }  
                    ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
      </div>
   </div>
   <div id="footer">
       Powered By : D-Point.
        </div>
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/common-scripts.js"></script>
   <script src="js/editable-table.js"></script>
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
</body>
</html>