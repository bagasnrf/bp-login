<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>


    <div class="row">
        <div class="col-lg-6">
            <!-- IF FAIL ADD MENU -->
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <!-- IF SUCCESS ADD MENU -->
            <div id="newmenu" class="flash-data" data-flashdata="<?= $this->session->flashdata('newmenu'); ?>"></div>

            <!-- IF SUCCESS EDIT MENU -->
            <div id="editM" class="flash-data" data-flashdata="<?= $this->session->flashdata('editM'); ?>"></div>

            <!-- IF SUCCESS DELETE MENU -->
            <div id="deleteM" class="flash-data" data-flashdata="<?= $this->session->flashdata('deleteM'); ?>"></div>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?> </th>
                            <td><?= $m['menu']; ?> </td>
                            <td>
                                <a href="" class="badge badge-info" data-toggle="modal" data-target="#editMenuModal<?= $m['id']; ?>">edit</a>
                                <a href="<?= base_url(); ?>menu/index/<?= $m['id']; ?>" class=" badge badge-danger" id="delete-button">delete</a>
                            </td>
                        </tr>
                        <!--MODAL  EDIT MENU-->
                        <div class="modal fade" id="editMenuModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editMenuModal">Edit Menu </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('menu'); ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="editMenu" name="editMenu" value="<?= $m['menu']; ?>">
                                                <!-- PAJAR -->
                                                <input type="hidden" name="type" value="edit" />
                                                <input type="hidden" name="editMenuId" value="<?= $m['id']; ?>" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!--MODAL  TAMBAH MENU-->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModal">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <input type="hidden" name="type" value="add" />
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>