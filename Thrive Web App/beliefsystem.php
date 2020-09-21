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
          	<h3><i class="fa fa-angle-right"></i> Belief Systems / Shit Tinted Glasses Explained</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                            
                            <img src="assets/img/Shittint1.png" >  
                             
                          
                            
                            
                            
          		<p>Let’s start with Belief Systems.

It is our ‘belief systems’ that drive the way we think, feel and behave. But what actually are ‘belief systems’? They are sets of personal viewpoints, which provide us with a fundamental base of principles and ‘rules’ by which we view or base EVERYTHING we think, do, say, or believe. They are created out of a need to organise and store life experiences in a way that makes sense to us. In other words, they help us to understand the world. We are constantly inundated with new information and to process this information more easily, we compare it to stuff we already know. This previously stored and grouped information is what creates our belief systems. All our different experiences are fitted together so that we can create an understandable representation of our world. We all have hundreds of different belief systems that have been built up from our many lifetime events.

There are two main types of belief system:

a.One that is formed out of repetition or ‘common sense’, and where the person who holds the belief does NOT have any strong NEED to believe it, other than the desire to make sense of their world. For example: gravity, the earth is a sphere, falling over creates pain, and that everybody dies someday.

b. One that is formed out of a NEED to either protect you emotionally or psychologically from some perceived threat or fear. For example: ‘I smoke because I am addicted to nicotine’, ‘life after death’, ‘I cannot get over this depression’, and ‘I believe in ghosts’.

The vast majority of belief systems that are stopping people from living the lives they really want are all type b) above, so these are the ones I am referring to throughout this book.
</p>
<p>
A good example of a belief system, and the one that I will use throughout this book, is that of ‘nicotine addiction’. We all know someone who smokes, we all know someone who used to smoke (and may well go back to it one day!) and we all know someone who doesn’t smoke. Now, I have the special process, which I mentioned earlier, that I take smokers through in order to get them to stop, and this process is a much shorter version of what I am teaching you in this book. In fact, it was stopping over 6000 smokers, most of them in just one hour (not the SAME hour though, obviously) that really gave me a lot of insight into belief systems. ‘The Rob Kelly Method’, as it has come to be called (see www.stopsmokingeasily.com), basically helps the smoker to identify their genuine belief system about smoking. I then guide them to challenge their beliefs, and they become a non-smoker. Now that’s clearly an over-simplified version, but that is basically what happens.

Let’s look at the processes by which a belief system is formed:

1.There is a need to see something in a certain way, so you adopt (buy into) a belief and you believe it to be true.

2.You then view life experiences through the rose-tinted (or maybe ‘shit- tinted’ depending on the positivity or negativity of the belief) spectacles of your belief system. You then anticipate events to happen in line with your belief system.

3.This means that you are far more likely to see events and experiences that confirm your belief system than ones that challenge or negate it (in psycho-babble, this is known as ‘confirmation bias’).

4.Your belief is ‘proven’ to be correct, it becomes reinforced, and grows stronger.

So, our smoker’s belief that he is addicted to nicotine… is this just a free- formed insignificant little belief that he has picked up along the way, like his belief that ‘you shouldn’t go outside if your hair is wet as you might catch a chill’?

No it isn’t.

This is a very firm and robust belief that he has and he would argue the validity of it, were you to give him the opportunity. This chap NEEDS his belief, because it makes him feel better about himself. Why?

Well, the media, and the various medical professions around the world make us believe, rightly or wrongly, that smoking is very bad for us, could kill us, could give us cancer, will shorten our lives, will clog our arteries, will make us smell, will cost us thousands and thousands of pounds (or, in the current climate, about fifty Euros!) over our lifetime, makes us ingest thousands of potent and dangerous chemicals. Therefore, smoking is a stupid habit.

If smoking is a stupid habit, then it is stupid to smoke. If it’s stupid to smoke, then anyone who smokes is stupid. Would you like to think of yourself, and have others think of you, as stupid? Well, don’t worry, if you did smoke it wouldn’t be your fault, it’s because you’re addicted, it’s not your fault, you can breathe a big sigh of relief. The belief that our smoker holds, that he is addicted to

smoking, spares him from having to think of himself as stupid, and his ego remains intact.

‘Why not let him keep his belief system?’ I hear you cry.

‘What harm is it causing you?’ you shout.

You’re correct. It’s not causing me any harm, but IT IS causing him a great deal. One of the most important factors in whether a person can achieve a goal, regardless of what that goal is, is how POWERFUL they feel in relation to achieving their goal, and how much CONTROL they feel they have over it. It’s like a double-edged sword:

