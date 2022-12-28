<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Onthel | Terms of Service</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="<?= base_url('css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/vendor.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/main.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/fonts.css'); ?>">
    <!-- script
   ================================================== -->
    <script src="<?= base_url('js/modernizr.js'); ?>"></script>
    <script src="<?= base_url('js/pace.min.js'); ?>"></script>

    <!-- favicons
	================================================== -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="<?= base_url('image/x-icon') ?>">
    <link rel="icon" href="favicon.ico" type="<?= base_url('image/x-icon') ?>"> -->
    <link rel="icon" href="<?= base_url('images/logoOnthel.png') ?>" type="image/png">


</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header id="header" class="row">
        <div class="header-logo">

            <a href="/"><img src="images/logoOnthel.png" alt="" width="50" height="50"></a>
        </div>

        <nav id="header-nav-wrap">
            <ul class="header-main-nav">
                <li><a href="/" title="home">Home</a></li>
                <!-- <li><a href="<?= base_url('/#about'); ?>" title="Our Mission">Our Mission</a></li>
                <li><a href="/" title="Our Service">Our Service</a></li>
                <li><a href="/" title="Join Us">Join Us</a></li> -->
                <li><a href="<?= base_url('/tos'); ?>" title="Terms of Service" style="color: #f2c94c;">Terms of Service</a></li> <!-- GO TO BLOG -->
            </ul>

            <!-- <a href="#" title="sign-up" class="button button-primary cta">Sign Up</a> -->
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    </header>
    <!-- /header -->

    <section id="about">

        <div class="row about-intro">
            <br>
            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">Terms of Service</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">

                    <span style="white-space: pre-line"><?= $data->term_of_service; ?></span>
                </p>
            </div>

        </div>


        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    <!-- <span class="icon"><i class="icon-window"></i></span> -->

                    <div class="service-content">

                        <h3>Fully Resposive</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>

                    </div>

                </div>
                <div class="bgrid feature" data-aos="fade-up">

                    <!-- <span class="icon"><i class="icon-window"></i></span> -->

                    <div class="service-content">

                        <h3>Fully Resposive</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>

                    </div>

                </div>
                <div class="bgrid feature" data-aos="fade-up">

                    <!-- <span class="icon"><i class="icon-window"></i></span> -->

                    <div class="service-content">

                        <h3>Fully Resposive</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>

                    </div>

                </div>


            </div>

        </div>


        <div class="row about-bottom-image">

            <img src="images/app-screens-1200.png" srcset="images/app-screens-600.png 600w, 
                images/app-screens-1200.png 1200w, 
                images/app-screens-2800.png 2800w" sizes="(max-width: 2800px) 100vw, 2800px" alt="App Screenshots" data-aos="fade-up">

        </div> <!-- end about-bottom-image -->

    </section>


    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="<?= base_url('js/jquery-2.1.3.min.js'); ?>"></script>
    <script src="<?= base_url('js/plugins.js'); ?>"></script>
    <script src="<?= base_url('js/main.js'); ?>"></script>

</body>

</html>