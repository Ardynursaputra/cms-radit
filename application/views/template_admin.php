<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?> </title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<script src="https://cdn.tiny.cloud/1/cl5k3nxq2o2w6havpdx5j1yl13ypkwkh6fivoupc6o7htj0g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
	<div class="container-scroller d-flex">
		<!-- partial:./partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">

				<li class="nav-item sidebar-category">
					<p>Components</p>
					<span></span>
				</li>
        <?php $menu = $this->uri->segment(2); ?>
				<li class="nav-item <?php if($menu=='home'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/home') ?>">
						<i class="mdi mdi-view-quilt menu-icon"></i>
						<span class="menu-title">Dashboard</span>
						<div class="badge badge-info badge-pill"></div>
					</a>
				</li>

				<li class="nav-item <?php if($menu=='caraousel'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/caraousel') ?>">
						<i class="mdi mdi-apple menu-icon"></i>
						<span class="menu-title">Caraousel</span>
					</a>
				</li>
				<li class="nav-item <?php if($menu=='kategori'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/kategori') ?>">
						<i class="mdi mdi-emoticon menu-icon"></i>
						<span class="menu-title">Kategori Konten</span>
					</a>
				</li>
				<li class="nav-item <?php if($menu=='konten'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/konten') ?>">
						<i class="mdi mdi-chart-areaspline menu-icon"></i>
						<span class="menu-title">Konten</span>
					</a>
				</li>

				<?php if($this->session->userdata('level')=='Admin') {?>

          <li class="nav-item <?php if($menu=='user'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/user') ?>">
						<i class="mdi mdi-account menu-icon"></i>
						<span class="menu-title">User</span>
					</a>
				</li>
				<li class="nav-item <?php if($menu=='konfigurasi'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>">
						<i class="mdi mdi-cast menu-icon"></i>
						<span class="menu-title">Konfigurasi</span>
					</a>
				</li>
				<li class="nav-item <?php if($menu=='konfigurasi'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/Galery') ?>">
						<i class="mdi mdi-animation menu-icon"></i>
						<span class="menu-title">Gallery</span>
					</a>
					
				</li>
				<li class="nav-item <?php if($menu=='saran'){ echo "active";} ?>">
					<a class="nav-link" href="<?= site_url('admin/saran') ?>">
						<i class="mdi mdi-briefcase menu-icon"></i>
						<span class="menu-title">Saran</span>
					</a>
					
				</li>
				<?php } ?>
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:./partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-menu"></span>
					</button>
					<div class="navbar-brand-wrapper">
						<a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>"><img src="" alt="" /></a>
					</div>
					<h4 class="font-weight-bold mb-0 d-none d-md-block mt-1"><?= $judul_halaman ?> </h4>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item dropdown mr-1">
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
								aria-labelledby="messageDropdown">

								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<img src="images/faces/face4.jpg" alt="image" class="profile-pic">
									</div>
									<div class="preview-item-content flex-grow">
										<h6 class="preview-subject ellipsis font-weight-normal"><?= $judul_halaman ?>
										</h6>
									</div>
								</a>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
						data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>

				<div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-profile dropdown">
							<div class="d-flex">
								<div class="flex-shrink-0 me-3">
									<div class="avatar avatar-online">
										<img src="" alt class="w-px-40 h-auto rounded-circle">
									</div>
								</div>
							</div>

							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
								<img src="<?= base_url('assets/spica/') ?>images/faces/face7.jpg" alt="profile" />
								<span class="nav-profile-name"><?= $this->session->userdata('nama') ?> </span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
								
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
									<i class="mdi mdi-logout text-primary"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>
				</div>
			</nav>
			<!-- partial -->
			<div class="container-xx1 flex grow-1 container-p-y">
				<?= $contents;  ?>
			</div>

			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- base:js -->
	<script src="<?= base_url('assets/spica/') ?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<script src="<?= base_url('assets/spica/') ?>vendors/chart.js/Chart.min.js"></script>
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="<?= base_url('assets/spica/') ?>js/off-canvas.js"></script>
	<script src="<?= base_url('assets/spica/') ?>js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/spica/') ?>js/template.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- Custom js for this page-->
	<script src="<?= base_url('assets/spica/') ?>js/dashboard.js"></script>
	<!-- End custom js for this page-->
	<script>
		$('#ngilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);

	</script>
	<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
</body>

</html>
