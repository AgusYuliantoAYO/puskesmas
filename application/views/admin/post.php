<!-- Custom fonts for this template-->
<link href="<?= base_url('assets') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Postingan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <h5 class="card-header">Postingan</h5>
                <div class="card-body">
                    <div class="col-md-3" align="left">
                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPost">
                            New Post</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Act</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <!-- ?php $i = 1; ?> -->
                                    <?php foreach ($data_post as $dm) : ?>
                                <tr>
                                    <!-- test -->
                                    <th><small><b><?= $dm['idpost']; ?></b></small></th>
                                    <th><small><b><?= $dm['title']; ?></b></small></th>
                                    <th><small><b><?= $dm['content']; ?></b></small></th>
                                    <th><small><b><?= $dm['date']; ?></b></small></th>

                                    <th>
                                        <a href="<?= base_url('admin/editPost/') . $dm['idpost']; ?>"
                                            class="badge badge-success">Edit</a>

                                        <a href="<?= base_url(); ?>admin/hapusPost/<?= $dm['idpost'] ?>"
                                            class="bi bi-trash-fill btn btn-sm btn-danger tombol-hapus">Delete</a>


                                    </th>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- ==============MODAL  -->
<!-- Tambah  Post-->
<div class="modal fade" id="newPost" tabindex="-1" role="dialog" aria-labelledby="newPostLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="newPostLabel">Create Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <?= form_open_multipart('post'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="content" name="content" placeholder="content">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="username" name="username"
                        value="<?= $user['username']; ?>">
                </div>
                <!-- ................. -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="tambahPost">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- =================================Modal -->


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>