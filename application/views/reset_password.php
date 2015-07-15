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

  			<form class="form-login" action="<?php echo site_url('home/reset_password/' . $reset_url); ?>" method="post">
  				<h2 class="form-login-heading">RESET PASSWORD</h2>
  				<div class="login-wrap">
  					<input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" class="form-control" disabled value="<?php echo $nama; ?>">
            <br>
  					<input type="password" class="form-control" placeholder="Password Baru" name="password" autofocus>
            <br>
  					<button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Simpan</button>
  				</div>
  			</form>
  		</div>
  	</div>

  	<!-- js placed at the end of the document so the pages load faster -->
  	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  	<!--BACKSTRETCH-->
  	<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  	<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  	<script>
  	$.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {speed: 500});
  	</script>


  </body>
  </html>
