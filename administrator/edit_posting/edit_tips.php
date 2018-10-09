<!DOCTYPE html>
<?php
include ('../../koneksi.php');
include ('../aksi_admin/session.php');
$tanggal = date('Y-m-d');
?>
<head>
   <title>Administrator</title>
   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="../assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <link href="../css/style-default.css" rel="stylesheet" id="style_color" />
    <link href="../assets/ckeditor/content.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap-fileupload.min.css" />
</head>
<body class="fixed-top">
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <div class="navbar-inner">
           <div class="container-fluid">
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder"></div>
               </div>
                <a class="brand" href="../dashboard.php">
                    <h3 class="sub-menu">Administrator</h3>
               </a>
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <div id="top_menu" class="nav notify-row">                   
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="../aksi_admin/aksi_logout.php" data-original-title="Keluar">
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
                      <a class="" href="../dashboard.php">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                     <li class="sub-menu">
                      <a href="../article.php" class="">
                          <i class="icon-book"></i>
                          <span>Article</span>
                      </a>
                  </li>


                  <li class="sub-menu active">
                      <a href="../tips.php" class="">
                          <i class="icon-road"></i>
                          <span>Tips &amp; Trik </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="../gallery.php" class="">
                          <i class="icon-camera"></i>
                          <span>Gallery</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="../events.php" class="">
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
                            <span class="text">Ganti Warna :</span>
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
                           <a href="../dashboard.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Tips &amp; Trick
                       </li>                       
                   </ul>
               </div>
            </div>
            <?php
        $id = $_GET['id'];
        $query = mysqli_query($connect, "select * from tips where tips_id='$id'") or die(mysqli_error());        
        $data = mysqli_fetch_array($query);
        ?>
           <div class="row-fluid">
                <div class="span12">
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Edit Tips</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <form action="../aksi_admin/aksi_edit_tips.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="tips_id" value="<?php echo $id; ?>" />
									<div class="control-group">
                                    <label class="control-label">Judul</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Masukan Judul" class="input-xlarge"  name="judul" value="<?php echo $data['judul'] ?>" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Kategori</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1" name="kategori">
                                            <option value="<?php echo $data['kategori'] ?>"><?php echo $data['kategori'] ?></option>
                                            <option value="Alam">Tujuan</option>
                                            <option value="Modern">Persiapan</option>
                                            <option value="Alam">Perjalanan</option>
                                            <option value="Modern">Tiba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Isi</label>
                                    <div class="controls">
                                        <div id="div-1" class="body collapse in">
                                        <textarea cols="60" rows="10" id="posting" name="isi" ><?php echo $data['isi'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tanggal</label>
                                    <div class="controls">
                                        <input class="medium" name="tanggal" type="text" placeholder="<?php echo $tanggal; ?>" disabled />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Gambar</label>
                                    <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="../gambar/<?php echo $data['pic'] ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary">
                                        <span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file"  name="gambar"/>
                                    </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                                        
                                    </div>
                                <div class="form-actions">
                                    <button type="submit" name="simpan" class="btn blue"><i class="icon-ok"></i> Simpan Dan Keluar</button>
                                    <a href="../tips.php"><button type="button" class="btn"><i class=" icon-remove"></i> Keluar</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
         </div>
      </div>
   </div>
   <div id="footer">
       Powered By : Dpoint.
   </div>
   <script src="../js/jquery-1.8.3.min.js"></script>
   <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="../assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="../assets/uniform/jquery.uniform.min.js"></script>
   <script src="../js/common-scripts.js"></script>
   <script src="../js/bootstrap-fileupload.js"></script>
  <script type="text/javascript">
    var editor = CKEDITOR.replace('posting');
    </script>         
</body>
</html>