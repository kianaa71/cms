<div class="container-fluid pt-4 px-4">
	<div id="dissapear">
		<?php echo $this->session->flashdata('alert', true); ?>
	</div>
	<div class="col-md-12 mb-3 mt-3">
		<div class="card"></br>
			<form action="<?= base_url('admin/gallery/save') ?>" method="post" enctype='multipart/form-data'>
				<h5 class="card-header ml-3">Add Images For Gallery</h5>
				<div class="card-body">
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Photo Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="judul" required>
						</div>
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Select a photo with size (1:3)</label>
						<input type="file" class="form-control" name="foto">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php $no=1; foreach($gallery as $alex) { ?>
	<div class="col-md-12 mb-3 mt-3">
		<div class="card h-100">
			<img class="card-img-top" src="<?= base_url('assets/upload/galeri/'.$alex['foto']) ?>">
			<div class="card-body">
				<h5 class="card-title"><?= $alex['judul']; ?></h5>
				<a href="<?php echo base_url('admin/gallery/delete/'.$alex['foto']); ?>" class="btn btn-dark m-2 "
					onclick="return confirm('Do You Want Delete This Photo?')"><i class="fa fa-trash"></i></a>
			</div>
		</div>
	</div>
	<?php } ?>
