<?php
include("php/functions.php");
include("../connections/conn.php");


$aboutusAdm = "SELECT * FROM tblUserAccount WHERE AccountType = '1'";
$edituser = mysqli_query($conn, $aboutusAdm) or die(mysqli_error($conn));
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
                <a href="index.php" class="logo"><b>Thrive Admin Panel</b></a>
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
                <section class="wrapper site-min-height">
                    <h3><i class="fa fa-angle-right"></i> Edit Users</h3>
                    <div class="row mt">
                        <div class="col-lg-12">
<?php
if ($edituser->num_rows > 0) {

    while ($row = $edituser->fetch_assoc()) {
        $id = $row["id"];
        $email = $row["Email"];
        $password = $row["Password"];
        $fname = $row["Firstname"];
        $sname = $row["Surname"];
        $add1 = $row["Add1"];
        $add2 = $row["Add2"];
        $city = $row["City"];
        $pcode = $row["Postcode"];
        $country = $row["Country"];
        $telnum = $row["TelNo"];
        echo '<div style="text-align:center">';
        echo "<form method='POST' action='UserEdited.php'>";
        echo "<input type ='hidden' name='userid' value='$id'>";
        echo "<p>Email: </p>";
        echo "<input type ='text' name='emailid' value='$email'>";
        echo "<p>Password: </p>";
        echo "<input type ='text' name='passid' value='$password'>";
        echo "<p>First Name: </p>";
        echo "<input type ='text' name='fid' value='$fname'>";
        echo "<p>Surname: </p>";
        echo "<input type ='text' name='sid' value='$sname'>";
        echo "<p>Address One:= </p>";
        echo "<input type ='text' name='add1id' value='$add1'>";
        echo "<p>Address Two:=</p>";
        echo "<input type ='text' name='add2id' value='$add2'>";
        echo "<p>City:= </p>";
        echo "<input type ='text' name='cityid' value='$city'>";
        echo "<p>Postcode:= </p>";
        echo "<input type ='text' name='pcodeid' value='$pcode'>";
        echo "<p>Country:= </p>";
        echo "<input type ='text' name='countryid' value='$country'>";
        echo "<p>Telephone Number:= </p>";
        echo "<input type ='text' name='telnumid' value='$telnum'>";
        echo "<input type='submit' value='submit'/>";
        echo "<br/></div>";
        echo "</form>";
    }
}
?>

                        </div>
                    </div>

                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2018 Thrive Web App
                    <a href="index.php" class="go-top">
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



