<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MurphysHost - Website Design</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
    integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom styles for this template-->
  <link href="../css/style.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-nav sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
          <img src="../img/logo.png" alt="Brand logo" />
        </div>
      </a>

      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="./index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="bi bi-box-fill mr-2"></i>
          <span>Order New Service</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="collapse-inner rounded">
            <a class="collapse-item" href="https://www.hosting.murphystechnology.com.au/" target="_blank"><i
                class="fas fa-tag"></i>Domain Registration</a>
            <a class="collapse-item" href="cards.html"><i class="bi bi-laptop-fill"></i>Digital Marketing and SEO</a>
            <a class="collapse-item" href="buttons.html"><i class="bi bi-laptop-fill"></i>Logo Design</a>
            <a class="collapse-item" href="cards.html"><i class="bi bi-laptop-fill"></i>App Development</a>
            <a class="collapse-item" href="website-design.php"><i class="bi bi-laptop-fill"></i>Website Design</a>
            <a class="collapse-item active" href="#"><i class="bi bi-laptop-fill"></i>Web Hosting</a>
            <a class="collapse-item" href="cards.html"><i class="bi bi-laptop-fill"></i>Shophify</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../improve-seo.php">
          <i class="fas fa-chart-line fa-fw"></i>
          <span>Improve SEO</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-file-invoice-dollar"></i>
          <span>Billing</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Refer A Friend</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact-us.php">
          <i class="far fa-fw fa-address-card"></i>
          <span>Contact Us</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-dollar-sign fa-fw"></i>
          <span>Discounts / Coupons</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Notification Center</h6>

                <a class="dropdown-item text-center medium text-gray-900" href="#">Show All Notification</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Cart Center</h6>
                <a class="dropdown-item text-center medium text-gray-900" href="#">No cart added</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-800 fw-600 small">Bipin Murphys
                </span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-info-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                  My Details
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <div class="container mb-4">
          <div class="mb-4 mt-5">
            <h1 class="h2 fw-700 mb-1 text-gray-900">Order New Service</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="../index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Web Hosting
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="container mb-4">
          <div class="service-wrapper px-4 py-3">
            <div class="service-content-left pl-4">
              <h2 class="fw-500">Web Hosting</h2>
              <p>
                If your current web host is not giving what you need, it might
                be time to migrate to a better one. Migrating your website to
                a new web host doesn’t have to be as tiring as moving to a new
                house. It can actually be fairly easy if you take the right
                steps.
              </p>
            </div>
            <div class="service-content-right pr-5">
              <img src="../img/web-hosting.png" alt="Services Images" />
            </div>
          </div>
        </div>
      </div>

      <!-- Purchase order section content -->
      <div class="container my-5">
        <h2 class="h2 text-center fw-700 mb-1 ">
          For You, We Have the Ideal <br />
          Web Hosting Package
        </h2>
        <p class="text-center text-uppercase fs-14 mb-5">
          Contact us for detail pricing overview.
        </p>
        <div class="row purchase-plan">
          <div class="col-md-4">
            <div class="purchase-plan-service">
              <div class="card shadow mb-4">
                <div class="card-body px-4 py-5">
                  <div class="purchase-price mb-2">
                    <span>$</span>
                    699
                  </div>
                  <h2 class="h3 mb-3">Value Plan</h2>
                  <div class="purchase-features">
                    <ul>
                      <li><i class="bi bi-check2-circle"></i> 5-7 Pages</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Unlimited revisions
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Static</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Responsive Layout
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>5 webmail account
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Basic S.E.O.</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Free website update
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>500MB web space
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Bandwidth 99.9%
                        uptime guaranteed
                      </li>
                      <li><i class="bi bi-check2-circle"></i>CPanel</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>24X7 Email support
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Free domain</li>
                    </ul>
                  </div>
                  <div class="purchase-order-btn">
                    <a href="#" class="btn btn-primary w-100">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="purchase-plan-service">
              <div class="card shadow mb-4">
                <div class="card-body px-4 py-5">
                  <div class="purchase-price mb-2">
                    <span>$</span>
                    899
                  </div>
                  <span class="badge badge-secondary">Most Popular</span>
                  <h2 class="h3 mb-3">Power Plan</h2>
                  <div class="purchase-features">
                    <ul>
                      <li>
                        <i class="bi bi-check2-circle"></i>15+ Dynamic Pages
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Unlimited revisions
                      </li>
                      <li><i class="bi bi-check2-circle"></i>CMS</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Responsive Layout
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>10 webmail account
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Basic S.E.O.</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Free website update
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>1GB web space
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Bandwidth 99.9%
                        uptime guaranteed
                      </li>
                      <li><i class="bi bi-check2-circle"></i>CPanel</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>24X7 Email support
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Free domain</li>
                    </ul>
                  </div>
                  <div class="purchase-order-btn">
                    <a href="#" class="btn btn-primary w-100">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="purchase-plan-service">
              <div class="card shadow mb-4">
                <div class="card-body px-4 py-5">
                  <div class="purchase-price mb-2">
                    <span>$</span>
                    1600
                  </div>
                  <h2 class="h3 mb-3">Ecommerce Plan</h2>
                  <div class="purchase-features">
                    <ul>
                      <li>
                        <i class="bi bi-check2-circle"></i>Unlimited Dynamic
                        Pages
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Unlimited revisions
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Ecommerce</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Responsive Layout
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>15 webmail account
                      </li>
                      <li><i class="bi bi-check2-circle"></i>Basic S.E.O.</li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Free website update
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>2GB web space
                      </li>
                      <li>
                        <i class="bi bi-check2-circle"></i>Bandwidth 99.9%
                        uptime guaranteed
                      </li>
                      <li><i class="bi bi-check2-circle"></i>CPanel</li>
                      <li><i class="bi bi-check2-circle"></i>24X7 support</li>
                      <li><i class="bi bi-check2-circle"></i>Free domain</li>
                    </ul>
                  </div>
                  <div class="purchase-order-btn">
                    <a href="#" class="btn btn-primary w-100">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>