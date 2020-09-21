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
          	
          		</div>
                   <?php
error_reporting(0);


$title = "Locus Of Control Quiz";
$address = "quiz.php";
$randomizequestions ="no"; 

$a = array(
1 => array(
   0 => "I believe that phobias and anxieties are simple ‘thinking errors’ that the sufferer could resolve if they put their mind to it.",
   1 => "Agree ",
   2 => "Disagree ",
   6 => 2
),
2 => array(
   0 => "My life is strongly influenced by what other people think of me.",
   1 => "Agree",
   2 => "Disagree",
   6 => 1
),
3 => array(
   0 => "I always vote in elections.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
4 => array(
   0 => "I believe that if people want to do well at school or college, they will do; it doesn’t matter what school or college they go to.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
5 => array(
   0 => "I believe that there must be some sort of life after death – there has to be something in it.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
6 => array(
   0 => "When other people criticise me or put me ‘on the spot’, it makes me feel anxious.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
7 => array(
   0 => "I sometimes pray.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
8 => array(
   0 => "If I wanted to run a marathon or climb Everest, I could do.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
9 => array(
   0 => "It’s possible to get addicted to alcohol or cigarettes.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
10 => array(
   0 => "I believe that the spirits of people who have passed away are somehow still ‘around’.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
11 => array(
   0 => "I sometimes get negative or depressive thoughts and feelings that I find hard to stop.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
12 => array(
   0 => "I very rarely get angry.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
13 => array(
   0 => "I believe that all illnesses have psychological components to them, and consequently a person can improve or recover completely from their illness by managing their thoughts and emotions well.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
14 => array(
   0 => "14.	I sometimes say things like ‘fingers crossed’, ‘touch wood’ or ‘good luck’!",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
15 => array(
   0 => "I find it easy to maintain a healthy bodyweight.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
16 => array(
   0 => "I believe that I can prevent myself from having a heart attack by being proactive and living a healthy lifestyle.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
17 => array(
   0 => "I believe that you cannot make someone fall in love with you – if it is right it will happen.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
18 => array(
   0 => "Regardless of where I am and what I am doing, if I find myself getting stressed I can easily calm and relax myself.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
19 => array(
   0 => "I believe that reflexology and homeopathy are useful alternatives to modern medicine.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
20 => array(
   0 => "I believe that my childhood has little influence over my life now.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
21 => array(
   0 => "If I see my horoscope in a newspaper or magazine I will check out what it says – even though I might not necessarily believe it.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
22 => array(
   0 => "In my intimate relationships, I sometimes worry that my partner will want to find someone better/nicer/sexier than me, and leave.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
23 => array(
   0 => "I believe that the only way I’m ever going to be a multi-millionaire is if I win the lottery, or by a stroke of luck.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
24 => array(
   0 => "I believe that it is possible to get anyone to like me and be my friend.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
25 => array(
   0 => "The cold, dark winter months can make me feel down and depressed.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
26 => array(
   0 => "I seldom worry about getting cancer or dying.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
27 => array(
   0 => "A lot of my self-esteem comes from how much people like me, and how good I am at my job, my studies or as a parent.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
28 => array(
   0 => "I don’t believe in any sort of God or higher being.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
29 => array(
   0 => "There is no such thing as fate.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 2
),
30 => array(
   0 => "I have a lucky (or unlucky) number.",
   1 => "Agree",
   2 => "Disagree ",
   6 => 1
),
);

$max=30;

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
<CENTER>
<TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

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
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value=""
        }else{
                document.question.response.value=""
        }
}
// -->
</SCRIPT>

<BODY BGCOLOR=FFFFFF>

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
        
 <?php $locusscore = $percentaje / 100 * 30;      ?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Your percentage score out of 30 is: <?php print $percentaje ; ?> %

<p> If you Scored between 0 to 17% you have a low to moderate external Locus of Control </p>

<p> If you scored between 20% to 50%, you have a significant external Locus of Control </p>

<p> Anything above this and your belief systems have an extremely high Locus of control </p>



  <p>“Individuals who have an internal locus of control believe that a positive cause/effect relationship exists
    between their own behavior and the outcomes they experience. People having an external locus of control, 
    on the other hand, perceive a lack of a relationship between their activities and consequent outcomes. 
    In these individuals, outcomes may be perceived as controlled by sources external to oneself such as 
    powerful others or by chance factors such as fate or luck.”

     (Crisson and Keefe, 1988)</p>


  <p>Your locus of control is incredibly important in the formation and maintenance of limiting belief systems. 
  People with a strong external locus of control are those who tend to feel powerless; they find it very hard 
  to believe that they can make changes in their lives, and they find it hard to get perspective over their 
  problems or symptoms. </p>
  
  
  
  <p> By reading the book and performing the key actions outlined you can change your score over a period of time </p>
  
  <p> Your Score out of 30 is <?php echo $locusscore ?> 
  
  <form action="insertlocusofcontrolscore.php" method="post">

                                                        Insert your score out of 30 <input type="number" name="locusofcontrol" /><br><br>

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
              <a href="quiz.php" class="go-top">
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
