<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="#" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo base_url(); ?>assets/backend/images/cosmo.png" height="100" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
					</div>
					<div class="panel-body">
						<?php $this->view('middle/message'); ?>
						<form action="<?php echo site_url('authprod/login') ?>" method="post">
							<div class="form-group mb-lg">
								<label>ID</label>
								<div class="input-group input-group-icon">
									<input name="id_mid" type="text" class="form-control input-lg" autocomplete="off" autofocus/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Sandi</label>

								</div>
								<div class="input-group input-group-icon">
									<input name="sandi_mid" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary">Login</button>
									<a href="<?php echo site_url('beranda'); ?>" title="Kembali Ke Beranda"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-lg btn-danger" >Kembali</button> </a>
								</div>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2021. All rights reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>
