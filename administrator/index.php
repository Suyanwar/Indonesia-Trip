<!DOCTYPE html>
<?php
include('aksi_admin/aksi_login.php');
if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>
<head>
    <meta charset="utf-8">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />    
    <link href="assets/login/css/icons.min.css" rel="stylesheet">
    <link href="assets/login/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/login/css/plugins.min.css" rel="stylesheet">
    <link href="assets/login/css/style.min.css" rel="stylesheet">
    <link href="assets/login/css/animate-custom.css" rel="stylesheet">
    <script src="assets/login/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="login fade-in" data-page="login">
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="img/user-logo.png" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="img/profil-logo.png" alt="Company Logo">
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <form action="" method="post">
                            <input type="text" placeholder="Username" class="input-field form-control icon-user" name="username" />
                            <input type="password" placeholder="Password" class="input-field form-control icon-password" name="pass" />
                            <button type="submit" name="submit" class="btn btn-login">Login</button>
                        </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="assets/login/js/jquery-1.11.js"></script>
    <script src="assets/login/js/jquery-migrate-1.2.1.js"></script>
    <script src="assets/login/js/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/login/js/bootstrap.min.js"></script>
    <script src="assets/login/js/backstretch.min.js"></script>
    <script src="assets/login/js/account.js"></script>
</html>