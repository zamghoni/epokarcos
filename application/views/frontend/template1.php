<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>E-POKAR</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="#" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/datatables.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/bootstrap-editable.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/bootstrap-table.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="<?php echo base_url(); ?>assets/frontend/images/ " height="90" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<div class="profile-picture">

							</div>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">

							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>

								</li>
								<li>
									<a role="menuitem" href="<?php echo site_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Keluar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">

						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="<?php echo site_url('bagianusr') ?>">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Data Bagian</span>
										</a>
									</li>

									<li>
										<a href="<?php echo site_url('lineusr') ?>">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Data Line</span>
										</a>
									</li>

                  <li>
                    <a href="<?php echo site_url('operatorusr') ?>">
                      <i class="fa fa-copy" aria-hidden="true"></i>
                      <span>Data Operator</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('performausr') ?>">
                      <i class="fa fa-copy" aria-hidden="true"></i>
                      <span>Data Performa</span>
                    </a>
                  </li>

									<li>
										<a href="<?php echo site_url('auth/logout') ?>">
											<i class="fa fa-power-off" aria-hidden="true"></i>
											<span>Keluar</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $judul ?></h2>

					</header>

					<!-- start: page -->
					<!--isi content-->
					<?php echo $contents ?>
					<!--end isi content-->

					<!-- end: page -->
					</div>
				</section>


			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>

								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/frontend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/frontend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/frontend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url(); ?>assets/frontend/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script>
		$(document).ready(function()
		{
			$('.datepicker').datepicker(
				{
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
		}
	);
	}
	);
		</script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/frontend/vendor/select2/select2.js"></script>

		<script src="<?php echo base_url(); ?>assets/frontend/datatables/datatables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/dataTables.bootstrap4.min.js"></script>

		<script>
			$('.mydatatable').DataTable({
				initComplete: function () {
					this.api().columns().every(function () {
						var column = this;
						var select = $('<select><option value=""></option></select>')
						.appendTo( $(column.header()).empty() )
						.on( 'change', function () {
							var val=$.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false)
								.draw();
						});
						column.data().unique().sort().each( function ( d, j ) {
							select.append('<option value="'+d+'">'+d+'</option>')
						});
					});
				}
			});
		</script>

		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/tableExport.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/data-table-active.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-editable.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-editable.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-resizable.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/colResizable-1.5.source.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-export.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/frontend/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/frontend/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/frontend/javascripts/theme.init.js"></script>


		<!-- Examples -->

	</body>
</html>
