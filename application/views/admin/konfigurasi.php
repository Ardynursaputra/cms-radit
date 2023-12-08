<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div> 
<div class="main-panel">
<div class="content-wrapper">
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Konfigurasi</h5>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Judul Website</label>
					<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Profil</label>
					<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Facebook</label>
					<input type="text" class="form-control" name="facebook" required value="<?= $konfig->facebook; ?>"/>
				</div>
			</div>
            <div class="row">
				<div class="col mb-3">
					<label class="form-label">Instagram</label>
					<input type="text" class="form-control"  name="instagram" required value="<?= $konfig->instagram; ?>" />
				</div>
			</div>
            <div class="row">
				<div class="col mb-3">
					<label class="form-label">Email </label>
					<input type="email" class="form-control" name="email" required value="<?= $konfig->email; ?>" />
				</div>
			</div>
            <div class="row">
				<div class="col mb-3">
					<label class="form-label">Alamat </label>
					<input type="text" class="form-control" name="alamat" required value="<?= $konfig->alamat; ?>" />
				</div>
			</div>
            <div class="row">
				<div class="col mb-3">
					<label class="form-label">Whatsapp </label>
					<input type="text" class="form-control"  name="no_wa" required value="<?= $konfig->no_wa; ?>" />
				</div>
			</div>
			<div class="modal-footer">  
				<button type="submit" class="btn btn-primary btn-icon-text">
					<i class="mdi mdi-file-check btn-icon-prepend"></i>
					Submit
				</button>
</form>
</div>
</div>
