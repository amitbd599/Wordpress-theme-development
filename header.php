<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <title>RORALEX - Building Construction & Industry HTML5 Template</title>
   <meta name="description" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- Place favicon.ico in the root directory -->
   <link rel="icon" type="image/x-icon" href="<?php  bloginfo("template_directory") ;?>./assets/img/favicon.png" />

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/animate.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/animationtabs.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/backtotop.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/bootstrap.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/flaticon.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/font-awesome-pro.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/jQueryTab.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/magnific-popup.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/marquee.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/meanmenu.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/nice-select.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/owl-carousel.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/spacing.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/swiper-bundle.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/style.css" />

   <?php wp_head(); ?>


</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->




   <!-- Preloader Start-->
   <div class="preloader">
      <div class="swapping-squares-spinner">
         <div class="square"></div>
         <div class="square"></div>
         <div class="square"></div>
         <div class="square"></div>
      </div>
   </div>
   <!-- Preloader End -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header-area-start -->
   <header id="header-sticky" class="header-intro-version-one-area">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
               <div class="logo-area">
                  <div class="logo">
                     <a href="<?php echo site_url();?>"><img src="<?php echo get_header_image() ;?>" alt="Roralex"></a>

                  </div>
               </div>
            </div>
            <div class="col-xl-7 col-lg-10 col-md-6 col-6">
               <div class="menu-body">
                  <div class="main-menu">
                     <nav id="mobile-menu">
                        <ul>
                           <!-- <li class="has-dropdown">
                              <a href="index-1.html">Home</a>
                              <ul class="sub-menu">
                                 <li><a href="index-1.html">Home One</a></li>
                                 <li><a href="index-2.html">Home Two</a></li>
                                 <li><a href="index-3.html">Home Three</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="services.html">Services</a>
                              <ul class="sub-menu">
                                 <li><a href="services.html">Services</a></li>
                                 <li>
                                    <a href="services-details.html">Services Details</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="about.html">Pages</a>
                              <ul class="sub-menu">
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="team.html">Team</a></li>
                                 <li><a href="team-details.html">Team Details</a></li>
                                 <li><a href="project.html">projects</a></li>
                                 <li>
                                    <a href="project-details.html">projects Details</a>
                                 </li>
                                 <li><a href="pricing.html">pricing Page</a></li>
                                 <li><a href="faq.html">FAQ Page</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blogs</a>
                              <ul class="sub-menu">
                                 <li><a href="blog.html">Blogs</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                              </ul>
                           </li>

                           <li><a href="contact.html">Contact</a></li> -->

                           <?php wp_nav_menu( array('theme_location'=>'primary-menu') ) ?>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="side-menu-icon d-lg-none text-end">
                  <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i
                        class="fal fa-bars"></i></a>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 d-none d-xl-block">
               <div class="location-email-intro">
                  <div class="inner-location-email-intro pr-30">
                     <div class="inner">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span class="text">Location</span>
                     </div>
                     <h5>Riverside Augusta</h5>
                  </div>
                  <div class="inner-location-email-intro">
                     <div class="inner">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span class="text">Get In Touch</span>
                     </div>
                     <h5>info@roralex.com</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->
   <!-- mobile sidebar area start -->
   <div class="mobile-sidebar-area">
      <div class="sidebar__wrapper">
         <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
               <i class="fal fa-times"></i>
            </button>
         </div>
         <div class="sidebar__content">
            <div class="sidebar__logo mb-20">
               <a href="index-1.html">
                  <img src="<?php  bloginfo("template_directory") ;?>./assets/img/common/Logo_Black.png" alt="logo">
               </a>
               <p>Trusted Contraction service!</p>
            </div>
            <div class="sidebar__search mb-25">
               <form action="#">
                  <input type="text" placeholder="Find A Construction Service!">
                  <button type="submit"><i class="far fa-search"></i></button>
               </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="sidebar__contact  mb-20">
               <h4>Contact With US</h4>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
               <div class="location-email-intro mobile">
                  <div class="inner-location-email-intro pr-30">
                     <div class="inner">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span class="text">Location</span>
                     </div>
                     <h5 class="text">4043 Riverside Augusta</h5>
                  </div>
                  <div class="inner-location-email-intro pt-5">
                     <div class="inner">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span class="text">Get In Touch</span>
                     </div>
                     <h5 class="text">info@roralex.com</h5>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- mobile sidebar area end -->