<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(''); ?></title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="top-bar-container contain-to-grid">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                </li>          
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section id="fullsize-main" class="top-bar-section">
            	
            	<?php foundation_top_bar_l(); ?>
            	<?php foundation_top_bar_r(); ?>

            </section>
            <section id="mobile-main" class="top-bar-section">
            	<?php foundation_top_bar_mobile(); ?>
            </section>
        </nav>
    </div>
</header>

