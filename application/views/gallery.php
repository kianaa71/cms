<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/frontend/') ?>img/jon.png" rel="icon">

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

	<!-- JavaScript to handle image preview -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const previewImages = document.querySelectorAll('.preview-image');

			previewImages.forEach(function (image) {
				image.addEventListener('click', function () {
					// Create a new image element
					const fullImage = document.createElement('img');
					fullImage.src = this.dataset.original;
					fullImage.alt = this.alt;

					// Create a container for the full-size image
					const imageContainer = document.createElement('div');
					imageContainer.classList.add('full-image-container', 'animate__animated',
						'animate__fadeIn');
					imageContainer.appendChild(fullImage);

					// Append the container to the body
					document.body.appendChild(imageContainer);

					// Close the preview on click
					imageContainer.addEventListener('click', function () {
						this.classList.remove('animate__fadeIn');
						this.classList.add('animate__fadeOut');
						setTimeout(() => {
							document.body.removeChild(this);
						}, 500); // Adjust the timeout based on the animation duration
					});
				});
			});
		});
	</script>

	<style>
		.full-image-container {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.8);
			display: flex;
			align-items: center;
			justify-content: center;
			z-index: 1000;
		}

		.full-image-container img {
			max-width: 80%;
			max-height: 80%;
			object-fit: contain;
		}

		.animate__animated {
			animation-duration: 0.5s;
			animation-fill-mode: both;
		}

		.animate__fadeIn {
			animation-name: fadeIn;
		}

		.animate__fadeOut {
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
	</style>


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

	<!-- Blog Start -->
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<!-- Blog list Start -->
				<div class="col-lg-8">
					<div class="row g-5">
						<?php foreach ($gallery as $cece) { ?>
						<div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
							<div class="blog-item bg-light rounded overflow-hidden">
								<div class="blog-img position-relative overflow-hidden">
									<img class="img-fluid preview-image"
										src="<?= base_url('assets/upload/galeri/'.$cece['foto']) ?>"
										data-original="<?= base_url('assets/upload/galeri/'.$cece['foto']) ?>">
								</div>
								<div class="p-4">
									<h4 class="mb-3"><?= $cece['judul'] ?></h4>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<!-- Blog list End -->

				<!-- Sidebar Start -->
				<div class="col-lg-4">

					<!-- Category Start -->
					<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="mb-0">Quick Link</h3>
						</div>
						<div class="link-animated d-flex flex-column justify-content-start">
							<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?= base_url() ?>"><i
									class="bi bi-arrow-right me-2"></i>Home</a>
							<?php foreach ($kategori as $ichiro) { ?>
							<div class="link-animated d-flex flex-column justify-content-start">
								<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2"
									href="<?= base_url('homie/kategori/'.$ichiro['id_kategori']) ?>"><i
										class="bi bi-arrow-right me-2"></i><?= $ichiro['nama_kategori'] ?></a>
							</div>
							<?php } ?>
						</div>
						<!-- Category End -->
						<!-- Recent Post Start -->
						<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="mb-0">Recent Post</h3>
							</div>
							<?php foreach ($recentPosts as $post) { ?>
							<div class="d-flex rounded overflow-hidden bg-light mb-3">
								<img class="img-fluid" src="<?= base_url('assets/upload/konten/'.$post['foto']) ?>"
									style="width: 100px; height: 100px; object-fit: cover;" alt="<?= $post['judul'] ?>">
								<a href="<?= base_url('homie/artikel/'.$post['slug']) ?>"
									class="h5 fw-semi-bold d-flex align-items-center px-3 mb-0"><?= $post['judul'] ?>
								</a>
							</div>
							<?php } ?>
						</div>
						<!-- Recent Post End -->
					</div>
					<!-- Sidebar End -->
				</div>
			</div>
		</div>
		<!-- Blog End -->


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
									<a class="text-light mb-2" href="<?= base_url('homie/artikel/'.$post['slug']) ?>"><i
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
