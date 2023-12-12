<div class="container-fluid pt-4 px-4">
	<div id="dissapear">
		<?php echo $this->session->flashdata('alert', true); ?>
	</div>
	<div class="mt-3 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#exampleModal">
			Add Content
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<form action="<?= base_url('admin/konten/save') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Content Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="judul" required>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Information</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="keterangan"></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Category</label>
								<div class="col-sm-10">
									<select name="id_kategori" class="form-control" required>
										<?php foreach($kategori as $human) { ?>
										<option value="<?= $human['id_kategori']; ?>">
											<td><?= $human['nama_kategori']; ?></td>
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Input Photo</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg"
										required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	<div class="card h-100 p-4">
		<h4 class="mb-4">Content Table</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Title</th>
						<th scope="col">Content Category</th>
						<th scope="col">Date</th>
						<th scope="col">Creator</th>
						<th scope="col">Photo</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($konten as $mama) { ?>
					<tr>
						<th scope="row"><?= $no ?></th>
						<td><?= $mama['judul']; ?></td>
						<td><?= $mama['nama_kategori']; ?></td>
						<td><?= $mama['tanggal']; ?></td>
						<td><?= $mama['username']; ?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$mama['foto']) ?>">
								<span class="mdi mdi-image-area-close"></span> See Photo
							</a>
						</td>
						<td>
							<div class="mb-3">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModal1<?= $mama['id_konten']; ?>">
									<span class="fa fa-edit"></span>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal1<?= $mama['id_konten']; ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<form action="<?= base_url('admin/konten/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $mama['foto']; ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Content</h5>
												</div>
												<div class="modal-body">
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Content Name</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="judul"
																value="<?= $mama['judul']; ?>" required>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Category</label>
														<div class="col-sm-10">
															<select name="id_kategori" class="form-control" required>
																<?php foreach($kategori as $maman) { ?>
																<option
																	<?php if($maman['id_kategori']==$mama['id_kategori']){echo"selected";} ?>
																	value="<?= $maman['id_kategori'] ?>">
																	<?= $maman['nama_kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Info</label>
														<div class="col-sm-10">
															<textarea name="keterangan"
																class="form-control"><?= $mama['keterangan']; ?></textarea>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Input Photo</label>
														<div class="col-sm-10">
															<input type="file" class="form-control" name="foto"
																accept="image/png, image/jpeg">
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save changes</button>
												</div>
										</form>
									</div>
								</div>
							</div>
							<a href="<?php echo base_url('admin/konten/delete/'.$mama['foto']); ?>"
								class="btn btn-dark m-2 "
								onclick="return confirm('Do You Want Delete This Content?')"><i
									class="fa fa-trash"></i></a>
						</td>
					</tr>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>