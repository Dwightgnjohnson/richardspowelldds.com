<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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

		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->			
			<header class="header clear" role="banner">
					<a id="simple-menu" href="#sidr" class="desktophide"><i class="fa fa-bars fa-3x"></i></a>

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<h2 class="tagline"><?php bloginfo('description'); ?></h2>
					<!-- /logo -->

<div id="sidr-right">
  <!-- Your content -->
  <?php html5blank_nav(); ?>
</div>

<script>
$(document).ready(function() {
  $('#simple-menu').sidr({
	  name: 'sidr-right',
	  side: 'right'
	});
});
</script>


					<!-- nav -->
					<nav class="nav" role="navigation">
						
						<div id="navcontainer" class="mobilehide">
							<?php html5blank_nav(); ?>
						</div>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
