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
        <script src="<?php echo get_template_directory_uri(); ?>/js/cookie/jquery.cookie.js"></script>

        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10932812-6', 'hansemuseum.eu');
  ga('send', 'pageview');

</script>

	</head>
	<body <?php body_class(); ?>>

<div id="mobilewrap" class="is-hidden">
    <nav class="mobile">
        <?php mobile_nav(); ?>
    </nav>
</div>
<a href="#mobilewrap" class="mobileactivator">&#9776</a>
<div class="contentwrap"> <!-- content wrapper -->

<header class="header clear" role="banner">

<div class="wrap no-padding">
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" >
        </a>
    <nav class="service" role="navigation">
      <?php service_nav(); ?>
    </nav>
<!--     <?php include("parts/termin.php") ?> -->
</div>
<div class="mainnavcontainer">
    <div class="wrap no-padding">
    <nav class="main" role="navigation">
            <?php html5blank_nav(); ?>
    </nav>
    </div>
</div>
</header>