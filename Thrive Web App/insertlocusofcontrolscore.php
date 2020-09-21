<?php
include("php/functions.php");
include('connections/conn.php');
$userID = $_SESSION["userID"];


//echo "all good here";



$newlocusscore = mysqli_real_escape_string($conn, $_POST['locusofcontrol']);



$insertquery2 = $insertquery2 = "INSERT INTO locusofcontrol(locusscore, UserID) VALUES('$newlocusscore', '$userID')"
        . " ON DUPLICATE KEY UPDATE locusscore = '$newlocusscore' "; 

$result3 = mysqli_query($conn, $insertquery2) or die(mysqli_error($conn));

mysqli_close($conn);
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Thrive Web App</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <script src="assets/js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.php" class="logo"><b>Thrive Web App</b></a>
                <!--logo end-->

                <!-- settings end -->

                <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="php/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <!--Place php profile picture here -->
                        <p class="centered"><a href="account.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        
                        <h5 class="centered"><?php echo $_SESSION["userFirstName"]; ?></h5>

                        <li class="mt">
                            <a class="active" href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard Home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-desktop"></i>
                                <span>Thrive Content</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="diary.php">View your Online Diary</a></li>
                                <li><a  href="thrivebook.php">Read the Book</a></li>
                                <li><a  href="quiz.php">Take a Locus of Control Quiz</a></li>
                                <li><a  href="selfesteemquiz.php">Calculate your Self Esteem</a></li>
                                <li><a  href="socialanxietyquiz.php">Calculate your Social Anxiety levels</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="scores.php" >
                                <i class="fa fa-cogs"></i>
                                <span>Your Scores</span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>External Thrive Content</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="https://www.thriveprogramme.org/thrivers/">Testimonials</a></li>
                                <li><a  href="https://www.thriveprogramme.org/research/">Research</a></li>
                                <li><a  href="https://www.thriveprogramme.org/locate-a-licensed-thrive-programme-consultant/">Book a Thrive Consulation</a></li>
                                <li><a  href="https://shop.thriveprogramme.org/">Thrive Shop</a></li>


                            </ul>


                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
       
          	<div class="row mt">
          		<div class="col-lg-12">
                            

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2019 - Thrive Web App
                    <a href="selfesteemquiz.php" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <!--script for this page-->

        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>








