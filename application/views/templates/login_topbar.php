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

            <h5><?= $user['username']; ?></h5>

            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow ">
                    <h2>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
                            data-target="#logoutModal">
                            <button class="btn btn-danger">Logout</button>
                        </a>
                    </h2>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->