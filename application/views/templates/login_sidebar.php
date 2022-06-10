  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">PUSKESMAS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
              </div>
              <div class="info">
                  <a href="#" class="d-block">
                      <h5><?= $user['username']; ?></h5>
                  </a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="admin" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="post" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Postingan
                          </p>
                      </a>
                  </li>

                  <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                      <a href="admin/pages/calendar.html" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-envelope"></i>
                          <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/mailbox/mailbox.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inbox</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/mailbox/compose.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Compose</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/mailbox/read-mail.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Read</p>
                              </a>
                          </li>
                      </ul>
                  </li>



              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>