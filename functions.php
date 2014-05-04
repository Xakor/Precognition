<?php
    function register_menus() {
        register_nav_menus(
            array(
                'primary' => __( 'Header Navigation' )
            )
        );
    }

    /**
     * Register our sidebars and widgetized areas.
     *
     */
    function arphabet_widgets_init() {

        register_sidebar( array(
            'name' => 'Home Left Sidebar',
            'id' => 'home_left_1',
            'before_widget' => '<div id="widget" class="grid_4 shadow">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ) );
    }

    function custom_enqueue_scripts() {

        //* Load scripts only if custom background is being used
        if ( ! get_background_image() )
            return;

        //* Load jQuery
        wp_enqueue_script("jquery");

        wp_enqueue_script( 'custom-backstretch', get_bloginfo( 'stylesheet_directory' ) . '/js/backstretch.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'custom-backstretch-set', get_bloginfo('stylesheet_directory').'/js/backstretch-set.js' , array( 'jquery', 'custom-backstretch' ), '1.0.0' );

        //* Load FlexSlider
        wp_enqueue_script( 'flexslider', get_bloginfo('stylesheet_directory').'/js/flexslider.js' , array( 'jquery'), '1.0.0' );
        wp_enqueue_script( 'flexslider-set', get_bloginfo('stylesheet_directory').'/js/flexslider-set.js' , array( 'jquery', 'flexslider'), '1.0.0' );

        wp_localize_script( 'custom-backstretch-set', 'BackStretchImg', array( 'src' => get_background_image() ) );
    }

    //* Add custom background callback for background color
    function custom_background_callback() {

        if ( ! get_background_color() )
            return;

        printf( '<style>body { background-color: #%s; }</style>' . "\n", get_background_color() );

    }

    add_action( 'init', 'register_menus' );
    add_action( 'widgets_init', 'arphabet_widgets_init' );
    add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );


    //* Add support for custom background
    add_theme_support( 'custom-background', array( 'wp-head-callback' => 'custom_background_callback' ) );
    //* Add support for Post-Thumbnails
    add_theme_support( 'post-thumbnails' );

    show_admin_bar( false );
?>