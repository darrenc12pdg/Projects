<?php
include("php/functions.php");
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
                    
               <?php
error_reporting(0);



$title = "Self Esteem Quiz ";
$address = "selfesteemquiz.php";
$randomizequestions ="no"; 


$a = array(
1 => array(
   0 => "I sometimes feel as though I’m a bit of a failure.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
2 => array(
   0 => "I sometimes put myself down (in my head) for saying or doing ‘the wrong thing’, calling myself stupid or similar.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
3 => array(
   0 => "I tend to focus on the mistakes I have made rather than my successes in life.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
4 => array(
   0 => "I often hold back from trying new things.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
5 => array(
   0 => "I rarely praise myself.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
6 => array(
   0 => "I am never as capable as I feel I should be.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
7 => array(
   0 => "I sometimes find it difficult to accept compliments from other people.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
8 => array(
   0 => "I sometimes give up on a task if I encounter difficulties with it.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
9 => array(
   0 => "If someone challenges my views, I tend to assume that I am in the wrong.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
10 => array(
   0 => "I often agonise over decisions, worried about making the wrong one.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
11 => array(
   0 => "I find it difficult to be open and honest with my feelings.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
12 => array(
   0 => "I tend to be a perfectionist.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
13 => array(
   0 => "I hate the feeling of being criticised",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
14 => array(
   0 => "I often compare myself to others.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
15 => array(
   0 => "I often need the reassurance of work-colleagues to know that I am doing well.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
16 => array(
   0 => "I sometimes find it difficult to look people in the eye.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
17 => array(
   0 => "I avoid confrontation whenever I can.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
18 => array(
   0 => "I don’t believe that I am a particularly likeable or interesting person.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
19 => array(
   0 => "I find it really hard to ask someone out on a date.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
20 => array(
   0 => "I often get myself in situations where people bully me.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
      
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished

<?php 

$a = 100;

$b = ($a - $percentaje);

$socscore10 = ($percentaje / 100 * 20);
    

?>

<BR> Your Self Esteem levels represented as a percentage: <?php print $b ; ?> %

<p> Your Self Esteem score out of 20 is :  <?php print $socscore10 ?> <p>

<p>How many of the statements did you agree with?


This is your current level of self-esteem, expressed as a percentage.

We all have a perception of ourselves, some sort of sense of ‘self’, a belief about who we are and what makes us that way. This self-concept includes a view of our personality as well 
as other factors such as physical characteristics, sexuality, interests, goals and aims, values and standards etc. If you have high self-esteem you believe that you are a worthwhile and
competent person, and you like yourself. For those with low self-esteem the picture is somewhat different
</p>

<p> Please enter Your score out of 20 below <p>
<form action="insertselfesteemscore.php" method="post">

                                                        Insert your score <input type="number" name="selfesteemscore" /><br><br>

                                                        <input type="submit" />

                                                    </form>



<p><A HREF="<?php print $address; ?>">Reset</a>

<?php } ?>

</TD></TR>
</TABLE>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
               2018 - Thrive Web App
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

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
