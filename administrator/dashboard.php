<!DOCTYPE html>
<?php
include ('aksi_admin/session.php');
include ('../koneksi.php');
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
                  <li class="sub-menu active">
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
                  <li class="sub-menu">
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
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="dashboard.php">Home</a>
                           <span class="active"></span>
                       </li>                       
                   </ul>
               </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                <div class="metro-nav">                    
                    <div class="metro-nav-block nav-block-blue double">
                        <a data-original-title="" href="#">
                            <i class="icon-eye-open"></i>
                            <div class="info">+897</div>
                            <div class="status">Unique Visitor</div>
                        </a>
                    </div>
                </div>
                </div>
            </div>            
            <div class="row-fluid">
                 <div class="span6">
                     <div class="widget red scr">
                         <div class="widget-title scrol">
                             <h4><i class="icon-comments-alt"></i> Kritik Dan Saran</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									</span>
                         </div>
                         <div class="widget-body">
                             <div class="timeline-messages scroll">
                              <?php
                                     $query = mysqli_query($connect, "SELECT * FROM kritik_saran ORDER BY isi_id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)){
                    ?>
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="img/emo.png" class="avatar"></a>
                                     <div class="message-body msg-out">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#"><?php echo $data['nama'] ?></a> <?php echo $data['tanggal'] ?>
                                             <a href="aksi_admin/aksi_hapus_kritik_saran.php?id=<?php echo $data['isi_id'];?>" class="hapus-a hapus"><b class="icon-trash hapus"></b> </a>
                                             </p>
                                             <p><?php echo $data['isi']?></p>
                                         </div>
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
                    <div class="span6">
                     <div class="widget green">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Daftar Subscribe</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover" id="editable-sample">
                                   
                                    <thead>
                                     <tr>
                                         <th>Opsi</th>
                                         <th>Email</th>
                                     </tr>
                                     </thead>
                                      <?php
                                     $query = mysqli_query($connect, "SELECT * FROM subscribers ORDER BY id DESC");
                    $no = 1;
                    while ($subscribe = mysqli_fetch_array($query)){
                    ?>
                                     <tr class="">
                                         <td><a href="aksi_admin/aksi_hapus_subscribers.php?id=<?php echo $subscribe['id'];?>"><b class="icon-trash"></b></a></td>
                                         <td><?php echo $subscribe['email']; ?></td>                                         
                                     </tr>
                                      <?php
                    $no++;
                    }  
                    ?>
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
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
  <script src="js/jquery.blockui.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
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