<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:28:41 GMT -->
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
                        <li class="last"><a href="#">News</a></li>
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

    <!-- Blog post -->
    <section class="page-wrap blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-title">
                        <h1 class="bold">News</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">15 held the annual meeting of coaches</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <a href="#"><span class="like">24</span></a>
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
                            <a href="#"><span class="like">24</span></a>
                        </div><!-- /.meta-post -->

                        <div class="feature-post">
                            <img src="<?php echo base_url();?>images/blog/6.jpg" alt="image">
                        </div><!-- /.feature-post -->

                        <div class="entry-post">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean cmodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- /.entry-post -->
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">15 held the annual meeting of coaches</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <a href="#"><span class="like">24</span></a>
                        </div><!-- /.meta-post -->

                        <div class="feature-post">
                            <img src="<?php echo base_url();?>images/blog/7.jpg" alt="image">
                        </div><!-- /.feature-post -->

                        <div class="entry-post">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean cmodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- /.entry-post -->
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">Lorem ipsum dolor</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <a href="#"><span class="like">24</span></a>
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
            <div class="row">
                <div class="col-md-6">
                    <article class="post" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                        <h2 class="title-post">
                            <a href="blog-single.html">15 held the annual meeting of coaches</a>
                        </h2><!-- /.title-post -->

                        <div class="meta-post">
                            <span class="date">September 31</span> |
                            <span class="author"><a href="#">Administrator</a></span>
                            <a href="#"><span class="like">24</span></a>
                        </div><!-- /.meta-post -->

                        <div class="feature-post">
                            <img src="<?php echo base_url();?>images/blog/9.jpg" alt="image">
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
                            <a href="#"><span class="like">24</span></a>
                        </div><!-- /.meta-post -->

                        <div class="feature-post">
                            <img src="<?php echo base_url();?>images/blog/10.jpg" alt="image">
                        </div><!-- /.feature-post -->

                        <div class="entry-post">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean cmodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- /.entry-post -->
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination">
                        <ul class="inline">
                            <li class="prev"><a href="#" class="roll-button">Preview</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#" class="roll-button">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section class="roll-map"\>
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
    <script type="text/javascript" src="<?php echo base_url();?>javascript/imagesloaded.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/main.js"></script>
</body>

<!-- Mirrored from www.rollthemes.com/demo/html/brainstorm/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 17:28:42 GMT -->
</html>