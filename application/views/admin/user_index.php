<div class="container-fluid pt-4 px-4">
                <div id="dissapear"> 
                    <?php echo $this->session->flashdata('alert', true); ?>
                </div>
        <div class="mt-3 mb-3">
          <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#exampleModal">
                Add User
           </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action="<?= base_url('admin/user/save') ?>" method="post">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    </div>
                    <div class="modal-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Your name" name="nama" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="ex:admin1" name="username" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="********" name="password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control">
                                            <option value="Admin">Admin</option>
                                            <option value="Kontributor">Contributor</option>
                                        </select>
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
                            <h4 class="mb-4">User Data</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach($user as $human) { ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $human['username']; ?></td>
                                            <td><?= $human['nama']; ?></td>
                                            <td><?= $human['level']; ?></td>
                                            <td>
                                            <a href = "<?php echo base_url('admin/user/edit_user/'.$human['id_user']);?>" class="btn btn-info m-2" >
                                            <i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('admin/user/delete_user/'.$human['username']); ?>" class="btn btn-dark m-2 "onclick="return confirm('Do You Want Delete This User?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>