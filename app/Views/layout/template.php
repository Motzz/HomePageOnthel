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
    <title>Onthel</title>
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
    <link rel="shortcut icon" href="favicon.ico" type="<?= base_url('image/x-icon') ?>">
    <link rel="icon" href="favicon.ico" type="<?= base_url('image/x-icon') ?>">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <?= $this->include("layout/navbar"); ?>
    <!-- /header -->


    <!-- home
   ================================================== -->
    <?= $this->include("layout/home"); ?>
    <!-- end home -->


    <!-- about
    ================================================== -->
    <?= $this->include("layout/ourMission"); ?>
    <!-- end about -->


    <!-- pricing
    ================================================== -->
    <?= $this->include("layout/ourService"); ?>




    <!-- Testimonials Section
    ================================================== -->
    <?= $this->include("layout/joinUs"); ?>

    <!-- end testimonials -->




    <!-- footer
    ================================================== -->
    <footer>

        <?= $this->include("layout/footer"); ?>

    </footer>

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