<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:21:38 GMT -->
<head>
   <!-- Basic Page Needs -->
   <meta charset="utf-8">
   <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
   <title>BrainStorm - Multi - purpose Training PSD Template</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- Bootstrap  -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/bootstrap.css" >

   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/style.css">

   <!-- Responsive -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/responsive.css">

   <!-- Animation Style -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/animate.css">

   <!-- Revolution Style -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/revolution-slider.css">

   <!-- Magnific Popup  -->
   <link rel="stylesheet" type="text/css" href="stylesheets/magnific-popup.css" >

   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

   <!-- Favicon and touch icons  -->
   <link href="icon/favicon.png" rel="shortcut icon">

   <!--[if lt IE 9]>
      <script src="javascript/html5shiv.js"></script>
      <script src="javascript/respond.min.js"></script>
   <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="pre-bounce1"></div>
            <div class="pre-bounce2"></div>
        </div>
    </div>
    <div id="top">
        <div class="pattern-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-7">
                      <?php foreach ($all_header as $v_member) { ?>
                    <ul class="contact-info inline">
                        <li class="phone"><a href="#"> <?php echo $v_member->number ?></a></li>
                        <li class="address"><a href="#"><?php echo $v_member->address?></a></li>
                    </ul>
                      <?php }?>
                </div>
                <div class="col-md-3 col-xs-5">
                    <div class="login-wrap">
                        <div class="top-login">
                            <a href="#" class="signin">Sign in</a> <span class="or">or</span>
                            <a href="#" class="register">Register</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

      <!-- Header -->
    <header id="header" class="header header-sticky">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div id="logo" class="logo">
                            <a href="<?php echo base_url();?>welcome/index.html" rel="home">
                                <img src="<?php echo base_url();?>images/logo.png" alt="brainstorm" />
                            </a>
                        </div><!-- /.logo -->
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <div class="btn-menu"></div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li><a class="active" href="<?php echo base_url();?>welcome/index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Information technology, IT</a>
                                            <ul class="sub-menu">
                                               <li><a href="#">Sub Item Example 1</a></li>
                                               <li><a href="#">Sub Item Example 2</a></li>
                                            </ul><!-- /.submenu -->
                                        </li>
                                        <li><a href="#">Medicine, pharmaceutics</a></li>
                                        <li><a href="#">Health, Safety Business</a></li>
                                        <li><a href="#">Psychology, NLP</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="<?php echo base_url();?>welcome/trainings.html">Trainings</a>
                                    <ul class="sub-menu">
                                        <li><a href="training.html">Training Details</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li class="mega"><a href="<?php echo base_url(); ?>welcome/coaches.html">Coaches</a>
                                    
                                    <div id="mega" class="right">
                                        <ul class="submenu">
                                            <li><a href="#">Information technology, IT</a></li>
                                            <li><a href="#">Medicine, pharmaceutics</a></li>
                                            <li><a href="#">Health, Safety Business</a></li>
                                            <li><a href="#">Psychology, NLP</a></li>
                                        </ul><!-- /.submenu -->
                                        <ul class="submenu">
                                            <li><a href="#">Bank, finance</a></li>
                                            <li><a href="#">Human Resource Management</a></li>
                                            <li><a href="#">Only for women</a></li>
                                        </ul><!-- /.submenu -->
                                    </div>
                                </li>
                                <li><a href="<?php echo base_url();?>welcome/news.html">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single.html">Blog single</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="<?php echo base_url();?>welcome/gallery.html">Gallery</a></li>
                                <li><a href="<?php echo base_url();?>welcome/contact.html">Contact</a></li>
                                <li><a href="<?php echo base_url();?>welcome/About.html">about</a></li>
                            
                             </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.col-md-10 -->
                    <div class="col-md-2">
                        <div class="start-training">
                            <a href="#">Start training</a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-wrap -->
    </header><!-- /.header -->

    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <div class="pattern-overlay"></div>
                    <img src="<?php echo base_url();?>images/slides/bg-slide-1.jpg" alt="slider-image" />

                    <div class="tp-caption sfl rt_white_s_text rt_bg rt_uppercase" data-x="15" data-y="65" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">brainstorm present</div>

                    <div class="tp-caption sfb rt_dark_b_text rt_uppercase" data-x="15" data-y="230" data-speed="2000" data-start="1500" data-easing="Power3.easeInOut">June 20</div>

                    <div class="tp-caption sfb rt_dark_h1 w700 rt_uppercase rt_font_bold" data-x="12" data-y="247" data-speed="2000" data-start="2000" data-easing="Power3.easeInOut">make money easily</div>

                    <div class="tp-caption sfb rt_dark_b_text rt_uppercase" data-x="15" data-y="310" data-speed="2000" data-start="2500" data-easing="Power3.easeInOut"><span>speaker</span> TOM SMITH</div>

                    <div class="tp-caption sfl rt_uppercase rt_white_m_text" data-x="15" data-y="365" data-speed="2000" data-start="3000" data-easing="Power3.easeInOut"><a href="#" class="roll-button">Sign up</a></div>

                    <div class="tp-caption sfr rt_uppercase" data-x="164" data-y="365" data-speed="1000" data-start="3000" data-easing="Power3.easeInOut"><a href="#" class="roll-button white-button">learn more</a></div>

                    <div class="tp-caption lfb" data-x="470" data-y="10" data-speed="2000" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/1.png" alt="image"></div>
                </li>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <div class="pattern-overlay"></div>
                    <img src="<?php echo base_url();?>images/slides/bg-slide-1.jpg" alt="slider-image" />

                    <div class="tp-caption lft rt_dark_b_text rt_uppercase text-center" data-x="center" data-y="160" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">brainstorm present</div>

                    <div class="tp-caption lft rt_dark_h1 w700 rt_uppercase rt_font_bold text-center" data-x="center" data-y="200" data-speed="2000" data-start="1000" data-easing="Power3.easeInOut">Best coaches and speakers</div>

                    <div class="tp-caption sfb rt_dark_b_text rt_uppercase text-center" data-x="center" data-y="265" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut">You want to improve, but do not know how?</div>

                    <div class="tp-caption sfb rt_uppercase rt_white_m_text text-center" data-x="center" data-y="315" data-speed="1000" data-start="3000" data-easing="Power3.easeInOut"><a href="#" class="roll-button">Sign up now</a></div>
                </li>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <div class="pattern-overlay"></div>
                    <img src="<?php echo base_url();?>images/slides/bg-slide-1.jpg" alt="slider-image" />

                    <div class="tp-caption sfb rt_dark_h1 w700 rt_uppercase rt_font_bold" data-x="555" data-y="50" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">Features</div>

                    <div class="tp-caption sfl" data-x="555" data-y="130" data-speed="2400" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/check.png" alt="image"></div>
                    <div class="tp-caption sfr rt_dark_s_text rt_uppercase" data-x="600" data-y="135" data-speed="2400" data-start="1500" data-easing="Power3.easeInOut">Best coaches and speakers</div>

                    <div class="tp-caption sfl" data-x="555" data-y="180" data-speed="2800" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/check.png" alt="image"></div>
                    <div class="tp-caption sfr rt_dark_s_text rt_uppercase" data-x="600" data-y="185" data-speed="2800" data-start="1500" data-easing="Power3.easeInOut">progressive training system</div>

                    <div class="tp-caption sfl" data-x="555" data-y="230" data-speed="3200" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/check.png" alt="image"></div>
                    <div class="tp-caption sfr rt_dark_s_text rt_uppercase" data-x="600" data-y="235" data-speed="3200" data-start="1500" data-easing="Power3.easeInOut">low prices</div>

                    <div class="tp-caption sfl" data-x="555" data-y="280" data-speed="3600" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/check.png" alt="image"></div>
                    <div class="tp-caption sfr rt_dark_s_text rt_uppercase" data-x="600" data-y="285" data-speed="3600" data-start="1500" data-easing="Power3.easeInOut">Thousands reviews yet</div>

                    <div class="tp-caption sfl" data-x="555" data-y="330" data-speed="4000" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/check.png" alt="image"></div>
                    <div class="tp-caption sfr rt_dark_s_text rt_uppercase" data-x="600" data-y="335" data-speed="4000" data-start="1500" data-easing="Power3.easeInOut">additional options</div>

                    <div class="tp-caption sfl rt_uppercase rt_white_m_text" data-x="555" data-y="390" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#" class="roll-button">View more</a></div>


                    <div class="tp-caption lfb" data-x="15" data-y="10" data-speed="2000" data-start="2000" data-easing="Power3.easeInOut"><img src="<?php echo base_url();?>images/slides/2.png" alt="image"></div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Popular post -->
    <section class="roll-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox">
                        <h2 class="maintitle">Popular trainings</h2>
                    </div><!-- /.roll-titlebox -->
                </div>
               <div class="col-md-4 col-sm-6 item gallery-item medicine psychology">
                        <div class="roll-popular-trainings">
                            <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                                <?php foreach ($first_trainings as $gallery_image) { ?>
                                <div class="feature-post">
                                    <img src="<?php echo $gallery_image->trainings_photo?>" alt="img">
                                    <div class="description">
                                        <div class="pattern-overlay-2"></div>
                                        <p class="speaker">Speaker: <span><?php echo $gallery_image->trainings_speaker?></span></p>
                                        <p class="option">Include options:</p>
                                        <p class="img-option">
                                            <img src="<?php echo base_url();?>images/icons/chat.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/flash.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/tea.png" alt="img">
                                        </p>
                                    </div>
                                </div><!-- /.feature-post -->
                                <div class="row">
                                    
                                    <div class="col-md-9 col-sm-9">
                                        <h2 class="title-post">
                                            <a href="training.html"><?php echo $gallery_image->trainings_title ?></a>
                                        </h2><!-- /.title-post -->
                                        <div class="meta-post">
                                            <span class="date"><?php echo $gallery_image->trainings_date ?></span> |
                                            <span class="clock"><?php echo $gallery_image->trainings_time ?></span>
                                        </div><!-- /.meta-post -->
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <p class="price-wrap">
                                            <span class="dolar">$</span><span class="price"><?php echo $gallery_image->trainings_price ?></span>
                                        </p>
                                    </div>
                                     
                                </div>
                                <?php }?>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item gallery-item forwomen business it">
                        <div class="roll-popular-trainings">
                            <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                                 <?php foreach ($second_trainings as $gallery_image) { ?>
                                <div class="feature-post">
                                    <img src="<?php echo $gallery_image->trainings_photo?>" alt="img">
                                    <div class="description">
                                        <div class="pattern-overlay-2"></div>
                                        <p class="speaker">Speaker: <span><?php echo $gallery_image->trainings_speaker?></span></p>
                                        <p class="option">Include options:</p>
                                        <p class="img-option">
                                            <img src="<?php echo base_url();?>images/icons/chat.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/flash.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/tea.png" alt="img">
                                        </p>
                                    </div>
                                </div><!-- /.feature-post -->
                                <div class="row">
                                    
                                    <div class="col-md-9 col-sm-9">
                                        <h2 class="title-post">
                                            <a href="training.html"><?php echo $gallery_image->trainings_title ?></a>
                                        </h2><!-- /.title-post -->
                                        <div class="meta-post">
                                            <span class="date"><?php echo $gallery_image->trainings_date ?></span> |
                                            <span class="clock"><?php echo $gallery_image->trainings_time ?></span>
                                        </div><!-- /.meta-post -->
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <p class="price-wrap">
                                            <span class="dolar">$</span><span class="price"><?php echo $gallery_image->trainings_price ?></span>
                                        </p>
                                    </div>
                                     
                                </div>
                                <?php }?>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item gallery-item finance forman">
                        <div class="roll-popular-trainings">
                            <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                                <?php foreach ($third_trainings as $gallery_image) { ?>
                                <div class="feature-post">
                                    <img src="<?php echo $gallery_image->trainings_photo?>" alt="img">
                                    <div class="description">
                                        <div class="pattern-overlay-2"></div>
                                        <p class="speaker">Speaker: <span><?php echo $gallery_image->trainings_speaker?></span></p>
                                        <p class="option">Include options:</p>
                                        <p class="img-option">
                                            <img src="<?php echo base_url();?>images/icons/chat.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/flash.png" alt="img">
                                            <img src="<?php echo base_url();?>images/icons/tea.png" alt="img">
                                        </p>
                                    </div>
                                </div><!-- /.feature-post -->
                                <div class="row">
                                    
                                    <div class="col-md-9 col-sm-9">
                                        <h2 class="title-post">
                                            <a href="training.html"><?php echo $gallery_image->trainings_title ?></a>
                                        </h2><!-- /.title-post -->
                                        <div class="meta-post">
                                            <span class="date"><?php echo $gallery_image->trainings_date ?></span> |
                                            <span class="clock"><?php echo $gallery_image->trainings_time ?></span>
                                        </div><!-- /.meta-post -->
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <p class="price-wrap">
                                            <span class="dolar">$</span><span class="price"><?php echo $gallery_image->trainings_price ?></span>
                                        </p>
                                    </div>
                                     
                                </div>
                                <?php }?>
                            </article>
                        </div>
                    </div>
            
                
            </div>
        </div>
    </section>

    <!-- Find trainings -->
    <section class="roll-row parallax find-training">
        <div class="pattern-overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-find-training">
                        <select name="theme" class="theme">
                            <option value="theme" selected="selected">Theme</option>
                            <option value="theme1">Theme 1</option>
                            <option value="theme2">Theme 2</option>
                            <option value="theme3">Theme 3</option>
                            <option value="theme4">Theme 4</option>
                        </select>
                        <select name="level" class="level">
                            <option value="level" selected="selected">Level</option>
                            <option value="level1">Level 1</option>
                            <option value="level2">Level 2</option>
                            <option value="level3">Level 3</option>
                            <option value="level4">Level 4</option>
                        </select>
                        <select name="coach" class="coach">
                            <option value="coach" selected="selected">Coach</option>
                            <option value="coach2">Coach 2</option>
                            <option value="coach3">Coach 3</option>
                            <option value="coach4">Coach 4</option>
                        </select>
                        <h2 class="title">Find Traning</h2>
                    </div>
                            <option value="coach1">Coach 1</option>
                </div>
            </div>
        </div>
    </section>

    <!-- Coaches -->
    <section class="roll-row">
        <div class="container">
            <div class="row">
                <div class="roll-coaches">
                    <div class="col-md-12">
                        <div class="roll-titlebox">
                            <h2 class="maintitle">our coaches</h2>
                        </div><!-- /.roll-titlebox -->
                    </div>
                        <div class="col-md-3 gallery-item medicine psychology">
                            <?php foreach ($first_coaches as $gallery_image) { ?>
                            <div class="item">
                                <div class="media">
                                    <a href="coach.html">
                                        <img src="<?php echo $gallery_image->photo?>" alt="image">
                                    </a>
                                </div>
                                <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                <div class="hover">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                     <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                      <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-md-3 gallery-item medicine business">
                            <?php foreach ($second_coaches as $gallery_image) { ?>
                            <div class="item">
                                <div class="media">
                                    <a href="coach.html">
                                        <img src="<?php echo $gallery_image->photo?>" alt="image">
                                    </a>
                                </div>
                                <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                <div class="hover">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                     <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                      <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-md-3 gallery-item it psychology">
                             <?php foreach ($third_coaches as $gallery_image) { ?>
                            <div class="item">
                                <div class="media">
                                    <a href="coach.html">
                                        <img src="<?php echo $gallery_image->photo?>" alt="image">
                                    </a>
                                </div>
                                <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                <div class="hover">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                     <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                      <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-md-3 gallery-item medicine forman">
                            <?php foreach ($fourth_coaches as $gallery_image) { ?>
                            <div class="item">
                                <div class="media">
                                    <a href="coach.html">
                                        <img src="<?php echo $gallery_image->photo?>" alt="image">
                                    </a>
                                </div>
                                <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                <div class="hover">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                     <p class="name"><span><?php echo $gallery_image->coaches_position?></span><?php echo $gallery_image->coaches_name?></p>
                                      <p class="pos"><?php echo $gallery_image->coaches_department?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="roll-row about parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="roll-skillbar">
                        <div class="roll-titlebox">
                            <h2 class="maintitle">Skills</h2>
                        </div>
                        <div class="wraper">
                            <div class="skills">
                                
                                <div class="title">business training</div>
                                <div class="skillbar" data-percent="84%" data-waypoint-active="yes">
                                    <div class="count-bar">
                                        <div class="count"></div>
                                        <div class="pattern-overlay-2"></div>
                                    </div>
                                </div>
                                
                                <div class="title">timemanagerment training</div>
                                <div class="skillbar" data-percent="92%" data-waypoint-active="yes">
                                    <div class="count-bar">
                                        <div class="count"></div>
                                        <div class="pattern-overlay-2"></div>
                                    </div>
                                </div>
                                
                                <div class="title">personal growth training</div>
                                <div class="skillbar" data-percent="65%" data-waypoint-active="yes">
                                    <div class="count-bar">
                                        <div class="count"></div>
                                        <div class="pattern-overlay-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="roll-about">
                        <div class="roll-titlebox">
                            <h2 class="maintitle">About Us</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adiiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="#" class="roll-button">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="roll-row testimonials-section">
        <div class="container">
            <div class="row">
                <div class="content-section">
                    <div class="col-md-12">
                        <div class="roll-titlebox">
                            <h2 class="maintitle">Reviews</h2>
                        </div><!-- /.roll-titlebox -->
                    </div><!-- /.span12 -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="roll-testimonials">
                            <div class="customer">
                                <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</blockquote>
                                <div class="avatar">
                                    <img src="<?php echo base_url();?>images/testimonial/1.jpg" alt="image">
                                </div>
                                <div class="name">M Daniels</div>
                            </div>
                            <div class="customer">
                                <blockquote>Aliquam auctor, elit id imperdiet sollicitudin, diam dui viverra lorem, in maximus eros mauris in lacus.Phasellus malesuada posuere urna, ut imperdiet quam.</blockquote>
                                <div class="avatar">
                                    <img src="images/testimonial/2.jpg" alt="image">
                                </div>
                                <div class="name">Sammy</div>
                            </div>
                            <div class="customer">
                                <blockquote>Aliquam auctor, elit id imperdiet sollicitudin, diam dui viverra lorem, in maximus eros mauris in lacus.Phasellus malesuada posuere urna, ut imperdiet quam.<br>Duis finibus mi ac velit posuere venenatis.</blockquote>
                                <div class="avatar">
                                    <img src="<?php echo base_url();?>images/testimonial/3.jpg" alt="image">
                                </div>
                                <div class="name">John Doe</div>
                            </div>
                        </div><!-- /.roll-testimonials -->
                    </div><!-- /.span12 -->
                </div><!-- /.content-section -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Gallery -->
    <section id="gallery" class="gallery-section popup-gallery">
        <div class="roll-gallery fullwidth">
            <div class="gallery-wrap" data-portfolio-effect="fadeInUp">
                
               <div class="item gallery-item">
                     <?php foreach ($frist_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                     <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                      <?php foreach ($second_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                     <?php foreach ($third_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                    <?php foreach ($fourth_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                     <?php foreach ($fifth_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                    <?php foreach ($sixth_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item gallery-item-w2">
                     <?php foreach ($seventh_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                     <?php foreach ($eight_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
                <div class="item gallery-item">
                    <?php foreach ($nine_main_portfolio as $gallery_image) { ?>
                    <div class="item-wrap">
                        <div class="pop-overlay">
                            <a href="<?php echo $gallery_image->main_portfolio_photo ?>" class="popup view" data-source="<?php echo $gallery_image->main_portfolio_photo ?>"><img src="<?php echo base_url();?>images/icons/camera.png" alt="image"></a>
                            <div class="gallery-pop">
                                <h3><a href="#"><?php echo $gallery_image->main_portfolio_title ?></a></h3>
                                <span class="like">24</span>
                            </div>
                        </div>
                        <div class="gallery-thumb">
                            <img src="<?php echo $gallery_image->main_portfolio_photo ?>" alt="image">
                        </div>
                    </div><!-- /.item-wrap -->
                      <?php }?>
                </div><!-- /.gallery-item -->
        </div><!-- /.roll-gallery -->
    </section>

    <!-- Blogs post -->
    <section class="roll-row blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox">
                        <h2 class="maintitle">News</h2>
                    </div><!-- /.roll-titlebox -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <article class="post" data-auto="true" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">15 held the annual meeting of coaches</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <span class="like">24</span>
                        </div><!-- /.meta-post -->

                        <div class="feature-post roll-slider" data-auto="false" data-effect="slide" data-direction="horizotal">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="<?php echo base_url();?>images/blog/5.jpg" alt="image">
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url();?>images/blog/6.jpg" alt="image">
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url();?>images/blog/7.jpg" alt="image">
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.feature-post -->

                        <div class="entry-post">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean cmodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- /.entry-post -->
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">Working space</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <span class="like">24</span>
                        </div><!-- /.meta-post -->

                        <div class="feature-post">
                            <img src="<?php echo base_url();?>images/blog/8.jpg" alt="image">
                        </div><!-- /.feature-post -->

                        <div class="entry-post">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean cmodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- /.entry-post -->
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- How to improve -->
    <section class="roll-how-improve">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>You want to improve, but do not know how?</h3>
                </div>
                <div class="col-md-4">
                    <a href="#" class="roll-button">Register and find out how</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="roll-map">
        <div class="container">
            <div class="row">
                <div class="contact-info-wrap col-md-6">
                    <?php foreach ($all_header as $v_member) { ?>
                    <h4 class="title">Contact Us</h4>
                    <ul class="contact-info">
                        <li class="address"><a href="#"><?php echo $v_member->address?></a></li>
                        <li class="phone"><a href="#"><?php echo $v_member->number?></a></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- /.col-md-6 -->
                    <?php }?>
                </div>
            </div>
        </div>
        <div id="map">
        </div><!-- /map -->
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row footernav">
                <div class="col-md-10">
                    <nav id="footernav">
                        <ul class="menu">
                            <li><a class="active" href="<?php echo base_url();?>welcome/index.html">Home</a>
                            <li><a href="<?php echo base_url();?>welcome/trainings.html">Trainings</a>
                            <li class="mega"><a href="<?php echo base_url(); ?>welcome/coaches.html">Coaches</a>
                            <li><a href="<?php echo base_url();?>welcome/news.html">News</a>
                            <li><a href="<?php echo base_url();?>welcome/gallery.html">Gallery</a></li>
                            <li><a href="<?php echo base_url();?>welcome/contact.html">Contact</a></li>
                            <li><a href="<?php echo base_url();?>welcome/About.html">about</a></li>
                         </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->
                </div><!-- /.col-md-10 -->
                <div class="col-md-2">
                    <div class="start-training">
                        <a href="#">Start training</a>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row bottom">
                <hr class="border-bottom">
                <div class="col-md-8 col-sm-8">
                    <p class="copyright">� 2015 Brainstorm � Multi-purpose training theme </p>
                </div><!-- /.col-md-10 -->
                <div class="col-md-4 col-sm-4">
                    <p class="design">Designed by torbara</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>
   
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/imagesloaded.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/slider.js"></script>
</body>

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:25:08 GMT -->
</html>