<?php 
get_header();
?>
    <!-- start page-wrapper -->
    <div class="page-wrapper">


        <!-- start preloader -->
       <div class="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end preloader -->


        <!-- Start header -->     
       
        <header class="site-header header-style-1" id="header">
    
            <div class="topbar">
                <div class="container">
                    <div class="row">
     

                        <div class="col-lg-4 col-sm-4">
                            <div class="topbar-contact-info bg-color-1">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/call.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h3>Call Us:</h3>
                                    <p>+00 568 746 987</p>
                                </div>
                            </div><!-- / topbar contact info -->
                        </div><!-- / col-4 -->

                        <div class="col-lg-4 col-sm-4">
                            <div class="topbar-contact-info">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/clock.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h3>Opening Hours:</h3>
                                    <p>Mon - Sat | 08:00 – 17:00</p>
                                </div>
                            </div><!-- / topbar contact info -->
                        </div><!-- / col-4 -->

                        <div class="col-lg-4 col-sm-4">
                            <div class="topbar-contact-info topbar-contact-info-2 bg-color-1">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/gps-map-marker.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h3>Our Address:</h3>
                                    <p>Millington, Ave, TN 38053</p>
                                </div>
                            </div><!-- / topbar contact info -->
                        </div><!-- / col-4 -->

                    </div>
                </div>
            </div>

            <nav class="navigation navbar navbar-default">
                               <?php 
