<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-seccondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">



                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Account</h1>
                                </div>
                                <!-- ====================data -->
                                <div class="card shadow mb-4 ml-2">


                                    <!-- ==============akun  -->

                                    <div class="card-body">
                                        <div class="col-md-3" align="left">
                                            <a href="" class="btn btn-primary mb-3" data-toggle="modal"
                                                data-target="#newAccount">
                                                New Account</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Role</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <!-- ?php $i = 1; ?> -->
                                                        <?php foreach ($data_account as $da) : ?>
                                                    <tr>
                                                        <!-- test -->
                                                        <th><small><b><?= $da['username']; ?></b></small></th>
                                                        <th><small><b><?= $da['password']; ?></b></small></th>
                                                        <th><small><b><?= $da['name']; ?></b></small></th>
                                                        <th><small><b><?= $da['role']; ?></b></small></th>
                                                    </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ============== akun  -->


                                </div>
                                <a href="http://localhost:8080/test-lumut/admin" class="btn btn-secondary btn-lg"
                                    tabindex="-1" role="button" aria-disabled="true">Post</a>
                                <!-- =========================data -->
                            </div>
                        </div>




                    </div>
                </div>


            </div>

        </div>

    </div>

    <!-- ==============MODAL  -->


    <!-- Tambah  Account-->
    <div class="modal fade" id="newAccount" tabindex="-1" role="dialog" aria-labelledby="newAccountLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newAccountLabel">Creat Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <?= form_open_multipart('admin/dataAccount'); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="role">
                    </div>
                    <!-- ................. -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="tambah">Tambah</button>
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

</body>

</html>