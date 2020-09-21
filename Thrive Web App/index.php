<?php
include("php/functions.php");
$userId = $_SESSION['userID'];
include("connections/conn.php");
?>

<?php


// This PHP pulls the scores from the database so that they can be echoed via variablesinto the interactive Bar chart in the Main section

$sql = "SELECT socialanxietyscore FROM socanxscore WHERE UserID = '{$userId}'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$sscore = (int) $row['socialanxietyscore'];

$sscorenew = $sscore / 20 * 100;

$sql2 = "SELECT selestscore FROM selfesteemscore WHERE UserID = '{$userId}'";
$result2 = $conn->query($sql2);

$row2 = $result2->fetch_assoc();

$sscore1 = (int) $row2['selestscore'];

$sscorenew1 = $sscore1 / 20 * 100;

$sql3 = "SELECT locusscore FROM locusofcontrol WHERE UserID = '{$userId}'";
$result3 = $conn->query($sql3);

$row3 = $result3->fetch_assoc();

$sscore2 = (int) $row3['locusscore'];

$sscorenew2 = $sscore2 / 30 * 100;
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
                <section class="wrapper">

                    <div class="row">
                        <div class="col-lg-9 main-chart">

                            <div class="row mtbox">
                                <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                                    <div class="box1">

                                        <span class="li_pen"></span>

                                        <!––Add number of diary posts here create a number ––>
                                        <h3></h3>

                                    </div>
                                    <a href="diary.php"> <p>Click to View your Online Diary</p> </a>

                                </div>
                                <div class="col-md-2 col-sm-2 box0">
                                    <div class="box1">
                                        <span class="li_world"></span>
                                        <h3></h3>
                                    </div>

                                    <a href="socialanxietyquiz.php"> <p>Take the Social Anxiety test</p> </a>
                                </div>
                                <div class="col-md-2 col-sm-2 box0">
                                    <div class="box1">
                                        <span class="li_eye"></span>
                                        <h3></h3>
                                    </div>
                                    <a href="quiz.php"> <p>Take the Locus of control test</p> </a>
                                </div>
                                <div class="col-md-2 col-sm-2 box0">
                                    <div class="box1">
                                        <span class="li_bulb"></span>
                                        <h3></h3>
                                    </div>
                                    <a href="selfesteemquiz.php"> <p>Take the Self Esteem test</p> </a>
                                </div>
                                <div class="col-md-2 col-sm-2 box0">
                                    <div class="box1">
                                        <span class="li_news"></span>
                                        <h3></h3>
                                    </div>
                                    <a href="thrivebook.php"> <p>Read the E-book</p> </a>
                                </div>

                            </div><!-- /row mt -->	


                            <div class="row mt">
                                <!-- SERVER STATUS PANELS -->
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn donut-chart">
                                        <div class="white-header">
                                            <a href="stressometre.php"> <h5>Mind your Stress</h5> </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p><i class="fa fa-database"></i> 70%</p>
                                            </div>
                                        </div>
                                        <canvas id="serverstatus01" height="120" width="120"></canvas>
                                        <script>
                                            var doughnutData = [
                                                {
                                                    value: 70,
                                                    color: "#68dff0"
                                                },
                                                {
                                                    value: 30,
                                                    color: "#fdfdfd"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                    </div><! --/grey-panel -->
                                </div><!-- /col-md-4-->


                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <a href="beliefsystem.php"> <h5>Change Your View</h5> </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p><i class="fa fa-heart"></i> </p>
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="assets/img/shittint.png" style="width: 240px"style="height: 100%">
                                        </div>
                                    </div>
                                </div><!-- /col-md-4 -->

                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <a href="battery.php"> <h5>Keep your Battery Charged</h5> </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p><i class="fa fa-heart"></i> </p>
                                            </div>
                                            <div class="col-sm-6 col-xs-6"></div>
                                        </div>
                                        <div class="centered">
                                            <img src="assets/img/battery.jpg" style="width: 170px"style="height: 100px">





                                        </div>
                                    </div>

                                </div><!-- /row -->


                                <!--CUSTOM CHART START -->
                                <div class="border-head">
                                    <h3>Your Scores</h3>

                                </div>
                                <div class="custom-bar-chart">
                                    <ul class="y-axis">
                                        <li><span>100</span></li>
                                        <li><span>80</span></li>
                                        <li><span>60</span></li>
                                        <li><span>40</span></li>
                                        <li><span>20</span></li>
                                        <li><span>0</span></li>
                                    </ul>




                                    <div class="bar">
                                        <div class="title">Social Anxiety</div>
                                        <div class="value tooltips" data-original-title="<?php echo $sscorenew ?>%" data-toggle="tooltip" data-placement="top"><?php echo $sscorenew?>%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">Self-Esteem</div>
                                        <div class="value tooltips" data-original-title="<?php echo $sscorenew1 ?>%" data-toggle="tooltip" data-placement="top"><?php echo $sscorenew1?>%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">Locus of Control</div>
                                        <div class="value tooltips" data-original-title="<?php echo $sscorenew2 ?>%" data-toggle="tooltip" data-placement="top"><?php echo $sscorenew2?>%</div>
                                    </div>

                                </div>
                                <!--custom chart end-->
                            </div><!-- /row -->	

                        </div><!-- /col-lg-9 END SECTION MIDDLE -->


                        <!-- **********************************************************************************************************************************************************
                        RIGHT SIDEBAR CONTENT
                        *********************************************************************************************************************************************************** -->                  

                        <div class="col-lg-3 ds">
                            <!--COMPLETED ACTIONS DONUTS CHART-->
                            <a href="howto.php"> <h5>How to use Guide!</h5> </a>
                            <h3>Key Actions to Follow</h3>

                            <!-- First Action -->
                            <div class="desc">
                                <div class="thumb">
                                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="details">
                                    <p><muted>Action One</muted><br/>
                                    <a href="">Recognise your 'inner voice'!</a> Pay attention to the way you talk to yourself. Do you have positive supporting thoughts ?<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Second Action -->
                            <div class="desc">
                                <div class="thumb">
                                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="details">
                                    <p><muted>Action Two</muted><br/>
                                    <a href="">Use your imagination</a> Start training your imagination to rehearse siutations/experiences before they happen so that you experience them the way you wanted them to be.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Third Action -->
                            <div class="desc">
                                <div class="thumb">
                                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="details">
                                    <p><muted>Action Three</muted><br/>
                                    <a href="">Re-thinking your quiz answers!</a> Go back to your Locus of control quiz, put a mark next to each statement marked external, find five that you think would be the easiest to change.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Fourth Action -->
                            <div class="desc">
                                <div class="thumb">
                                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="details">
                                    <p><muted>Action Four</muted><br/>
                                    <a href="">Think more internally</a> Conciously start to think more internally, start to notice your inner voice, think 'I can do this, I've got the skills to get through this.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Fifth Action -->
                            <div class="desc">
                                <div class="thumb">
                                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="details">
                                    <p><muted>Action Five</muted><br/>
                                    <a href="">Challenge Yourself</a> Take up a new hobby/sport/pastime/career/relationship and process the whole experience internally.<br/>
                                    </p>
                                </div>
                            </div>


                            <!-- CALENDAR-->
                            <div id="calendar" class="mb">
                                <div class="panel green-panel no-margin">
                                    <div class="panel-body">
                                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                            <div class="arrow"></div>
                                            <h3 class="popover-title" style="disadding: none;"></h3>
                                            <div id="date-popover-content" class="popover-content"></div>
                                        </div>
                                        <div id="my-calendar"></div>
                                    </div>
                                </div>
                            </div><!-- / calendar -->

                        </div><!-- /col-lg-3 -->
                    </div><! --/row -->
                </section>
            </section>

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                     Thrive Web App 2019
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
                                                    title: 'Welcome <?php echo $_SESSION["userFirstName"]; ?>!',
                                                    // (string | mandatory) the text inside the notification
                                                    text: 'Need Help ? Please use the How to guide',
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
