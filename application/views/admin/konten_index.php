<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-lg-4 col-md-6">
			<div class="mt-3 mb-4">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Tambah konten
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" class="modal-lg">
						<form action="<?= base_url('admin/konten/simpan') ?>" method="post"
							enctype='multipart/form-data'>
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Add Konten</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col mb-3">
											<label class="form-label">Judul</label>
											<input type="text" class="form-control" placeholder="Keterangan"
												name="judul" required />
										</div>
									</div>
									<div class="row">
										<div class="col mb-3">
											<label class="form-label">Kategori</label>
											<select name="id_kategori" class="form-control">
												<?php foreach ($kategori as $aa) { ?>
												<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?>
												</option>
												<?php  } ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col mb-3">
											<label class="form-label">Keterangan</label>
											<textarea name="keterangan" class="form-control"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col mb-3">
											<label class="form-label">Foto</label>
											<input type="file" name="foto" class="form-control"
												accept="image/png, image/jpeg">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary btn-icon-text">
											<i class="mdi mdi-file-check btn-icon-prepend"></i>
											Submit
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card ">
	<div class="card-body ">
		<h4 class="card-title"> Kategori Konten</h4>
		<p class="card-description">
		</p>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>Tanggal</th>
						<th>Kreator</th>
						<th>Foto</th>
						<th>Actions </th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($konten as $aa) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aa['judul'];?></td>
						<td><?= $aa['nama_kategori'];?></td>
						<td><?= $aa['tanggal'];?></td>
						<td><?= $aa['nama'];?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
								<span class="tf-icons bx bx-search"></span>Lihat Foto
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/konten/delete_data/' .$aa['foto']);?>"
								onClick="return confirm('seriously??')" class="btn btn-square btn-danger m-2">
								<i class="mdi mdi-cards"></i> </a>
							<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#konten<?= $no; ?>">
								<i class="mdi mdi-border-color"></i>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" class="modal-lg">
									<form action="<?= base_url('admin/konten/update') ?>" method="post"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'];?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'];?></h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Judul</label>
														<input type="text" class="form-control"
															value="<?= $aa['judul'];?>" name="judul" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Kategori</label>
														<select name="id_kategori" class="form-control">
															<?php foreach ($kategori as $uu) { ?>
															<option
																<?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";} ?>
																value="<?= $uu['id_kategori'] ?>">
																<?= $uu['nama_kategori'] ?></option>
															<?php  } ?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Keterangan</label>
														<textarea name="keterangan"
															class="form-control"><?= $aa['keterangan'];?></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Foto</label>
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpeg">
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

							</button>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
