<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

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

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo site_url('home/pendaftaran'); ?>" method="post">
		        <h2 class="form-login-heading">PENDAFTARAN USER PEGAWAI</h2>
		        <div class="login-wrap">
		        	<label>NOMOR INDUK</label>
		        	<p><?php echo $get_pegawai->nomor_induk; ?></p>
		        	<label>NAMA</label>
		        	<p><?php echo $get_pegawai->nama; ?></p>
		        	<label>JENIS KELAMIN</label>
		        	<p><?php echo ($get_pegawai->nomor_induk == 'l' ? 'Laki - Laki' : 'Perempuan'); ?></p>
		        	<label>DIVISI</label>
		        	<p><?php echo $this->m_divisi->get_divisi_by_id($get_pegawai->id_divisi)->nama_divisi; ?></p>
		        	<br>
		        	<label>FORM PENDAFTARAN</label>
		        	<input type="hidden" name="id" value="<?php echo $get_pegawai->id; ?>">
		        	<input type="email" class="form-control" placeholder="Email" autofocus name="email">
		            <br>
		            <input type="text" class="form-control" placeholder="User ID / Username" name="username">
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            <br>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit">DAFTARKAN</button>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
