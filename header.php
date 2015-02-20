<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl/owl.carousel.min.js"></script>

        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


	</head>
	<body <?php body_class(); ?>>


        <div class="modal" id="modal">
            <div class="modal-container">
                <p><?php the_field('newsletter', 387); ?></p>
                <a href="#modal-close" class="close">X</a>
            </div>
        </div>


<div id="mobilewrap">
    <nav class="mobile">
        <?php mobile_nav(); ?>
    </nav>
</div>
<a href="#mobilewrap" class="mobileactivator">&#9776</a>
<div class="contentwrap"> <!-- content wrapper -->

<header class="header clear" role="banner">
<h3 class="banner-head"><?php bloginfo('name'); ?></h3>
<div class="wrap no-padding">
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-round.svg" alt="Logo" >
        </a>
    </div>
    <nav class="service" role="navigation">
      <?php service_nav(); ?>
    </nav>
    <nav class="main" role="navigation">
            <?php html5blank_nav(); ?>
    </nav>
</div>
</header>

