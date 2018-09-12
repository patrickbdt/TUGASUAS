<?php
include_once('../_header.php');
require_once "../_config/config.php";
include_once '../_config/koneksi.php';
if(!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>My Blog</title>
        <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">   
        <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">   
        <link rel="icon" href="../_assets/logo.png">
    </head>
        <body>
            <script src=<?=base_url('_assets/js/jquery.js')?>></script>
            <script src=<?=base_url('_assets/js/bootstrap.min.js')?>></script>
            <div id="wrapper">

<!-- Sidebar -->

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
        <h3 style="color: white;">Alensia Eka Saputra</h3><li>
        <img src="../_assets/aku.jpg" width="150px" class="img-circle"></li>
        </li><br>
        <li>
            <a href="<?=base_url('dashboard')?>"><i class="glyphicon glyphicon-dashboard"></i> <b> Dashboard</b></a>
        </li>
        <li>
            <a href="add-artikel.php"><i class="glyphicon glyphicon-plus"></i> <b> Add Artikel</b></a>
        </li>
        <li>
            <a href="../option-artikel.php"><i class="glyphicon glyphicon-list-alt"></i> <b> Option Artikel</b></a>
        </li>
        <li class="active">
            <a href="../auth/register.php"><i class="glyphicon glyphicon-user"></i> Add User</a>
		</li>
		<li>
            <a href="../komentar.php"><i class="glyphicon glyphicon-book"></i> Lihat Komentar </a>
        </li>
        <li>
            <a href="<?=base_url('auth/logout.php')?>"><i class="glyphicon glyphicon-log-out"></i> Logout </a>
        </li>
    </ul>
</div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1>Dashboard</h1>
                        <h2>Selamat Datang
                        <?php
                        if(isset($_SESSION['username'])) {
                            echo "";  
                            } 
                            error_reporting(0);
                        ?>
                        <?=$_SESSION['user'];?><br><br></h2>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu <i class="glyphicon glyphicon-th"></i> </a>
                    </div>
                </div>

                <!-- <img src="../img/edit2.jpg" width="200px">
                <br>
                <a href="#" class="btn"><i class="glyphicon glyphicon-facebook"> Tambah Barang </i></a> -->

<?php include_once('../_footer.php'); ?>
<div id="page-content-wrapper">
    <div class="container-fluid">
