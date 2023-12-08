<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-lg-4 col-md-6">
			<div class="mt-3 mb-4">
				<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Kategori
		</button> -->

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Add User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<div class="row">
										<div class="col mb-3">
											<label class="form-label">Nama Kategori</label>
											<input type="text" class="form-control" placeholder="Nama"
												name="nama_kategori" required />
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary btn-icon-text">
											<i class="mdi mdi-file-check btn-icon-prepend"></i>
											Submit
										</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title"> Saran</h4>
		<p class="card-description">
		</p>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pengirim</th>
						<th>isi saran</th>
						<th>Actions </th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($saran as $aa) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['isi_saran'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/saran/delete_data/' .$aa['id_saran']);?>"
								onClick="return confirm('seriously??')" class="btn btn-square btn-danger m-2">
								<i class="mdi mdi-cards"></i> </a>
						</td>
					</tr>
					</tr>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