wp_nav_menu(array(
    'theme_location'=>'header',
    
    'menu_class'=>'nav navbar-nav',
    'container_class' => 'navbar-collapse collapse navigation-holder',
    'container_id' => 'navbar'
));
?>
            
            </nav>
        </header> s
        <!-- end of header -->

        <!-- start of hero -->
        <section class="lawyer-hero-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-xs-12">
                        <div class="banner-content">
                            <span>We fight for justice and we have top lawyers.</span>
                            <div class="banner-content-inner">
                                <h1>Solution your all problems.</h1>
                                <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="hero-banner-btns">
                                <a href="services.html" class="btn theme-btn-default">Check Areas</a>
                                <a href="team.html" class="btn theme-btn-black">Our Attorneys</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero -->


        <!-- start features -->
        <section class="lawyer-features">
            <div class="features-seperator">
                <div class="top"></div>
                <div class="bottom"></div>
            </div><!-- /features-seperator -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single-feature">
                            <div class="icon">
                                <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/icon-1.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h2>Expert Attorneys</h2>
                                <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                            </div>
                            <div class="feature-layer">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/hover/icon-1.svg" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <h2>Expert Attorneys</h2>
                                    <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                                </div>
                                <a href="contact.html" class="btn theme-btn-black">Contact Us</a>
                            </div>
                        </div><!-- /single feature -->
                    </div><!-- /col-4 -->

                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single-feature">
                            <div class="icon">
                                <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/icon-2.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h2>Easy Appoinment</h2>
                                <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                            </div>
                            <div class="feature-layer">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/hover/icon-2.svg" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <h2>Easy Appoinment</h2>
                                    <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                                </div>
                                <a href="contact.html" class="btn theme-btn-black">Contact Us</a>
                            </div>
                        </div><!-- /single feature -->
                    </div><!-- /col-4 -->

                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single-feature">
                            <div class="icon">
                                <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/icon-3.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h2>Fight For Justice</h2>
                                <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                            </div>
                            <div class="feature-layer">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/featured/hover/icon-3.svg" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <h2>Fight For Justice</h2>
                                    <p>Medieval origins to the digital eraearn everything there sue to know about the ubiquitous lorem ipsum passage.</p>
                                </div>
                                <a href="contact.html" class="btn theme-btn-black">Contact Us</a>
                            </div>
                        </div><!-- /single feature -->
                    </div><!-- /col-4 -->

                </div>
            </div>
        </section>
        <!-- end of features -->


        <!-- start about -->
        <section class="lawyer-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="about-left">
                            <img src="<?php echo bloginfo('template_url');?>./assets/images/about-img.jpg" class="img-responsive" alt="">
                            <div class="label">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/about-icon.svg" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <h2>68+ Years <br>Of Trust</h2>
                                </div>
                                <div class="tag">EXPERIENCE</div>
                            </div>
                        </div>
                    </div><!-- /col-6 -->
                    <div class="col-lg-6 col-xs-12">
                        <div class="about-right-content">
                            <span>About of solven</span>
                            <h2>Solven is always ready for solution your problems.</h2>
                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
                            <div class="btns">
                                <a href="service-single.html" class="btn theme-btn-black">Read More</a>
                                <a href="contact.html" class="schedule-btn">Schedule a Free Consultation <span></span></a>
                            </div>
                        </div>
                    </div><!-- /col-6 -->
                </div><!-- /row -->
            </div>
        </section>
        <!-- end of about -->


        <!-- start services -->
        <section class="lawyer-services section-padding">

            <div class="section-header">
                <div class="container">
                    <div class="row title-flex">
                        <div class="col-lg-6 col-sm-6">
                            <h2>Provided Services</h2>
                            <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/section header-->

            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-1.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Criminal Law</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-2.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Trade Mark Law</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-3.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Employ Law</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-6.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Domestic Law</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-7.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Gun Crimes</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="law-single-service">
                            <div class="law-single-service-inner">
                                <div class="icon">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/service/icon-8.svg" class="img-responsive" alt="">
                                </div>
                                <div class="content">
                                    <h4>Drug Crimes</h4>
                                    <p>Consequat aute irure dolor esse nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-4 -->

                </div>
            </div>

            <div class="other-services">
                <div class="other-services-inner">
                    <a class="btn theme-btn-default" href="services.html">Other Services</a>
                </div>
            </div>
        </section>

        <!-- end of services -->


        <!-- start team section -->
        <section class="team section-padding">
            <div class="section-header">
                <div class="container">
                    <div class="row title-flex">
                        <div class="col-sm-6">
                            <h2>Experienced Attorneys</h2>
                            <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-area">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="card">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/team/img-1.jpg" class="img-responsive" alt="">
                                    <div class="member-social-links">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3>Deirdre Starnes</h3>
                                    <p>Senior Attorney</p>
                                </div>
                            </div><!-- /single member -->
                        </div><!-- /col-4 -->

                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="card">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/team/img-2.jpg" class="img-responsive" alt="">
                                    <div class="member-social-links">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3>Nicolette Corral</h3>
                                    <p>Corporate Lawyer</p>
                                </div>
                            </div><!-- /single member -->
                        </div><!-- /col-4 -->

                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="card">
                                    <img src="<?php echo bloginfo('template_url');?>./assets/images/team/img-3.jpg" class="img-responsive" alt="">
                                    <div class="member-social-links">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3>Roselyn Felton</h3>
                                    <p>Crime Law Expert</p>
                                </div>
                            </div><!-- /single member -->
                        </div><!-- /col-4 -->

                    </div>
                </div>
            </div>

        </section>
        <!-- end of team section -->

        <!-- start complete case -->
        <section class="complete-case section-padding">
            <div class="case-header">
                <div class="case-header-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h2>Recent Successfully Completed Cases</h2>
                                <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="experience">
                                    <div class="icon">
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/icon/about-icon.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h2>68+ Years <br>Of Trust</h2>
                                    </div>
                                    <div class="tag">EXPERIENCE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="case-slider">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="owl-carousel owl-theme complete-case-slider">

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                                <div class="item">
                                    <div class="case-slider-item">
                                        <div class="img">
                                            <img src="<?php echo bloginfo('template_url');?>./assets/images/case/4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="layer">
                                            <a href="javascript:;" class="icon">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <p>Dispute Resolution</p>
                                            <h3>Legal Separation</h3>
                                        </div>
                                    </div>
                                </div><!-- /item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of complete case -->


        <!-- testimonials -->
        <section class="testimonial section-padding">
            <div class="section-header text-center">
                <div class="container">
                    <div class="row title-flex">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <h2>What People Say</h2>
                            <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="testimonials-slider">
                               <div class="border-line"></div>
                                <div class="testimonial2-thumb-active">
                                    <div>
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/testimonials/01.jpg" class="img-responsive" alt>
                                    </div>
                                    <div>
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/testimonials/02.jpg" class="img-responsive" alt>
                                    </div>
                                    <div>
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/testimonials/03.jpg" class="img-responsive" alt>
                                    </div>
                                    <div>
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/testimonials/02.jpg" class="img-responsive" alt>
                                    </div>
                                </div>
                                <div class="testimonial-content-active text-center">
                                    <div class="grid">
                                        <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                            used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled
                                            the text with their software. Today it's seen all around the web; on templates, websites,
                                            and stock designs. Use our generator to get your own.</p>
                                        <div class="info">
                                            <h3>Nicolette Corral</h3>
                                            <p>Corporate Lawyer</p>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                            used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled
                                            the text with their software. Today it's seen all around the web; on templates, websites,
                                            and stock designs. Use our generator to get your own.</p>
                                        <div class="info">
                                            <h3>Nicolette Corral</h3>
                                            <p>Corporate Lawyer</p>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                            used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled
                                            the text with their software. Today it's seen all around the web; on templates, websites,
                                            and stock designs. Use our generator to get your own.</p>
                                        <div class="info">
                                            <h3>Nicolette Corral</h3>
                                            <p>Corporate Lawyer</p>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <p>The passage experienced a surge in popularity during the 1960s when Letraset
                                            used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled
                                            the text with their software. Today it's seen all around the web; on templates, websites,
                                            and stock designs. Use our generator to get your own.</p>
                                        <div class="info">
                                            <h3>Nicolette Corral</h3>
                                            <p>Corporate Lawyer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials -->


        <!-- blog -->
        <section class="blog section-padding">
            <div class="section-header">
                <div class="container">
                    <div class="row title-flex">
                        <div class="col-lg-6 col-sm-6 text-center">
                            <h2>Latest News</h2>
                            <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-sm-6">
                            <div class="single-blog">
                                <div class="row flex-va-center">
                                    <div class="col-lg-6">
                                        <img src="<?php echo bloginfo('template_url');?>./assets/images/blog/img-1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-content">
                                            <span class="tag">FINANCIAL LAW</span>
                                            <h3><a href="javascript:;">Capitalize on low hanging fruit to identi a ballpark test.</a></h3>
                                            <span class="date">25 February, 2020</span>
                                            <a href="blog-single.html" class="btn theme-btn-default">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-blog">
                                <div class="row flex-va-center">
                                    <div class="col-lg-6">
                                        <img src="assets/images/blog/img-2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-content">
                                            <span class="tag">FINANCIAL LAW</span>
                                            <h3><a href="javascript:;">Capitalize on low hanging fruit to identi a ballpark test.</a></h3>
                                            <span class="date">25 February, 2020</span>
                                            <a href="blog-single.html" class="btn theme-btn-default">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end of blog -->

        <!-- quote -->
        <section class="quote section-padding">
            <div class="section-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="header-left">
                                <a data-fancybox href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="play-btn"><img src="<?php echo bloginfo('template_url');?>./assets/images/play.svg" class="img-responsive" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-left">
                            <h2>If You Need Consultancy, Request A Free Quote.</h2>
                            <p>Laboris nisi aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quote-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6 col-lg-offset-1">
                            <div class="status-list">
                                <ul>
                                    <li>86%</li>
                                    <li>Case <br>Complete</li>
                                </ul>
                            </div>
                            <div class="status-list">
                                <ul>
                                    <li>72%</li>
                                    <li>Charges <br> Droped</li>
                                </ul>
                            </div>
                            <div class="status-list">
                                <ul>
                                    <li>24%</li>
                                    <li>Counter <br> Suits Files</li>
                                </ul>
                            </div>
                            <div class="status-list">
                                <ul>
                                    <li>37%</li>
                                    <li>Case <br> Dismiss</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="quote-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name:" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email:" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject:" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" placeholder="Description..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn theme-btn-default" type="submit">Get In Touch</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>          
        </section>
       <!-- end of quote -->

<?php
get_sidebar();
get_footer();
