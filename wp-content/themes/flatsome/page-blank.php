<?php
/*
Template name: Page - Full Width
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

  <!-- Preloader-->
  <div class="preloader">
    <div class="preloader-block">
        <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span>
        </div>
    </div>
</div>
<div id="overlay-effect"></div>
<!-- Navbar-->
<nav class="navbar-expand-md navbar fixed-top" id="navbar">
    <a class="navbar-brand" data-scroll="" href="#home-area">
        <!-- Navbar Logo-->
        <?php get_template_part('template-parts/header/partials/element','logo'); ?>
    </a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
        <!-- Navbar menu-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Home-->



<section class="home-area element-cover-bg" id="home"  style="background-image:url(http://localhost:8080/webcv/wp-content/uploads/2021/10/home.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-lg-8 home-content text-center">

                <?php echo do_shortcode('[block id="home-slider-text"]')?>

            </div>
        </div>
    </div>
    <div class="fixed-wrapper">
        <div class="fixed-block block-left">
            <ul class="list-unstyled languages-list">
                <li><a href="#0"><span class="single-language">ENG</span></a>
                </li>
                <li><a href="#0"><span class="single-language">JAP</span></a>
                </li>
            </ul>
        </div>
        <div class="fixed-block block-right">
            <?php echo do_shortcode('[block id="home-social"]')?>
        </div>
    </div>
</section>
<!-- About lightbox-->
<div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Get to know me</p>
                                <h2 class="section-title">About Me</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Info section-->
                    <div class="info-section single-section">
                        <div class="row align-items-center">
                            <!-- Picture part-->
                            <div class="col-12 col-lg-5 info-img">
                            	<?php echo do_shortcode('[block id="about-me-image"]')?>
                            </div>
                            <!-- Content part-->
                            <div class="col-12 col-lg-7 info-content">
                                <div class="content-block">
                                    <?php echo do_shortcode('[block id="about-me-who-am-i"]') ?>
                                    <div class="d-block d-sm-flex align-items-center"><a class="btn content-download button-main button-scheme" href="#0" role="button">Download CV</a>
                                        <ul class="list-unstyled list-inline content-follow">
                                            <?php echo do_shortcode('[block id="about-me-who-am-i-social"]')?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services section-->
                    <div class="services-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">Services i offer to my clients</p>
                                    <h2 class="section-title">My Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Single service-->
                            <?php echo do_shortcode('[block id="services-list"]')?>
                        </div>
                    </div>
                    <!-- Testimonials section-->
                    <div class="testimonials-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <?php echo do_shortcode('[block id="my-services"]')?>
                                </div>
                            </div>
                        </div>
                        <div class="my-slider">

                            
                        	<?php echo do_shortcode('[GetPartner_Fn code="Feedback"]')?>


                        </div>
                    </div>
                    <!-- Pricing section-->
                    <div class="pricing-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">Get started with my services</p>
                                    <h2 class="section-title">Choose a Plan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <!-- Single plan-->
                            <?php echo do_shortcode('[block id="about-me-choose-a-plan"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resume lightbox-->
<div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Check out my Resume</p>
                                <h2 class="section-title">Resume</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Resume section-->
                    <div class="resume-section single-section">
                        <div class="row">
                            <!-- Education part-->
                            <?php echo do_shortcode('[block id="education-part"]')?>
                        </div>
                    </div>
                    <!-- Skills section-->
                    <div class="skills-section single-section">
                        <?php echo do_shortcode('[block id="my-skill"]')?>
                    </div>
                    <!-- Video section-->
                    <div class="video-section single-section">
                        <div class="row align-items-center">
                            <?php echo do_shortcode('[block id="video"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio lightbox-->
<div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Showcasing some of my best work</p>
                                <h2 class="section-title">Portfolio</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio section-->
                    <div class="portfolio-section single-section">
                    	<?php echo do_shortcode('[productsbycate1]')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog lightbox-->
<div class="lightbox-wrapper" id="blog" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Check out my latest blog posts</p>
                                <h2 class="section-title">My Blog</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog section-->
                    <div class="blog-section single-section">
                        <div class="row justify-content-center">
                        	<?php echo do_shortcode('[GetHotPrd_Fn]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact lightbox-->
<div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Feel free to contact me anytimes</p>
                                <h2 class="section-title">Get in Touch</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact section-->
                    <div class="contact-section single-section">
                        <div class="row">
                            <!-- Contact form-->
                            <div class="col-12 col-lg-7">
                            	<div class="contact-form" id="contact-form">
                            		<?php echo do_shortcode('[contact-form-7 id="1599" title="Contact"]') ?>
                            	</div>
                            </div>
                            <!-- Contact info-->
                            <div class="col-12 col-lg-5">
                                <div class="contact-info">
                                    <?php echo do_shortcode('[block id="contact"]')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
