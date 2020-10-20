<?php

session_start();
 
ob_start();

//if(!isset($_SESSION['credentials'])){
  //  header("location: ..");
//}
?>


<!doctype html>
<html lang="en">
 
<head>
<!-- my file ajex -->
   
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>BORN TO WIN | DASHBOARD</title>
    
     <!--TEXT EDITOR -->
    <script src="assets/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description'
        });
    </script>
    <!-- TEXT EDITOR END -->



    <style>
	.collapse:not(.show) {
		display:flex !important ;
	}
	.slimScrollBar{
		width:14px !important;
	}
	

	</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header" >
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
               <a class="navbar-brand" href="index.html"><h2><b>Born To WIN</b></h2></a>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            
                        </li>




                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-list">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                                                               </a>
                                            </div>
                                    </div>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list" style="background:rgb(36, 35, 34);">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                          
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" ><i class="fa fa-fw fa-user-circle" style="color:white;"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <a class="nav-link" href="main_page.php"><i class="fab fa-fw fa-wpforms" style="color:white;"></i>Main Page CMS</a>
                                <a class="nav-link" href="gallery.php"><i class="fab fa-fw fa-wpforms" style="color:white;"></i>Main Page Gallery</a>
                                <a class="nav-link" href="sponser.php"><i class="fab fa-fw fa-wpforms" style="color:white;"></i>Sponsers</a>
                                <a class="nav-link" href="articles.php"><i class="fab fa-fw fa-wpforms" style="color:white;"></i>Articles</a>
								<a class="nav-link" href="event_mng.php"><i class="fab fa-fw fa-wpforms" style="color:white;"></i>Events</a>
								
								<br><br>	
							</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
