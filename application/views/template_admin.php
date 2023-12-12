<!DOCTYPE html>
<html dir="ltr" lang="en" data-assets-path="<?= site_url('assets/matrix/') ?> /assets/">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="<?= site_url('assets/matrix/') ?> icon" type="image/png" sizes="16x16"
		href="<?= site_url('assets/matrix/') ?>assets/images/ikon.png">
	<title><?= $this->session->userdata('level'); ?> Pages</title>
	<!-- Custom CSS -->
	<link href="<?= site_url('assets/matrix/') ?>assets/libs/flot/css/float-chart.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= site_url('assets/matrix/') ?>dist/css/style.min.css" rel="stylesheet">

	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>



</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none"
						href="javascript:void(0)">
						<i class="ti-menu ti-close"></i>
					</a>

					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="<?= base_url() ?>">>
						<!-- Logo icon -->
						<b class="logo-icon p-l-10">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="<?= site_url('assets/matrix/') ?>assets/images/iconic.png" alt="homepage"
								class="light-logo" />

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="<?= site_url('assets/matrix/') ?>assets/images/pagar.png" alt="homepage"
								class="light-logo" />

						</span>
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Toggle which is visible on mobile only -->
					<!-- ============================================================== -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light"
						href="javascript:void(0)" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<li class="nav-item d-none d-md-block"><a
								class="nav-link sidebartoggler waves-effect waves-light"
								href="javascript:void(0)"
								data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

					</ul>
					<!-- ============================================================= -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-right">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?= site_url('assets/matrix/') ?>assets/images/users/1.jpg" alt="user"
									class="rounded-circle" width="31" style="margin-right: 10px;">
								<?= $this->session->userdata('nama'); ?>
							</a>

							<div class="dropdown-menu dropdown-menu-right user-dd animated">
								<a class="dropdown-item" href="<?= base_url ('auth/log_out/') ?>"><i
										class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<div class="d-flex flex-column flex-md-row">
			<!-- Sidebar -->
			<aside class="left-sidebar" data-sidebarbg="skin5">
				<!-- Sidebar scroll-->
				<div class="scroll-sidebar">
					<!-- Sidebar navigation-->
					<nav class="sidebar-nav">
						<ul id="sidebarnav" class="p-t-30">
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/home/') ?>" aria-expanded="false"><i
										class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
							</li>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/carousel/') ?>" aria-expanded="false"><i
										class="mdi mdi-view-carousel"></i><span class="hide-menu">Carousel</span></a>
							</li>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/kategori/') ?>" aria-expanded="false"><i
										class="mdi mdi-book-open"></i><span class="hide-menu">Content
										Category</span></a></li>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/Konten/') ?>" aria-expanded="false"><i
										class="mdi mdi-play-protected-content"></i><span
										class="hide-menu">Content</span></a></li>
							<?php if($this->session->userdata('level')=='Admin') { ?>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/User/') ?>" aria-expanded="false"><i
										class="mdi mdi-account"></i><span class="hide-menu">User</span></a></li>
							<?php } ?>
							<?php if($this->session->userdata('level')=='Admin') { ?>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/konfigurasi/') ?>" aria-expanded="false"><i
										class="mdi mdi-settings"></i><span class="hide-menu">Configuration</span></a>
							</li>
							<?php } ?>
							<?php if($this->session->userdata('level')=='Admin') { ?>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/gallery/') ?>" aria-expanded="false"><i
										class="mdi mdi-google-photos"></i><span class="hide-menu">Own Gallery</span></a>
							</li>
							<?php } ?>
							<?php if($this->session->userdata('level')=='Admin') { ?>
							<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
									href="<?= site_url('admin/About/') ?>" aria-expanded="false"><i
										class="mdi mdi-camera"></i><span class="hide-menu">Own Profile</span></a></li>
							<?php } ?>
						</ul>
					</nav>
					<!-- End Sidebar navigation -->
				</div>
				<!-- End Sidebar scroll-->
			</aside>
		</div>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-12 d-flex no-block align-items-center">
						<h4 class="page-title"><?= $this->session->userdata('level'); ?> Page</h4>
						<div class="ml-auto text-right">
							<nav aria-label="breadcrumb">
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="flex-grow-1 container-p-y">
				<?= $contents; ?>
			</div>
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer text-center">
				All Rights Reserved by Junichiro Alexandra</a>.
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js">
	</script>
	<script src="<?= site_url('assets/matrix/') ?>assets/extra-libs/sparkline/sparkline.js"></script>
	<!--Wave Effects -->
	<script src="<?= site_url('assets/matrix/') ?>dist/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?= site_url('assets/matrix/') ?>dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?= site_url('assets/matrix/') ?>dist/js/custom.min.js"></script>
	<!--This page JavaScript -->
	<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
	<!-- Charts js Files -->
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/excanvas.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/jquery.flot.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/jquery.flot.pie.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/jquery.flot.time.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/jquery.flot.stack.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
	<script src="<?= site_url('assets/matrix/') ?>dist/js/pages/chart/chart-page-init.js"></script>
	<script>
		$('#dissapear').delay('slow').slideDown('slow').delay('5000').slideUp('500');

	</script>

	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
		});

	</script>

	<!-- <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [{
                            value: 'First.Name',
                            title: 'First Name'
                        },
                        {
                            value: 'Email',
                            title: 'Email'
                        },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                        "See docs to implement AI Assistant"))
                });

            </script> -->

</body>

</html>
