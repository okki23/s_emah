<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/matrix-media.css" />
<link href="<?php echo base_url('assets/'); ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome  </span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="javascript::void(0);"><i class="icon-user"></i> <?php echo "Your username :"; ?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Level : ";?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Full Name : ";?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your NRP : ";?></a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>


  </ul>
</div>

<!--start-top-serch-->
<div id="search">

</div>
<!--close-top-serch-->


<div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     <li class="submenu"> <a href="javascript::void(0);"><i class="icon icon-th-list"></i> <span>Master</span></a>
      <ul>
        <li><a href="<?php echo base_url('pegawai'); ?>">Pegawai</a></li>
        <li><a href="<?php echo base_url('user'); ?>">User</a></li>

      </ul>
    </li>

  </ul>
</div>


<div id="content">
  <div id="content-header">
     <div id="breadcrumb">   </div>

    <h1>List Idea Proposal</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <br>

             <a href="<?php echo base_url('idea_proposal/add');?>" class="btn btn-primary"> + Add </a>



        <br>
        <div class="widget-box">
        <!-- | No Register | NRP | Nama | Opsi -->
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">

              <h3 align='center'> LISTING DATA Idea Proposal Pegawai  </h3>
              <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.Register</th>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Tema IP</th>
                  <th>Tanggal IP</th>
                  <th>Opsi</th>
                </tr>
              </thead>
             </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Created by <a href="javascript::void(0);">Emah Sumiyati</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.uniform.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/select2.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/matrix.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/matrix.tables.js"></script>
</body>
</html>
