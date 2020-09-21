<?php
include("php/functions.php");
?>



</body>

</html>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Thrive Dashboard</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

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
                            <a href="javascript:;" >
                                <i class="fa fa-cogs"></i>
                                <span>Thrive</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="calendar.html">Calendar</a></li>
                                <li><a  href="gallery.html">Gallery</a></li>
                                <li><a  href="https://www.thriveprogramme.org/thrivers/">Testimonials</a></li>
                            </ul>
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


                            $title = "Social Anxiety Quiz";
                            $address = "socialanxietyquiz.php";
                            $randomizequestions = "yes"; // set up as "no" to show questions without randomization

                            $a = array(
                                1 => array(
                                    0 => "I feel anxious and ‘on the spot’ around authority figures.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                2 => array(
                                    0 => "I sometimes blush or stutter when talking to people.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                3 => array(
                                    0 => "I would find it difficult to ask someone out on a date, face to face.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                4 => array(
                                    0 => "I will often avoid parties and social events.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                5 => array(
                                    0 => "I hate the feeling of being criticised, so I work really hard at being good, and getting things right.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                6 => array(
                                    0 => "I would find it difficult asking for a refund in a shop.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                7 => array(
                                    0 => "I avoid being the centre of attention.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                8 => array(
                                    0 => "Making a fool of myself or people laughing at me are among my worst fears.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                9 => array(
                                    0 => "I often feel panicky when I am around people.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                10 => array(
                                    0 => "I find giving a presentation or talking in front of an audience intimidating.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                11 => array(
                                    0 => "I dislike telephoning in front of others, or calling people I don’t know well.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                12 => array(
                                    0 => "I find participating in a small group difficult – especially if there is an authority figure present.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                13 => array(
                                    0 => "Working, writing or eating in front of people often makes me feel anxious.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                14 => array(
                                    0 => "I feel uncomfortable being naked in front of people, even my partner.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                15 => array(
                                    0 => "I dislike being watched whilst I’m working.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                16 => array(
                                    0 => "I sometimes feel like a ‘fraud’ and that people will see through me.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                17 => array(
                                    0 => "I dislike or avoid going to the toilet when others may be able to hear me.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                18 => array(
                                    0 => "I always get nervous before any sort of test.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                19 => array(
                                    0 => "I would just ‘die of embarrassment’ if I belched or farted in front of my work mates.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                                20 => array(
                                    0 => "I’m not the same as other people.",
                                    1 => "Agree",
                                    2 => "Disagree",
                                    6 => 1
                                ),
                            );

                            $max = 20;

                            $question = $_POST["question"];

                            if ($_POST["Randon"] == 0) {
                                if ($randomizequestions == "yes") {
                                    $randval = mt_rand(1, $max);
                                } else {
                                    $randval = 1;
                                }
                                $randval2 = $randval;
                            } else {
                                $randval = $_POST["Randon"];
                                $randval2 = $_POST["Randon"] + $question;
                                if ($randval2 > $max) {
                                    $randval2 = $randval2 - $max;
                                }
                            }

                            $ok = $_POST["ok"];

                            if ($question == 0) {
                                $question = 0;
                                $ok = 0;
                                $percentaje = 0;
                            } else {
                                $percentaje = Round(100 * $ok / $question);
                            }
                            ?>

                            <HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

                                    <SCRIPT LANGUAGE='JavaScript'>
                                    <!-- 
                                        function Goahead(number) {
                                            if (document.percentaje.response.value == 0) {
                                                if (number ==<?php print $a[$randval2][6]; ?>) {
                                                    document.percentaje.response.value = 1
                                                    document.percentaje.question.value++
                                                    document.percentaje.ok.value++
                                                } else {
                                                    document.percentaje.response.value = 1
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

<?php if ($question < $max) { ?>

                                            <TR><TD ALIGN=RIGHT>
                                                    <FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

                                                        <BR><input type=submit value="Next >>">
                                                        <input type=hidden name=response value=0>
                                                        <input type=hidden name=question value=<?php print $question; ?>>
                                                        <input type=hidden name=ok value=<?php print $ok; ?>>
                                                        <input type=hidden name=Randon value=<?php print $randval; ?>>
                                                        <br><?php print $question + 1; ?> / <?php print $max; ?>
                                                    </FORM>
                                                    <HR>
                                                </TD></TR>

                                            <TR><TD>
                                                    <FORM METHOD=POST NAME="question" ACTION="">
                                                                        <?php print "<b>" . $a[$randval2][0] . "</b>"; ?>

                                                        <BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead(1);"><?php print $a[$randval2][1]; ?>
                                                                        <BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead(2);"><?php print $a[$randval2][2]; ?>
                                                                        <?php if ($a[$randval2][3] != "") { ?>
                                                                            <BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead(3);"><?php print $a[$randval2][3];
                                                                } ?>
    <?php if ($a[$randval2][4] != "") { ?>
                                                                            <BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead(4);"><?php print $a[$randval2][4];
    } ?>
                                                    <?php if ($a[$randval2][5] != "") { ?>
                                                                            <BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead(5);"><?php print $a[$randval2][5];
                                                    } ?>



                                                    </FORM>

                                                    <?php
                                                } else {
                                                    ?>
                                            <TR><TD ALIGN=Center>
                                                    The Quiz has finished

                                                    <?php
                                                    $c = 100;

                                                    $d = ($c - $percentaje);
                                                    ?>

    <?php
    $socscore20 = ($percentaje / 100 * 20)
    ?>


                                                    <BR>This is your current social anxiety score : <?php print $d; ?> %

                                                    <p> Your Score out of 20/ <?php print $socscore20 ?>

                                                    <p> ‘Social anxiety’ (sometimes called ‘Social Phobia’) is essentially a fear of being judged by other people. It can manifest as a fear of talking to other people, fear of intimacy in relationships, blushing, stuttering, many sexual problems, difficulty in maintaining eye contact, ‘shy bladder’ (not being able to urinate in public toilets), fear of public speaking or just a constant worry about what other people think about you. Wherever you are, whatever you are doing, you are worrying about what the other people around you are thinking about you. Do they think I’m clever? Do they think I’m stupid? Do they think I’m a good lover? Do they think I have a silly sense of humour? Do I look ridiculous in this? Does my bum look big in this? Most people care, to a greater or lesser extent, what others think of them. With severe social anxiety, this can become a constant obsession.

                                                    </p>

                                                    <form action="insertsoanxietyscore.php" method="post">

                                                        Insert your score <input type="number" name="socanxscore" /><br><br>

                                                        <input type="submit" />

                                                    </form>





                                                    <p><A HREF="<?php print $address; ?>">Reset</a>

<?php } ?>

                                            </TD></TR>
                                    </TABLE>

                                </CENTER>
                                </BODY>




                        </div>


                    </div>

                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="blank.html#" class="go-top">
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

        <script          >
    //custom select box          

    $(function ()               {
        $('select.styled').customSelect()          ;
    });            

  </script>        

  </body    >
</html>
