<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>KEBUTUHAN KALORI PT.X</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <section id="container" >
        <!--header start-->
        <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo"><b>PT. X</b></a>
          <!--logo end-->
          <div class="top-menu">
           <ul class="nav pull-right top-menu">
            <li><a class="logout" href="<?php echo site_url('logout'); ?>">Logout</a></li>
          </ul>
        </div>
      </header>
      <!--header end-->
      
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
           <h5 class="centered">Nama Pegawai</h5>

            <li class="mt">
              <a href="<?php echo site_url('pegawai'); ?>" >
                <span>HOME / MENU MAKANAN</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="<?php echo site_url('pegawai/profil'); ?>" >
                <span>PROFIL</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="<?php echo site_url('pegawai/kalori'); ?>" >
                <span>KALORI</span>
              </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

