
<?php include("conn/db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BORN TO WIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
       
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    
    
    <?php  
    
    
    $path=explode("?",$_SERVER['REQUEST_URI']);
    $filename=basename($path[0]);   
    
    
    
    if($filename == 'all_events.php' || $filename == 'event.php' ||$filename == 'all_articles.php' ||$filename == 'article_detail.php'){  ?>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#222" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a href="index.php" > <img src="images/win.png" width="70px" height="60px" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    
                    
                    <li>
                        <a class="page-scroll" href="index.php #about-us">About</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.php #team">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #pricing">Articles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #latest-news">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #partner">Sponser</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?php } else{ ?>   
    
    <nav class="navbar navbar-default navbar-fixed-top"  >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" > <img src="images/win.png" width="70px" height="60px" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                   
                    <li>
                        <a class="page-scroll" href="index.php #about-us">About</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.php #team">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #pricing">Articles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #latest-news">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #partner">Sponser</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php } ?>