<?php 
if($this->session->userdata('admin')!=true||$this->session->userdata('special')!=1){
     echo '<script>window.location="'.base_url('').'log'.'"</script>';
   }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/summernote/summernote-bs4.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>Assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
    <!-- Right navbar links -->
    <?php if($this->session->flashdata('login')) :?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $this->session->flashdata('login')?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php endif;?>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-plus-circle"></i>&nbsp;Years
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <form class="form-horizontal" action="<?php echo base_url()?>add_years" method="post" id="Formuser">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Year</label>
                        <select class="form-control" name="year" required="">
                            <option>2019-2020</option>
                            <option>2020-2021</option>
                            <option>2021-2022</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Start Date</label>
                        <input type="date" class="form-control" name="s_date" required="">
                    </div>
                  </div>
                    <div class="form-group row">
                     <div class="col-sm-12">
                        <label>End Date</label>
                        <input type="date" class="form-control" name="e_date" required="">
                    </div>
                  </div>
                    <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Status</label>
                        &nbsp;&nbsp;&nbsp;<input type="checkbox" name="status" value="1">
                    </div>
                  </div>
                  <div class="form-group row">  
                     <div class="col-sm-12">
                  <button style="float:right" type="submit" class="btn btn-info">Submit</button>
                </div>
                  </div>
                </div>
                
            </form>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="btn nav-link" href="<?php echo base_url()?>logout"><i class="fas fa-laptop"></i>&nbsp;logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>Dashboard" class="brand-link">
      <img src="<?php echo base_url()?>Assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            
            <h2 style="color:whitesmoke" id="time"></h2>
            <h5 style="color:whitesmoke" id="date"></h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              <a href="<?php echo base_url()?>Dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url()?>Branches" class="nav-link">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Branches
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url()?>User" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url()?>show_year" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Years
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url()?>student" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
              </p>
            </a>

          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url()?>particulars" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Fee Particulars
              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Welcome <?php echo $this->session->userdata('name')?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->