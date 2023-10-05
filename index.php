<?php error_reporting(0);
    $page = htmlentities($_REQUEST['page']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>praktek 1</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load(
        { google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":[ "Flaticon", "Font Awesome 5 Solid",
        "Font Awesome 5 Regular", "Font Awesome 5 Brands","simple-line-icons"],urls: ['assets/css/fonts.min.css'] },
        active: function() {sessionStorage.fonts = true;} });
    </script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/atlantis.min.js"></script>
</head>
<body>
    <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <div class="logo-header" data-background-color="blue2">
                <a href="beranda" class="logo"> <img src="assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more">
                    <i class="icon-options-vertical"></i></button> <div class="nav-toggle"> <button class="btn btn-toggle sidenav-overlay-toggler"><i class="icon-menu"></i>
                </button>
            </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid"> <ul class="navbar-nav topbar-nav ml-md-auto align-items-center"> <li class="nav-item dropdown hidden-caret"> <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i> </a> </li> <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <div class="avatar-sm"> <img src="assets/img/profile.jpg" alt="profile" class="avatar-img rounded-circle"> </div> </a> <ul class="dropdown-menu dropdown-user animated fadeIn"> <div class="dropdown-user-scroll scrollbar-outer"> <li> <div class="user-box"> <div class="avatar-lg"> <img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"> </div> <div class="u-text"> <h4>Hizrian</h4> <p class="text-muted">hello@example.com</p> <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a> </div> </div> </li> <li> <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Logout</a> </li> </div> </ul> </li> </ul> </div>
            </nav>
        </div>
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner"> 
                <div class="sidebar-content">
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="home">
                                <i class="icon-layers"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="icon-note"></i>
                                <p>Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="icon-tag"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <?php
                if(!file_exists($page) || empty($page)) {
                    include "beranda.php";
                }else{
                    include $page;
                } ?>
            </div>
        </div>
    </div>
</body>
</html>