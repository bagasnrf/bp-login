<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>


    <div class="row">
        <div class="col-lg">
            <!-- IF FAIL ADD MENU -->
            <?= form_error('title', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('url', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('icon', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <!-- IF SUCCESS ADD MENU -->
            <div id="newSubMenu" class="flash-data" data-flashdata="<?= $this->session->flashdata('newSubMenu'); ?>"></div>

            <!-- IF SUCCESS EDIT MENU -->
            <div id="editM" class="flash-data" data-flashdata="<?= $this->session->flashdata('editM'); ?>"></div>

            <!-- IF SUCCESS DELETE MENU -->
            <div id="deleteM" class="flash-data" data-flashdata="<?= $this->session->flashdata('deleteM'); ?>"></div>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?> </th>
                            <td><?= $sm['title']; ?> </td>
                            <td><?= $sm['menu']; ?> </td>
                            <td><?= $sm['url']; ?> </td>
                            <td><?= $sm['icon']; ?> </td>
                            <td><?= $sm['is_active']; ?> </td>
                            <td>
                                <a href="" class="badge badge-info" data-toggle="modal" data-target="#editMenuModal<?= $sm['id']; ?>">edit</a>
                                <a href="<?= base_url(); ?>menu/submenu/<?= $sm['id']; ?>" class=" badge badge-danger" id="delete-button">delete</a>
                            </td>
                        </tr>
                        <!--MODAL  EDIT MENU-->
                        <div class="modal fade" id="editMenuModal<?= $sm['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="hidden" name="editMenuId" value="<?= $sm['id']; ?>" />
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModal">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <input type="hidden" name="type" value="add" />
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu title">
                    </div>
                    <div class="form-group">
                        <select name="menu" id="menu" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active
                            </label>
                        </div>
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