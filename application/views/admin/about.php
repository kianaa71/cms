<div class="container-fluid pt-4 px-4">
	<div id="dissapear">
		<?php echo $this->session->flashdata('alert', true); ?>
	</div>
	<!-- <div class="mt-3 mb-3"> -->
	<!-- Button trigger modal -->
	<!-- <button type="button" class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#exampleModal">
			Add Content
		</button> -->

	<!-- Modal -->
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<form action="<?= base_url('admin/about/save') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Content Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nama_aseli" required>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Content Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="header" required>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Information</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="informasi"></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Input Photo</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="foto_aseli" accept="image/png, image/jpeg"
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
		</div> -->
	<!-- </div> -->
	<div class="card h-100 p-4">
		<h4 class="mb-4">Own Profile</h4>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Header</th>
						<th scope="col">Name</th>
						<th scope="col">TTL</th>
						<th scope="col">Hobby</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($about as $mama) { ?>
					<tr>
						<td><?= $mama['header']; ?></td>
						<td><?= $mama['nama_aseli']; ?></td>
						<td><?= $mama['ttl']; ?></td>
						<td><?= $mama['hobby']; ?></td>
						<td>
							<div class="mb-3">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModal1<?= $mama['id_about']; ?>">
									<span class="fa fa-edit"></span>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal1<?= $mama['id_about']; ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<form action="<?= base_url('admin/about/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $mama['foto_aseli']; ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
												</div>
												<div class="modal-body">
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Name</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="nama_aseli"
																value="<?= $mama['nama_aseli']; ?>" required>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Header</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="header"
																value="<?= $mama['header']; ?>" required>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Day Born</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="ttl"
																value="<?= $mama['ttl']; ?>" required>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Hobby</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="hobby"
																value="<?= $mama['hobby']; ?>" required>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Info</label>
														<div class="col-sm-10">
															<textarea name="informasi"
																class="form-control"><?= $mama['informasi']; ?></textarea>
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label">Input Photo</label>
														<div class="col-sm-10">
															<input type="file" class="form-control" name="foto_aseli"
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
						</td>
					</tr>
					<!-- Display the image and info below the table -->
					<tr>
						<td colspan="4" class="text-center">
							<img src="<?= base_url('assets/upload/about/'.$mama['foto_aseli']) ?>"
								alt="<?= $mama['nama_aseli'] ?>" class="img-thumbnail">
							<p><?= $mama['informasi'] ?></p>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
