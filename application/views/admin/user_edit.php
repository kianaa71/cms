<div class="container-fluid pt-4 px-4">
                <?php foreach($user as $edit){ ?>
            <div class="card h-100 p-4">
                            <h6 class="mb-4">Edit Data User</h6>
                            <form action="<?= base_url('admin/user/update') ?>" method="post">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="<?= $edit['username'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="<?= $edit['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control">
                                            <option value="Kontributor" <?php if($edit['level']=='Kontributor'){ echo "selected";} ?>>Kontributor</option>
                                            <option value="Admin"<?php if($edit['level']=='Admin'){ echo "selected";} ?>>Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="id_user" value="<?= $edit['id_user'] ?>">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
            </div>
            <?php } ?>