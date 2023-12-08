<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cms</title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/spica/') ?>css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets/spica/') ?>images/logosmk2.png" />
</head>

<body>
	<div class="container-scroller d-flex">
		<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<div class="col-lg-6 mb-5 mx-auto">
									<img src="<?= base_url('assets/spica/') ?>images/logosmk2.png" alt="logo">
								</div>
								<h4>Hello! Welcome To Cms</h4>
								<form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" placeholder="Username"
											name="username">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-lg"
											placeholder="Password" name="password">
									</div>
									<div class="mt-3">
										<button type="submit"
											class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">login</button>
									</div>
									<div id="ngilang">
										<?= $this->session->flashdata('alert') ?>
									</div>
									<div class="my-2 d-flex justify-content-between align-items-center">
										<div class="form-check">
											<label class="form-check-label text-muted">

											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- base:js -->
		<script src="<?= base_url('assets/spica/') ?>/vendors/js/vendor.bundle.base.js"></script>
		<!-- endinject -->
		<!-- inject:js -->
		<script src="<?= base_url('assets/spica/') ?>/js/off-canvas.js"></script>
		<script src="<?= base_url('assets/spica/') ?>/js/hoverable-collapse.js"></script>
		<script src="<?= base_url('assets/spica/') ?>/js/template.js"></script>
		<!-- endinject -->
</body>

</html>
