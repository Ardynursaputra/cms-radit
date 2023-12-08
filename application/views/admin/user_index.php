<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="main-panel">
<div class="content-wrapper">
<div class="col-lg-4 col-md-6">
	<div class="mt-3 mb-4">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah User
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
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
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
		<h4 class="card-title"> Data Pengguna</h4>
		<p class="card-description">

		</p>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Actions </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user as $aa) { ?>
					<tr>
						<td> </td>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/user/delete_data/' .$aa['id_user']);?>"
								onClick="return confirm('seriously??')" class="btn btn-square btn-danger m-2">
								<i class="mdi mdi-cards"></i> </a>
							<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#edit<?= $aa['id_user'] ?>">
								<i class="mdi mdi-border-color"></i>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Update User</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control" placeholder="Nama"
															value="<?= $aa['nama'] ?>" name="nama" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control" placeholder="Username"
															value="<?= $aa['username'] ?>" name="username" readonly />
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
	</td>
	</tr>
	</tr>
	</tr>
	<?php } ?>
	</tbody>
	</table>
</div>
</div>
</div>