Believing you are addicted to smoking is great, if you want to maintain your smoking habit with little effect on your self-esteem (I’m not stupid, I’m addicted) but trying to get over an addiction, is much, MUCH harder than simply ‘changing a little habit’. In my experience the single biggest reason why smokers find it so hard to quit (until they meet me, obviously) – and this is evidenced by the millions and millions of pounds (£118,000,000 in 2007-2008) that the NHS spends every year doling out nicotine dependency advice and drugs – is because they BELIEVE it is going to be really hard, because they BELIEVE they are addicted.

(Eiser et al., 1985)

<p>
The same double-edged sword can be applied to any limiting belief system – the system works hard to keep you in it, but fights you when you want to leave it.

It will be useful later, when changing limiting beliefs, for you to think of a belief system as an impenetrable brick wall, a defence mechanism protecting you from outside influences that would otherwise challenge your view of your experiences in life. In this analogy, each brick in the wall is a significant experience that has helped to form the belief system, and the strength of the cement holding the bricks together relates to how much NEED (more about this later) you have to maintain it.

Carrying on with my ‘nicotine addiction’ analogy… someone who has been smoking, say, 40 a day for 40 years may firmly believe that he is addicted to it. He may have a huge brick wall (a huge belief system about why he smokes)

where every brick is an experience when he really needed a cigarette, or felt terrible cravings when he couldn’t smoke, or tried to quit but couldn’t. There may be millions of bricks in this wall, because he has had millions of significant experiences related to wanting or needing a cigarette. These experiences, the bricks in the wall, are the ‘evidence’ for the belief system… these are the ‘facts’ that the smoker thinks of when needing to reaffirm his belief. Every time he thinks about smoking, wants to smoke, has ‘cravings’ etc., he is adding yet more bricks to his belief system wall.

The cement holding this huge structure together is his NEED to see his smoking habit as an ADDICTION. This NEED is what drove the creation of his belief system in the first place.

Now, some smokers are fairly well balanced, and not particularly socially phobic (feeling judged and scrutinised by others, more about this later), and therefore find it easier to integrate into their psyche the fact that they are a (fairly) sane person who just has a stupid habit that might kill them. They can cope with these two apparently opposing situations (they are sane, and yet they are possibly killing themselves) without suffering too much conflict. They probably don’t care too much if other people do think they are stupid to smoke. As a result they don’t need to (unconsciously) build up an elaborate belief system in order to protect themselves from people thinking they are ‘stupid, and have no willpower’.

Ex-smokers, who believed that smoking was just a habit, tend to stop smoking easily without any side effects or cravings. Those smokers who (need to) believe that smoking is an addiction tend to find it very difficult to stop, and

suffer ‘cravings’ and ‘withdrawal symptoms’.
</p>

Many of our basic belief systems are created during childhood as we learn about the world around us. All our experiences are processed and grouped together, creating belief systems about ourselves and other people. As we go through life, more and more experiences – bricks in the wall – are added into our belief systems, strengthening and reinforcing them.

An example of this occurring for a particular set of beliefs could be:

1.A young girl believes that there is a God.

2.She expects the world to be a certain way based on her belief: ‘God will help me’.

3.Her prayers to God will help her Granny to recover from pneumonia.

4.Granny recovers.

5.This experience is processed, interpreted and stored by the girl, fitting it in to her belief system.

6.Reinforcement occurs: ‘Praying helped me to communicate with God and he saved my Granny’.

A ‘limiting belief system’ is a set of personal beliefs that can have an incredibly negative or damaging effect on your life. In other words a limiting belief is ANY belief (or thought) that DOESN’T help you to achieve the life you really want. Limiting beliefs can cause you to suffer, for example: relationship problems, ill health, phobias, fears and anxieties, and even mental and physical illnesses.

Below is an example of a limiting belief system; this one is based on low self- esteem:

1.‘I’m not academic – I’m bound to do badly in my exams’.

2.I expect failure to happen.

3.I imagine feeling nervous and that the exam will be really hard.

4.The exam does go badly. Due to the expectation and built up anxiety, I ‘forget’ things I knew how to answer.

5.I process, interpret and store the experience, fitting it in to the belief system.

6.I believe ‘I was right to think I’d do badly, I’m not very bright’.

Not all belief systems are limiting for us. In fact, most are very useful and empowering for us. These days, most children brought up in the western world are taught that they have the right to be happy, the right to medical care, the right to social care, the right to be treated nicely – you get the picture.

One of the difficulties when challenging our belief systems is that we often don’t have very much perspective with which to view them, since we see everything through our ‘belief system-tinted spectacles’. A belief system is a firm, fixed, unshakeable brick wall of a belief. It isn’t usually something that can change significantly from day to day.       </p>
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
