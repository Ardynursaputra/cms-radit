<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="content-wrapper">
	<div class="main-panel">
		<div class="card">
			<form action="<?= base_url('admin/Galery/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="card-body">
					<h4 class="card-title">File Input</h4>
					<p class="card-description">
					</p>
					<div class="col mb-3">
						<label class="form-label">Judul</label>
						<input type="text" class="form-control" placeholder="Judul Foto" name="judul" required />
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Pilih foto dengan ukuran 1:3</label>
							<input class="form-control" type="file" name="foto" accept="image/png, image/jpeg">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary btn-icon-text">
							<i class="mdi mdi-file-check btn-icon-prepend"></i>
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="content-wrapper">
			<div class="row">
				<?php foreach ($galery as $aa) { ?>
				<div class="col-lg-3 col-md-6 mt-3">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="<?= base_url('assets/upload/galery/'.$aa['foto']) ?>">
						<div class="card-body">
							<h5 class="card-title"><?= $aa['judul'];?></h5>
							<p class="card-text">Baca Selengkapnya</p>
							<input type="hidden" name="">
							<a href="<?php echo site_url('admin/Galery/delete_data/' .$aa['foto']);?>" onClick="return confirm('seriously??')" class="btn btn-square btn-danger m-2">
								<i class="mdi mdi-archive"></i> </a>
							</button>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
