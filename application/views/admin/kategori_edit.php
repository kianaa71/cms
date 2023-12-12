<div class="container-fluid pt-4 px-4">
                <?php foreach($kategori as $edit){ ?>
            <div class="card h-100 p-4">
                            <h6 class="mb-4">Update Category</h6>
                            <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Name Category</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_kategori" value="<?= $edit['nama_kategori'] ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id_kategori" value="<?= $edit['id_kategori'] ?>">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?= base_url('admin/kategori') ?>" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
            </div>
            <?php } ?>