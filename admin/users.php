<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <style>
    body {
      overflow: hidden;
    }

    .content {
      
    }

    .table_header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: rgb(240, 240,240);
    }

    .table_header p {
      color: #000000;
    }

    button {
      outline: none;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      padding: 10px;
    }

    td button:nth-child(1) {
      background-color: #00ff00;
    }
    td button:nth-child(2) {
      background-color: #0298cf;
    }
    td button:nth-child(3) {
      background-color: #f80000;
    }

    .add_new {
      padding: 10px 20px;
      color: #ffffff;
      background-color: #0298cf;
    }

    input {
      padding: 10px 20px;
      margin: 0 10px;
      outline: none;
      border: 1px solid #0298cf;
      border-radius: 6px;
      color: #0298cf;
    }

    .table_section {
      height: 650px;
      overflow: auto;
    }

    table {
      width: 100%;
      table-layout: fixed;
      min-width: 1000px;
      border-collapse: collapse;
    }

    thead th {
      position: sticky;
      top: 0;
      background-color: #f6f9fc;
      color: #8493a5;
      font-size: 15px;
    }

    th, td {
      border-bottom: 1px solid #dddddd;
      padding: 10px 2px;
      word-break: break-all;
      text-align: center;
    }

    tr:hover td {
      color: #0298cf;
      cursor: pointer;
      background-color: #f6f9fc;
    }

    ::placeholder {
      color: #0298cf;
    }

    ::-webkit-scrollbar {
      height: 5px;
      width: 5px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Admin Dashboard
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="users.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="payments.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Payments</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Transactions</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>Settings</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li>
            <a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Welcome Admin,</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
        <div class="content">
            <div class="table_header">
                <p>User Details</p>
                <div>
                    <input type="text" placeholder="user">
                    <button class="add_new">+ Add New</button>
                </div>
            </div>
            <div class="table_section">
              <table>
                <thead>
                  <tr>
                    <th>S No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Balance</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Collins Muema</td>
                    <td>Collins77</td>
                    <td>colo@gmail.com</td>
                    <td>0791448827</td>
                    <td>male</td>
                    <td>0</td>
                    <td>
                    <button><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Collins Muema</td>
                    <td>Collins77</td>
                    <td>colo@gmail.com</td>
                    <td>0791448827</td>
                    <td>male</td>
                    <td>0</td>
                    <td>
                    <button><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Collins Muema</td>
                    <td>Collins77</td>
                    <td>colo@gmail.com</td>
                    <td>0791448827</td>
                    <td>male</td>
                    <td>0</td>
                    <td>
                    <button><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Collins Muema</td>
                    <td>Collins77</td>
                    <td>colo@gmail.com</td>
                    <td>0791448827</td>
                    <td>male</td>
                    <td>0</td>
                    <td>
                    <button><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Collins Muema</td>
                    <td>Collins77</td>
                    <td>colo@gmail.com</td>
                    <td>0791448827</td>
                    <td>male</td>
                    <td>0</td>
                    <td>
                      <button><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button><i class="fa fa-trash" aria-hidden="true"></i></button>   
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <!-- <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul> -->
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js"></script>
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
