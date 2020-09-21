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
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> The Stress-o-meter Explained</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                            
                            <img src="assets/img/stress.png" >  
                             
                          
                            
                            
                            
          		<p>The Stress-o-meter

Stress and the general pressures of life make your symptoms, worries, habits and anxieties worse. So basically, the less stressed (anxious, and not managing your thinking very well) you are, the happier, more positive, more powerful, more energetic, more healthy, more in control you are likely to be.

When you get in your car in the morning and start it up, the engine just ticks over, and the needle hovers just below the number one. This means that your engine is hardly doing any work at all. This is the desired ‘setting’ for your mental rev-counter, your Stress-o-meter, in the morning. You want to wake up and start your day and have your brain just ticking over. This way you will almost certainly have just had a good night’s sleep, and now be starting your day feeling calm, relaxed, anxiety and stress free, and in full control.


As you go through your day and experience the pressures of work, family life, kids, the school run etc., your needle will rise up and, hopefully, fall back down again. If you are managing your thinking well, your needle should never go anywhere near the red danger-zone (around 8, 9 or 10 on the Stress-o-meter). You will be thinking clearly, feeling calm, in control and great!

I will show you how to achieve this ‘low stress’ state later on in this book. For now though, let’s look at what happens if you are not managing your thinking very well.

As an example, let’s look at an insomniac:

The people least likely to have had a good night’s sleep, the people most likely to suffer from insomnia, are those people who have a strong obsessional (brooding and ruminating) thinking style. Almost always, when an insomniac consults for help with their sleeping, we find that they have a strong obsessional thinking style, and are stressed. They report that their work or life was becoming very stressful, possibly triggered off by some sort of work, or relationship- related setback. Even though they may be very tired when they go to bed at night, ‘their mind’ seemed to be working overtime, and they were plagued with thoughts and worries about their (perceived) stress, that wouldn’t leave them alone. They usually report only having a few hours sleep each night. When this person rises in the morning, their Stress-o-meter needle is already hovering perilously close to the red danger zone. It’s not going to be far into the day before this person starts to experience stress and anxiety-related symptoms.

Most people experience some type of symptom, for example: eating


disorders, migraines, insomnia, anxiety or depression, that seems to come and go throughout their lives. They may suffer with their symptom for weeks and months, and then it disappears for weeks or even years.

Why?

The vast majority of symptoms and problems that people want help in either

(a)totally resolving, or (b) minimising to make their life easier, are either created, or brought on by stress. The more stressed a person is, the worse the symptoms get.

The higher the numbers on your dial, the less relaxed and calm you are, and the greater your stress levels. Your dial can move in response to any situation depending on how you react. As we have already explored, having any of the unhelpful thinking styles mentioned in the previous chapter means that you often create a lot of stress and anxiety in response to a challenging situation.

Managing your thinking effectively so that your Stress-o-meter dial remains low is very important. As you become more stressed, your poorly managed thinking and symptoms mentioned previously increase in intensity and the more stressed you then become – i.e. as your anxiety levels increase you tend to feel more powerless, catastrophise more, obsess more, become more negative, more socially phobic, less confident and more hypervigilant. This in turn increases your stress levels even more.

It can, therefore, be very difficult to escape from a highly stressed state as all your unhelpful thinking styles that contribute towards creating such a state, become heightened further when you are stressed. Everyone has a stress level ‘threshold’ (around about 5-6 on the scale where your anxiety symptoms start to appear) after which point it becomes much more tricky to reduce your stress levels as your negativity/catastrophising/obsessing/paranoia/perfectionism/ hypervigilance/helplessness are increased to such an extent that any perspective on your problem is completely lost.</p>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Thrive Web App 2019
              <a href="stressometre.php" class="go-top">
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
