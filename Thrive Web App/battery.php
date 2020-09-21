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
          	<h3><i class="fa fa-angle-right"></i> Keep your Battery Charged</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                            
                              <img src="assets/img/battery.jpg">  

                              
          		<p>Your self-esteem ‘battery’

Positive thoughts, experiences and feelings charge the battery. Negative thoughts, experiences and feelings deplete it.

It might be helpful to think of your self-esteem as being a little bit like a rechargeable battery. Most people have got some rechargeable batteries in their house somewhere, they’re really useful and when their power starts to fade, you can just put them on charge overnight and hey presto, they’re brand new, and fully charged again. Your self-esteem works in a very similar way. Positive, pleasant, rewarding, validating, ego-boosting thoughts or experiences fill your self-esteem battery with ‘positive charge’ and you feel good about yourself. If your battery is completely full, you feel mentally very robust and resilient; you can take a few knocks, experience a few setbacks, be disappointed by a partner, friend or work colleague and not be reduced to feeling like a shivering, worthless wreck!

At the same time, negative or limiting thoughts, criticisms, bad experiences, the lack of validation or the withdrawal of love or care, is going to ‘reduce the charge’ in your self-esteem battery.

So the reason why our self-esteem levels appear to fluctuate from day to day is because they do! A person who has lots of pleasant, validating experiences, who tends to be quite a positive person, has more of an internal locus of control and who tends to see the proverbial glass as ‘half full’, will, most likely create robust, high self-esteem. A person who tends to always see the glass as half empty, has an external locus of control, and who experiences many negative, limiting, critical, and self-deprecating thoughts, will tend to have low self- esteem.

Remember, these experiences don’t have to be external. They don’t have to be actual real experiences that you go through, they can just be your thoughts, or your ‘inner voice’. Some people are very self-critical, and unknowingly put themselves down hundreds of times every day.

In terms of your self-esteem, you are what you think! Remember that ‘self- esteem‘ is not real, it doesn’t exist outside of your head. Your self-esteem is what YOU currently think and feel about YOU. It’s not about the reality of how good you are, how nice you are, how loveable you are, how pretty or handsome you are, or how clever you are. Your self-esteem is just what YOU currently think or feel, about YOU.

Put to one side the results of the self-esteem quiz for just a moment, and ask yourself a question:


‘How high is my self-esteem at the moment?’
                        </p>
                        
                        <p>

It doesn’t matter what the answer was, I just wanted you to ask yourself the question. When you asked yourself the question, what went through your head? I’ll bet you actually asked yourself another question: ‘hmmn, how do I feel about myself today?’

How do I FEEL about myself TODAY? You probably didn’t think of your school days, you almost certainly didn’t think of your childhood, you wouldn’t have thought about that time when you were bullied, or the ex-partner who dumped you, or the stress at work, you just asked yourself ‘how do I FEEL about myself TODAY?’

How you ‘feel about yourself today’, is entirely related to what you have been thinking about yourself, and your life, today. Not last week, last month or last year. Not when you were seven, seventeen or twenty-seven, but today. If you woke up this morning and immediately thought in a positive, happy, loving, powerful and charitable way about yourself and your life, then you probably FELT very good about yourself this morning. In which case, your self-esteem is probably high today.

If, on the other hand, you noticed the weight you have recently put on; the bags under your tired eyes; the cellulite around your hips; the grey hair on your head or chest (men only, probably, hopefully?); your stressful day ahead and how hard you were going to find it; how much pain you were going to be in; how angry you were going to be; how phobic you were going to be, then don’t be surprised if your self-esteem is very low today. If you scored more than say five on the locus of control quiz, then you are quite external in your thinking. You are probably now validating your current low self-esteem by recalling something that happened in your past – you certainly won’t be thinking: ‘I am creating low self-esteem today by the way I am thinking, I’m going to change that right now!’

Try it this way – imagine, for one week, that you have some sort of mental tab or scoreboard that records the number of positive and negative thoughts that you have each day. Every time you have a positive, pleasant, rewarding, validating, ego-boosting thought this is noted on your tab. Equally, every time you have a negative, critical, powerless or limiting thought it is also recorded. The percentage of positive and negative thoughts on your tab reflects the charge of

your self-esteem battery. If you have 70% negative thoughts and 30% positive ones then your self-esteem battery is only 30% charged, and you only have 30% self-esteem. You can change this by just changing the positive/negative balance of your thoughts.</p>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Thrive Web App 2019
              <a href="battery.php" class="go-top">
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
