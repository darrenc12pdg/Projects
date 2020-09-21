<?php
include("php/functions.php");
include("../connections/conn.php");

$banquery = "SELECT * FROM tblUserAccount WHERE AccountType = 1 AND banned='0'";

$result = mysqli_query($conn, $banquery) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Thrive Admin Panel</title>

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
                                <span>Admin tools</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="UserEdit.php"> Edit User data</a></li>
                                <li><a  href="userBan.php">Ban User</a></li>
                                <li><a  href="userBanned1.php">View Banned Users</a></li>
                                <li><a  href="UnBanUserAdmin.php">Un Ban UserAdmin</a></li>
                                <li><a  href="UserDelete.php">Delete User</a></li>

                            </ul>
                        </li>




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
                <section class="wrapper">

                    <div class="row">
                        <div class="col-lg-9 main-chart">


<?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $email = $row["Email"];
        $banned = $row["banned"];
        echo '<div style="text-align:center">';
        echo "<form method='POST' action='BanUserAdmin.php'>";
        echo "<input type ='hidden' name='userid' value='$id'>";
        echo "<p>ID: $id </p>";
        echo "<p>Email: $email </p>";
        echo "<p>Current: $banned </p>";
        echo "<input type='submit' value='submit'/>";
        echo "<br/></div>";
        echo "</form>";
    }
}
?>



                            </section>
                            </section>

                            <!--main content end-->
                            <!--footer start-->
                            <footer class="site-footer">
                                <div class="text-center">
                                    2018 - Thrive Web App
                                    <a href="index.php" class="go-top">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                            </footer>
                            <!--footer end-->
                            </section>

                            <!-- js placed at the end of the document so the pages load faster -->
                            <script src="assets/js/jquery.js"></script>
                            <script src="assets/js/jquery-1.8.3.min.js"></script>
                            <script src="assets/js/bootstrap.min.js"></script>
                            <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
                            <script src="assets/js/jquery.scrollTo.min.js"></script>
                            <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
                            <script src="assets/js/jquery.sparkline.js"></script>


                            <!--common script for all pages-->
                            <script src="assets/js/common-scripts.js"></script>

                            <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
                            <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

                            <!--script for this page-->
                            <script src="assets/js/sparkline-chart.js"></script>    
                            <script src="assets/js/zabuto_calendar.js"></script>	

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    var unique_id = $.gritter.add({
                                        // (string | mandatory) the heading of the notification
                                        title: 'Welcome to Thrive!',
                                        // (string | mandatory) the text inside the notification
                                        text: 'This Dashboard is an interactive version of the exercises implemented in the book ',
                                        // (string | optional) the image to display on the left
                                        image: 'assets/img/ui-sam.jpg',
                                        // (bool | optional) if you want it to fade out on its own or just sit there
                                        sticky: true,
                                        // (int | optional) the time you want it to be alive for before fading out
                                        time: '',
                                        // (string | optional) the class name you want to apply to that specific message
                                        class_name: 'my-sticky-class'
                                    });

                                    return false;
                                });
                            </script>

                            <script type="application/javascript">
                                $(document).ready(function () {
                                $("#date-popover").popover({html: true, trigger: "manual"});
                                $("#date-popover").hide();
                                $("#date-popover").click(function (e) {
                                $(this).hide();
                                });

                                $("#my-calendar").zabuto_calendar({
                                action: function () {
                                return myDateFunction(this.id, false);
                                },
                                action_nav: function () {
                                return myNavFunction(this.id);
                                },
                                ajax: {
                                url: "show_data.php?action=1",
                                modal: true
                                },
                                legend: [
                                {type: "text", label: "Special event", badge: "00"},
                                {type: "block", label: "Regular event", }
                                ]
                                });
                                });


                                function myNavFunction(id) {
                                $("#date-popover").hide();
                                var nav = $("#" + id).data("navigation");
                                var to = $("#" + id).data("to");
                                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                                }
                            </script>


                            </body>
                            </html>











