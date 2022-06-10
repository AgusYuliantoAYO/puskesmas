<html>

<head>
    <!-- my css -->
    <link rel="stylesheet" href="">
</head>

<body>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/navbar-fixed-top/">
    <link href="navbar-fixed-top.css" rel="stylesheet"> -->


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap = logo love -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap = logo love -->


    <!-- //my css// -->

    <!-- bootsrap js -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script> -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>



    <!-- ============  -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav> -->
    <!-- =============== -->

    <!-- Content Wrapper -->
    <div id="content-wrapper " class="d-flex flex-column">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 static-top  shadow">
            <div class="container">
                <div class="navbar-brand ">
                    <h5>Puskesmas </h5>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#info">Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#pelayanan">Pelayanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#skrining">Skrining</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#tim">Tim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#kontak">Kontak</a>
                            </li>

                            <li class="nav-item dropdown no-arrow ">
                                <a class="nav-item nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <button class="btn btn-outline-success text-success ">
                                        <!-- <h2> -->
                                        <font size="3" face="comic sans ms"><b>Login</b></font>
                                        <!-- </h2> -->
                                    </button>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#"></a>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <h1 class="h4 text-white  mb-4">====================</h1>
                                            <h1 class="h4 text-gray-700   mb-4">Login</h1>
                                        </div>

                                        <?= $this->session->flashdata('message'); ?>
                                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="username"
                                                    name="username" placeholder="Username"
                                                    value="<?= set_value('username'); ?>">
                                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                            <button type="submite" class="btn btn-success btn-user btn-block">
                                                Login
                                            </button>
                                            <hr>
                                        </form>
                            </li>
                    </div>
                </div>
                </ul>
            </div>
        </nav>
    </div>

</body>

</html>





<!-- End of Topbar -->