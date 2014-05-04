<!DOCTYPE html>
<html>
	<head>
    	<title>
			<?php
                wp_title(' | ', 'true', 'right');
				bloginfo( 'name' );
            ?>
        </title>

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid12_nogutter.css">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

        <!-- Wordpress includes -->
        <?php wp_head(); ?>

    </head>
	<body>
        <div class="container_12 head_banner_area">
            <a href="<?php get_option ('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo_temp.png" class="head_banner" title="<?php bloginfo('title'); ?>"></a>
        </div>
        <div class="container_12">
            <div class="grid_4 red head_basket_area">
                <div class="basket_bar">199,95 kr</div>
            </div>
            <div class="grid_8 red head_menu_area">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
        </div>
    <div class="clear" style="margin-bottom:20px;"></div>