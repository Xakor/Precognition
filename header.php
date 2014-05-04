<!DOCTYPE html>
<html>
	<head>
    	<title>
			<?php
                wp_title(' | ', 'true', 'right');
				bloginfo( 'name' );
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/grid12.css">
        <?php wp_head(); ?>

    </head>
	<body>

    <!-- old header element 
        <div class="container">
            <header>
                <div class="five columns clearfix">
                    <a href="<?php get_option ('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.jpg" title="<?php bloginfo('title'); ?>"></a>
                </div>
                <div class="sixteen columns nav-bar">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

                </div>
            </header>
        </div>
    -->

        <div class="container_12">
            <a href="<?php get_option ('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo_temp.png" title="<?php bloginfo('title'); ?>"></a>
        </div>
        <div class="container_12">
            <div class="grid_4 red">Search Bar</div>
            <div class="grid_8 push_4 red">Menu bar</div>
        </div>
            
    </body>
</html>