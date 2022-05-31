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

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Postingan</h1>
                                    </div>
                                    <!-- ====================data -->
                                    <div class="card shadow mb-4 ml-2">
                                        <div class="card-header py-3">

                                            <!--========== //Search ==============-->


                                            <!-- ............-->

                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Content</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Username</th>
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
                                                            <th><small><b><?= $dm['username']; ?></b></small></th>
                                                            <!-- <th>?= $dm['role_id'];?></th> -->

                                                        </tr>
                                                        <!-- ?php $i++; ?> -->
                                                        <?php endforeach; ?>

                                                    </tbody>


                                                </table>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- =========================data -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>