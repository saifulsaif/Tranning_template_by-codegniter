<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/aboutus.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:29:16 GMT -->
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

   <!-- Magnific Popup  -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheets/magnific-popup.css" >

   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

   <!-- Favicon and touch icons  -->
   <link href="<?php echo base_url();?>icon/favicon.png" rel="shortcut icon">

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
    <!-- Page Title -->
    <section class="page-title-container">
        <div class="pattern-overlay"></div>
        <div class="container page-title">
            <div class="page-title-wrapper">
                <div class="col-md-6 col-sm-6 breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="last"><a href="#">About us</a></li>
                    </ul>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- /.col-md-6 -->
            </div>
        </div><!-- /.container -->
    </section>

    <!-- About Us-->
    <section class="roll-row about-singlepage">
        <div class="container">
            <div class="row">
                <?php foreach($all_about as $about){?>
                <div class="col-md-5 col-sm-5">
                    <h1 class="title">About us</h1>
                    
                    <?php echo $about->about_details?>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="feature">
                        <h3 class="title">Features</h3>
                        <ul>
                            <li> <?php echo $about->feature1?></li>
                           <li> <?php echo $about->feature2?></li>
                           <li> <?php echo $about->feature3?></li>
                           <li>  <?php echo $about->feature4?></li>
                            <li> <?php echo $about->feature5?></li>
                           <li>  <?php echo $about->feature6?></li>
                           <li>  <?php echo $about->feature7?></li>
                        </ul>
                    </div>
                    <div class="speaker">
                        <img src="<?php echo $about->photo?>" alt="image">
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="roll-row achievements parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox">
                        <h2 class="maintitle">Our achievements</h2>
                    </div><!-- /.roll-titlebox -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <p class="timer" data-from="0" data-to="100" data-speed="4000"></p>
                    <p class="name">Coaches</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p class="timer" data-from="0" data-to="150" data-speed="4000"></p>
                    <p class="name">Students</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p class="timer" data-from="0" data-to="200" data-speed="4000"></p>
                    <p class="name">Reviews</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p class="timer" data-from="0" data-to="250" data-speed="4000"></p>
                    <p class="name">Trainings</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular post -->
    <section class="roll-row single-about-wrap">
    <div class="container">
            <div class="row">
                <div class="gallery-wrap" data-portfolio-effect="fadeInUp">
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

    <!-- Map contact info -->
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
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/imagesloaded.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/main.js"></script>
</body>

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/aboutus.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:29:27 GMT -->
</html>