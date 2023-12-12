<div class="container-fluid pt-4 px-4">
                <div id="dissapear"> 
                    <?php echo $this->session->flashdata('alert', true); ?>
                </div>
        <div class="mt-3 mb-3">
          <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#exampleModal">
                Add Category
           </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action="<?= base_url('admin/kategori/save') ?>" method="post">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    </div>
                    <div class="modal-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_kategori" required>
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
                            <h4 class="mb-4">Category Content</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name Category Content</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach($kategori as $human) { ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $human['nama_kategori']; ?></td>
                                            <td>
                                            <a href = "<?php echo base_url('admin/kategori/edit/'.$human['id_kategori']);?>" class="btn btn-info m-2" >
                                            <i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('admin/kategori/delete/'.$human['id_kategori']); ?>" class="btn btn-dark m-2 "onclick="return confirm('Do You Want Delete This Kategories?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>