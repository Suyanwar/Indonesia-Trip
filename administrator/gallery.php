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
    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
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


                  <li class="sub-menu">
                      <a href="tips.php" class="">
                          <i class="icon-road"></i>
                          <span>Tips &amp; Trik </span>
                      </a>
                  </li>
                  <li class="sub-menu active">
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
                            <span class="text">Ganti Warna:</span>
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
                     Gallery
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="dashboard.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Gallery
                       </li>                       
                   </ul>
               </div>
            </div>
           <div class="row-fluid">
                <div class="span12">
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Ganti Slider</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <form name="ganti_slider" action="aksi_admin/aksi_ganti_slider.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="col-a-1 col-b-1 col-c-1">
									<div class="control-group">
                                    <input type="hidden" name="id" value="1" />
                                    <label class="control-label">Gambar 1</label>
                                    <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 100px; height: 75px;"><img src="img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 75px; line-height: 20px;"></div>
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
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Masukan Link" class="input-xlarge"  name="link" />
                                    </div>
                    </div>
					<div class="form-actions">
                                    <button type="submit" name="simpan" class="btn blue"><i class="icon-ok"></i> Simpan</button>
								</div>
								</div>
							</form>
							<form name="ganti_slider" action="aksi_admin/aksi_ganti_slider.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="col-a-1 col-b-1 col-c-1">
								<div class="control-group">
                                    <input type="hidden" name="id" value="2" />
                                    <label class="control-label">Gambar 2</label>
                                    <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 100px; height: 75px;"><img src="img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 75px; line-height: 20px;"></div>
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
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Masukan Link" class="input-xlarge"  name="link" />
                                    </div>
                    </div>
					<div class="form-actions">
                                    <button type="submit" name="simpan" class="btn blue"><i class="icon-ok"></i> Simpan</button>
								</div>
								</div>
							</form>
							<form name="ganti_slider" action="aksi_admin/aksi_ganti_slider.php" class="form-horizontal" method="POST" enctype="multipart/form-data">        
								<div class="col-a-1 col-b-1 col-c-1">
								<div class="control-group">
                                    <input type="hidden" name="id" value="3" />
                                    <label class="control-label">Gambar 3</label>
                                    <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 100px; height: 75px;"><img src="img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 75px; line-height: 20px;"></div>
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
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Masukan Link" class="input-xlarge"  name="link" />
                                    </div>
                    </div>
					<div class="form-actions">
                                    <button type="submit" name="simpan" class="btn blue"><i class="icon-ok"></i> Simpan</button>
								</div>
								</div>
                            </form>
                            <form name="ganti_slider" action="aksi_admin/aksi_ganti_slider.php" class="form-horizontal" method="POST" enctype="multipart/form-data">        
								<div class="col-a-1 col-b-1 col-c-1">
								<div class="control-group">
                                    <input type="hidden" name="id" value="4" />
                                    <label class="control-label">Gambar 4</label>
                                    <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 100px; height: 75px;"><img src="img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 75px; line-height: 20px;"></div>
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
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Masukan Link" class="input-xlarge"  name="link" />
                                    </div>
                    </div>
					<div class="form-actions">
                                    <button type="submit" name="simpan" class="btn blue"><i class="icon-ok"></i> Simpan</button>
								</div>
								</div>
                            </form>
                    </div>
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
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/common-scripts.js"></script>
   <script src="js/bootstrap-fileupload.js"></script>
<script src="assets/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="assets/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="assets/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="js/editorInit.js"></script>	
   <script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script type="text/javascript">$(document).ready(function() {
$('.fancybox').fancybox();
      });
</script>
    <script>
        $(function () { formWysiwyg(); });
        </script>
        </body>
</html>