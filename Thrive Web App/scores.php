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

$thrivescore = $sscore + $sscore1 + $sscore2;

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
          
                        
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Your current scores"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: <?php echo $sscorenew?>, label: "Social Anxiety Score" },
			{ y: <?php echo $sscorenew1 ?>, label: "Self Esteem Score" },
			{ y: <?php echo $sscorenew2 ?>, label: "Locus of Control Score" },
			
		]
	}]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        
            
          		</div>
          	</div>
              
              
              <p> Your Thrive Factor

Your Thrive Factor, much like your IQ, is a measure of your potential. Your IQ, or intelligence quotient is, as you no doubt know, a measure of how intelligent you are. You could argue it’s a measure of how much brain-power you have, or how ‘bright’ you are. Having a high IQ (say, anything over about 120, average is

100)doesn’t mean you are going to be rich, happy, have lots of friends or win a Nobel prize, but it means you have a better chance of doing (some) of these things. It’s what you do with your IQ that matters. The same thing applies to your Thrive Factor…

Your Thrive Factor is a measure of your Thrive potential – it’s about how much power and control you have over your thoughts, beliefs, imagination and abilities. Your Thrive Factor is calculated by adding your locus of control, self- esteem, and social anxiety quiz scores (from the previous three chapters) together. Your locus of control score was out of 30, and the other two quizzes were both out of 20, so your maximum Thrive Factor is 70, and the minimum, the very best score to aim for, is 0.
Previous Results

Locus of Control Quiz

Self-esteem Quiz

Social Anxiety Quiz

Your current Thrive Factor is therefore:  <h5><?php echo $thrivescore ?></h5>

You will be re-assessing your Thrive Factor (re-quizzing yourself on all three of the primary limiting beliefs) at the end of this book/programme to see just how much more control you have over your thinking and belief systems. When you do, the difference between your two scores is evidence – real quantifiable and measureable evidence – of just how much more control you have over your life. </p>
              
              
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Thrive Web App 2019
              <a href="scores.php" class="go-top">
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

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
