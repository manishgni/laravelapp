
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content="JoloSoft is leading fastest growing api provider of money transfer in India."/>
  <meta name="author" content=""/>
  <title>{{ config('APP.name','Admin Panel')}}</title>
  <!--favicon-->
  <link rel="icon" href="data/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="data/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="data/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="data/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="data/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="data/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="data/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="data/assets/css/app-style.css" rel="stylesheet"/>
   <!--Switchery-->
  <link href="data/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
   <!--Data Tables -->
  <link href="data/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="data/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  
</head><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="dashboard.php">
       <img src="data/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashboard</h5>
     </a>
   </div>
   <!-- <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="data/assets/images/user.png" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">RPY</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="dashboard_myprofile.php"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="dashboard_business.php"><i class="icon-info"></i>  My Business detail</a></li>
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div> -->
      
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN Admin</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-gear"></i> <span>Banner</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="indx.php"><i class="zmdi zmdi-long-arrow-right"></i> Create Banner</a></li>
		  <li><a href="dashboard_apiserverip.php"><i class="zmdi zmdi-long-arrow-right"></i>Banner List</a></li>
		</ul>
      </li>
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      
      
    </ul>
   
   </div>
   <!--End sidebar-wrapper--><!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->  