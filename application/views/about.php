<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Favicon -->
	<link href="<?= site_url('assets/frontend/') ?>img/jon.png" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/frontend/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/frontend/') ?>lib/animate/animate.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/frontend/') ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/frontend/') ?>css/style.css" rel="stylesheet">


</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner"></div>
	</div>
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid bg-dark px-5 d-none d-lg-block">
		<div class="row gx-0">
			<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
				<div class="d-inline-flex align-items-center" style="height: 45px;">
					<small class="me-3 text-light"><i
							class="fa fa-map-marker-alt me-2"></i><?= $konfig->alamat; ?></small>
					<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><?= $konfig->no_wa; ?></small>
					<small class="text-light"><i class="fa fa-envelope-open me-2"></i><?= $konfig->email; ?></small>
				</div>
			</div>
			<div class="col-lg-4 text-center text-lg-end">
				<div class="d-inline-flex align-items-center" style="height: 45px;">
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram fw-normal"></i></a>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="<?= $konfig->link; ?>"><i class="fab fa-whatsapp fw-normal"></i></a>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="<?= $konfig->linkedin; ?>"><i class="fab fa-linkedin fw-normal"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<div class="container-fluid position-relative p-0">
		<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
			<h1 class="m-0"><i class="fa fa-solid fa-gamepad me-2"></i><?= $konfig->judul_website; ?></h1>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto py-0">
					<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
						<div class="dropdown-menu m-0">
							<?php foreach($kategori as $ichiro) { ?>
							<a href="<?= base_url('homie/kategori/'.$ichiro['id_kategori']) ?>"
								class="nav-item nav-link text-dark">
								<?= $ichiro['nama_kategori'] ?>
							</a>
							<?php } ?>
						</div>
					</div>
					<a href="<?= base_url('homie/about/') ?>" class="nav-item nav-link">About</a>
					<a href="<?= base_url('homie/galeri/') ?>" class="nav-item nav-link">Gallery</a>

				</div>
				<butaton type="button" class="btn text-primary ms-3"><i class="fa fa-user"></i></butaton>

				<a href="<?= base_url('auth') ?>" class="btn btn-primary px-4">Lojin Mimin</a>
			</div>
		</nav>
	</div>
	<!-- Navbar End -->

	<!-- About Start -->
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<?php foreach ($about as $keysha) { ?>
				<div class="col-lg-7">
					<div class="section-title position-relative pb-3 mb-5">
						<h5 class="fw-bold text-primary text-uppercase">About Me</h5>
						<h1 class="mb-0"><?= $keysha['header'] ?></h1>
					</div>
					<p class="mb-4"><?= $keysha['informasi'] ?></p></br>
					<div class="row g-0 mb-3">
						<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
							<h5 class="mb-3">Name <i
									class="fa fa-chevron-right text-primary me-3"></i><?= $keysha['nama_aseli'] ?></h5>
							<h5 class="mb-3">Day born <i
									class="fa fa-chevron-right text-primary me-3"></i><?= $keysha['ttl'] ?></h5>
						</div>
						<div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
							<h5 class="mb-3">Hobby <i
									class="fa fa-chevron-right text-primary me-3"></i><?= $keysha['hobby'] ?></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-5" style="min-height: 500px; overflow: hidden;">
					<div class="position-relative h-100">
						<img class="position-absolute w-100 h-100 img-thumbnail wow zoomIn" data-wow-delay="0.9s"
							src="<?= base_url('assets/upload/about/'.$keysha['foto_aseli']) ?>"
							style="object-fit: cover;">
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- About End -->
					
	 <!-- Facts Start -->
	 <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">IG Followers</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">467</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Kelebihan</h5>
                            <h1 class="mb-0" data-toggle="counter-up">1</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Kekurangan</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">999</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


	<!-- Vendor Start -->

	<!-- Vendor End -->


	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
		<div class="container">
			<div class="row gx-5">
				<div class="col-lg-4 col-md-6 footer-about">
					<div
						class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
						<a href="index.html" class="navbar-brand">
							<h1 class="m-0 text-white"><i
									class="fa fa-solid fa-gamepad me-2"></i><?= $konfig->judul_website; ?>
							</h1>
						</a>
						<p class="mt-3 mb-4"><?= $konfig->profil_website; ?></p>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="row gx-5">
						<div class="col-lg-4 col-md-12 pt-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Address</h3>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-geo-alt text-primary me-2" r></i>
								<p class="mb-0"><?= $konfig->alamat; ?></p>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-envelope-open text-primary me-2"></i>
								<p class="mb-0"><?= $konfig->email; ?></p>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-telephone text-primary me-2"></i>
								<p class="mb-0"><?= $konfig->no_wa; ?></p>
							</div>
							<div class="d-flex mt-4">
								<a class="btn btn-primary btn-square me-2" href="<?= $konfig->link; ?>"><i
										class="fab fa-whatsapp fw-normal"></i></a>
								<a class="btn btn-primary btn-square me-2" href="<?= $konfig->instagram; ?>"><i
										class="fab fa-instagram fw-normal"></i></a>
								<a class="btn btn-primary btn-square me-2" href="<?= $konfig->linkedin; ?>"><i
										class="fab fa-linkedin fw-normal"></i></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Quick Links</h3>
							</div>
							<div class="link-animated d-flex flex-column justify-content-start">
								<a class="text-light mb-2" href="<?= base_url() ?>"><i
										class="bi bi-arrow-right text-primary me-2"></i>Home</a>
								<?php foreach ($kategori as $ichiro) { ?>
								<a class="text-light mb-2"
									href="<?= base_url('homie/kategori/'.$ichiro['id_kategori']) ?>"><i
										class="bi bi-arrow-right text-primary me-2"></i><?= $ichiro['nama_kategori'] ?></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Recent Post</h3>
							</div>
							<div class="link-animated d-flex flex-column justify-content-start">
								<?php foreach ($recentPosts as $post) { ?>
								<a class="text-light mb-2" href="<?= base_url('homie/'.$post['slug']) ?>"><i
										class="bi bi-arrow-right text-primary me-2"></i><?= $post['judul'] ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid text-white" style="background: #061429;">
		<div class="container text-center">
			<div class="row justify-content-end">
				<div class="col-lg-8 col-md-6">
					<div class="d-flex align-items-center justify-content-center" style="height: 75px;">
						<p class="mb-0">&copy; <a class="text-white border-bottom"
								href="#"><?= $konfig->judul_website; ?></a>. All
							Rights Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed by <a class="text-white border-bottom"><?= $konfig->name; ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url('assets/frontend/') ?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/frontend/') ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/frontend/') ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/frontend/') ?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/frontend/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/frontend/') ?>js/main.js"></script>
</body>

</html>
