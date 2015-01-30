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

		<?php wp_head(); ?>
				<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });

				$(document).ready(function() {
					$('#simple-menu').sidr({
						name: 'sidr-right',
						side: 'right'
					});
				});

				$("body").css('overflow', 'hidden');

				</script>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
<div class="rockwall-mobile">
	<a id="simple-menu" href="#" class=""><button class="btn btn-default"><i class="fa fa-bars fa-3x whitetext"></i></button></a>
	<button class="phone"><a class="btn btn-danger" href="tel:5302688182"><i class="fa fa-phone-square fa-4x whitetext"></i></a></button>

	<!-- logo -->
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.gif" alt="Logo" class="logo-img">
		</a>
			</div>
</div>

	<div id="sidr-right">
		<!-- Your content -->
		<?php html5blank_nav(); ?>
	</div>
	<!-- /logo -->

<div class="wrapper">

		<div class="rockwall-desktop">
			<div class="logo-desktop">
				<a href="<?php echo home_url(); ?>">
					<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.gif" alt="Logo" >
				</a>
<!-- 				<h2 class="tagline"><?php bloginfo('description'); ?></h2> -->			</div>
			<nav class="nav-desktop" role="navigation">
				<div id="navcontainer" class="mobilehide">
					<?php html5blank_nav(); ?>
				</div>
			</nav>

			<div id="contact" class="blue">
				<h3><i class="fa fa-phone-square fa-2x orangetext"></i> Call us Today at <strong>(530) 268-8182</strong></h3>

				<br />

				<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12395.085651402507!2d-121.095798!3d39.043331!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77ad6f7ffdc62c4c!2sRichard+S+Powell+DDS!5e0!3m2!1sen!2sus!4v1422570306143" width="100%" height="auto" frameborder="0"></iframe>


			</div>


		</div>
