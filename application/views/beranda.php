<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title><?= $judul; ?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?= base_url('assets/original/'); ?>img/core-img/logosmk2.png">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/original/'); ?>style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<!-- Breaking News Area -->
					<div class="col-12 col-sm-8">
						<div class="breaking-news-area">
							<div id="breakingNewsTicker" class="ticker">
								<ul>
									<li><a href="#">Hello Smk N 2!</a></li>
									<li><a href="#">Hello Warga Skandakra!</a></li>
									<li><a href="#">Hello Cms!</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Top Social Area -->
					<div class="col-12 col-sm-4">
						<div class="top-social-area">
							<a href="<?= $konfig->facebook; ?>" data-toggle="tooltip" data-placement="top"
								title="Facebook"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
							<a href="<?= $konfig->instagram; ?>" data-toggle="tooltip" data-placement="top"
								title="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
							<a href="<?= $konfig->alamat; ?>" data-toggle="tooltip" data-placement="top"
								title="Alamat"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></a>
							<a href="<?= $konfig->email; ?>" data-toggle="tooltip" data-placement="top" title="Email"><i
									class="fa-solid fa-at" aria-hidden="true"></i></a>
							<a href="<?= $konfig->no_wa; ?>" data-toggle="tooltip" data-placement="top"
								title="Whatsapp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo Area -->
		<div class="logo-area text-center">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<span class="text-primary">
							<img src="<?= base_url('assets') ?>/original/img/core-img/logosmk2.png">
						</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Nav Area -->
		<div class="original-nav-area" id="stickyNav">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between">

						<!-- Subscribe btn -->
						<div class="subscribe-btn">

						</div>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu" id="originalNav">
							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="<?= base_url() ?>">Home</a> </li>

									<li class="cn-dropdown-item has-down pr12"><a href="#">Content</a>
										<ul class="dropdown">
											<?php foreach ($kategori as $kate) { ?>
											<li><a
													href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
											</li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="<?= base_url('home/galery') ?>">Galery</a></li>
									<li><a href="<?= base_url('about') ?>">About</a></li>
									<li><a href="<?= base_url('saran') ?>">Saran</a></li>
									<li><a href="<?= base_url('auth') ?>">Login</a></li>
								</ul>

								<!-- Search Form  -->

							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Hero Area Start ##### -->
	<div class="hero-area">
		<!-- Hero Slides Area -->
		<div class="hero-slides owl-carousel">
			<!-- Single Slide -->
			<?php $no=1; foreach ($caraousel as $aa) { ?>
			<div class="single-hero-slide bg-img"
				style="background-image: url(<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="slide-content text-center">

								<h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Welcome! to
										Cms</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $no++; } ?>
			<!-- Single Slide -->
		</div>
	</div>

	<div class="blog-wrapper section-padding-100 clearfix">

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-9">

					<!-- Single Blog Area  -->
					<?php $no=1; foreach ($konten as $uu) { ?>
					<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s"
						data-wow-duration="1000ms">
						<div class="row align-items-center">
							<div class="col-12 col-md-6">
								<div class="single-blog-thumbnail">
									<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" alt="">
									<div class="post-">
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<!-- Blog Content -->
								<div class="single-blog-content">
									<div class="line"></div>
									<a href="#" class="post-tag"></a>
									<h4><a href="#" class="post-headline"><?= $uu['judul'] ?></a></h4>
									<p><?= $uu['nama_kategori'] ?></p>
									<div class="post-meta">
										<a href="<?=base_url('home/artikel/'.$uu['slug']) ?>"
											class="btn original-btn">Read
											More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<!-- Load More -->

				</div>

				<!-- ##### Sidebar Area ##### -->
				<div class="col-12 col-md-4 col-lg-3">
					<div class="post-sidebar-area">

						<!-- Widget Area -->


						<!-- Widget Area -->
						<div class="sidebar-widget-area">
							<h5 class="title">Latest Posts</h5>
							<?php $no=1; foreach ($konten as $ee) { ?>
							<div class="widget-content">

								<!-- Single Blog Post -->
								<div class="single-blog-post d-flex align-items-center widget-post">
									<!-- Post Thumbnail -->
									<div class="post-thumbnail">
										<img src="<?= base_url('assets/upload/konten/'. $ee['foto']) ?>" alt="">
									</div>
									<!-- Post Content -->
									<div class="post-content">
										<a href="#" class="post-tag"><?= $ee['nama_kategori'] ?></a>
										<h4><a href="<?=base_url('home/artikel/'.$ee['slug']) ?>"
												class="post-headline"><?= $ee['judul'] ?></a></h4>
										<div class="post-meta">
											<p><a href="#"></a></p>
										</div>
									</div>
								</div>
								<?php } ?>
								<!-- Single Blog Post -->

							</div>
						</div>

						<!-- Widget Area -->
						<div class="sidebar-widget-area">
							<h5 class="title">Categories</h5>
							<?php foreach ($kategori as $kate) { ?>
							<div class="widget-content">
								<ul class="tags">
									<li><a
											href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'];?></a>
									</li>
								</ul>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ##### Instagram Feed Area Start ##### -->
	<div class="instagram-feed-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="insta-title">
						<h5><?= $konfig->judul_website; ?></h5>
						<p><?= $konfig->profil_website; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Instagram Feed Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area text-center" >
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Footer Nav Area -->
					<div class="classy-nav-container breakpoint-off">
						<!-- Classy Menu -->
						<nav class="classy-navbar justify-content-center">
							<!-- Navbar Toggler -->
							<div class="classy-navbar-toggler">
								<span class="navbarToggler"><span></span><span></span><span></span></span>
							</div>
							<!-- Menu -->
							<div class="classy-menu">
								<!-- close btn -->
								<div class="classycloseIcon">
									<div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
									</div>
								</div>
								<!-- Nav End -->
							</div>
						</nav>
					</div>

					<!-- Footer Social Area -->
					<div class="footer-social-area mt-30">
						<a href="<?= $konfig->facebook; ?>" data-toggle="tooltip" data-placement="top"
							title="Facebook"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
						<a href="<?= $konfig->instagram; ?>" data-toggle="tooltip" data-placement="top"
							title="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
						<a href="<?= $konfig->alamat; ?>" data-toggle="tooltip" data-placement="top" title="Alamat"><i
								class="fa-solid fa-location-dot" aria-hidden="true"></i></a>
						<a href="<?= $konfig->email; ?>" data-toggle="tooltip" data-placement="top" title="Email"><i
								class="fa-solid fa-at" aria-hidden="true"></i></a>
						<a href="<?= $konfig->no_wa; ?>" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i
								class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<!-- Nav Start -->
			<div class="main-panel">
				<div class="classynav">
					<ul>
						<li><a href="<?= base_url()?>">Home</a></li>
						<?php foreach ($kategori as $kate) { ?></a></li>
						<li>
							<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
								<?= $kate['nama_kategori'] ?>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>

		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>
			document.write(new Date().getFullYear());

		</script> <?= $konfig->judul_website; ?> All rights reserved <i class="fa fa-heart-o"></i> by
		<a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

	</footer>
	<!-- ##### Footer Area End ##### -->

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="<?= base_url('assets/original/'); ?>js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?= base_url('assets/original/'); ?>js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?= base_url('assets/original/'); ?>js/bootstrap.min.js"></script>
	<!-- Plugins js -->
	<script src="<?= base_url('assets/original/'); ?>js/plugins.js"></script>
	<!-- Active js -->
	<script src="<?= base_url('assets/original/'); ?>js/active.js"></script>

</body>

</html>
