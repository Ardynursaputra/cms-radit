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
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

   

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
						<span class="text-primary"><img
								src="<?= base_url('assets') ?>/original/img/core-img/logosmk2.png" ?></span>
						<!-- <a href="index.html" class="original-logo">
							<img src="<?= base_url('assets/original/'); ?>assets/original/img/core-img/cms-logo.jfif" alt=""></a> -->
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

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h5>Saran</h5>
                        <!-- Contact Form -->
                        <form action="<?= base_url('saran/simpan') ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="isi_saran" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-3">
                    <div class="post-sidebar-area">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
	<footer class="footer-area text-center">
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
							<a href="<?= $konfig->alamat; ?>" data-toggle="tooltip" data-placement="top"
								title="Alamat"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></a>
							<a href="<?= $konfig->email; ?>" data-toggle="tooltip" data-placement="top" title="Email"><i
									class="fa-solid fa-at" aria-hidden="true"></i></a>
							<a href="<?= $konfig->no_wa; ?>" data-toggle="tooltip" data-placement="top"
								title="Whatsapp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
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