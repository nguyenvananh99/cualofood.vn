<!DOCTYPE html>
<html lang="en">
<head>
<?php
define ('BASE_URL','http://localhost/cualofood/admin/');
require_once "./app/core/Db.php";
  require_once "./app/lib/session.php";
  require_once "./app/helpers/format.php";
  session::init();
  Session::checkSession();

    Spl_autoload_register(function ($className){ 
      include_once ("./app/models/".$className.".php");
  });
 $db = new Database();
 $prM = new products();
 $pCategoryM  = new CategoryPost();
 $brM = new brands();
 $pageM = new paginations();
 $pctM= new productCategory();
 $orM = new orderModel();
 $pM = new posts();
 $UserM = new users();
 $CustomerM = new customers();




?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CuaLofood | Trang quản trị</title>
<!-- jQuery -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
<script src="http://localhost/cualofood/admin/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/cualofood/admin/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<link rel="stylesheet" href="http://localhost/cualofood/admin/public/css/HomeIndex.Head.styles.css">

<script  type="text/javascript" src="http://localhost/cualofood/admin/public/plugins/ckeditor/ckeditor.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/cualofood/admin/public/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="http://localhost/cualofood/admin/public/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php
      require_once "./app/views/layouts/navbar.php";
      require_once "./app/views/layouts/sidebar.php";

?>

  

