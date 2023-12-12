<div class="container-fluid pt-4 px-4">
    <div id="dissapear">
        <?php echo $this->session->flashdata('alert', true); ?>
    </div>
    <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Configuration</h5>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Website Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Profile</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="profil_website" required><?= $konfig->profil_website; ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama Aseli</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?= $konfig->name; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">WhatsApp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Link WA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="link" value="<?= $konfig->link; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Linkedin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="linkedin" value="<?= $konfig->linkedin; ?>" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
</div>
