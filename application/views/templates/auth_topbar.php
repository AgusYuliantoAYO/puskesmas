<link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/navbar-fixed-top/">
<link href="navbar-fixed-top.css" rel="stylesheet">

<!-- Content Wrapper -->
<div id="content-wrapper " class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content ">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top  shadow">
            <form>
                <!-- Sidebar - Brand -->

                <div class="col-md-5">
                    <h5>Lumut-Test </h5>

                </div>

                <div class="text-white">=========================================================================></div>
            </form>
            <!-- //Kategori -->
            <form>
                <div class="form-group mt-4 ml-3">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow ">


                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="btn btn-success d-lg-inline btn-md  mt-4 mb-2">
                            <!-- <div class="col-md-12"> -->
                            <h2>
                                <font size="3" face="comic sans ms"><b>Login</b></font>
                            </h2>
                            <!-- </div> -->
                        </span>
                    </a>

                    <!-- </nav> -->
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <!-- ........ -->
                            <!-- Outer Row -->


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
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submite" class="btn btn-success btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                </form>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->