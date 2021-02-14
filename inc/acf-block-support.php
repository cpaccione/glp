<?php

/*
@package Lantern
	=====================
	ACF BLOCK SUPPORT
	=====================
*/


function register_acf_block_types() {

      // SLT
      acf_register_block_type(array(
        'name'              => 'slt',
        'title'             =>  __('SLT'),
        'description'       =>  __('This block creates two columns with text on the left, and a slider on the right.'),
        'render_template'   =>  'template-parts/blocks/slt/slt.php',
        'category'          =>  __('layout'),
        'mode'              => 'preview',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'slt-slick-theme-styles', get_template_directory_uri() . '/template-parts/blocks/slt/slick-1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'slt-slick-styles', get_template_directory_uri() . '/template-parts/blocks/slt/slick-1.8.1/slick/slick.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'slt-custom-styles', get_template_directory_uri() . '/template-parts/blocks/slt/slt.css', array(), '1.0.0', 'all' );

            wp_enqueue_script( 'slt-slick-script',  get_template_directory_uri() . '/template-parts/blocks/slt/slick-1.8.1/slick/slick.js', array('jquery'), '1.0.0', true );

            wp_enqueue_script( 'slt-custom-script',  get_template_directory_uri() . '/template-parts/blocks/slt/slt.js', array('jquery'), '1.4', true );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'slider', 'left', 'two columns' ),
    ));


    // SRT
        acf_register_block_type(array(
        'name'              => 'srt',
        'title'             =>  __('SRT'),
        'description'       =>  __('This block creates two columns with text on the right, and a slider on the left.'),
        'render_template'   =>  'template-parts/blocks/srt/srt.php',
        'category'          =>  __('layout'),
        'mode'              => 'preview',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'slt-slick-theme-styles', get_template_directory_uri() . '/template-parts/blocks/srt/slick-1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'srt-slick-styles', get_template_directory_uri() . '/template-parts/blocks/srt/slick-1.8.1/slick/slick.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'srt-custom-styles', get_template_directory_uri() . '/template-parts/blocks/srt/srt.css', array(), '1.0.0', 'all' );

            wp_enqueue_script( 'srt-slick-script',  get_template_directory_uri() . '/template-parts/blocks/srt/slick-1.8.1/slick/slick.js', array('jquery'), '1.0.0', true );

            wp_enqueue_script( 'srt-custom-script',  get_template_directory_uri() . '/template-parts/blocks/srt/srt.js', array('jquery'), '1.4', true );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'slider', 'right', 'two columns' ),
    ));


    // Intro Slider
    acf_register_block_type(array(
        'name'              => 'intro_slider',
        'title'             =>  __('Intro Slider'),
        'description'       =>  __('This block creates two rows, the first one with title and body the text, and the one below a full width slider.'),
        'render_template'   =>  'template-parts/blocks/intro_slider/intro_slider.php',
        'category'          =>  __('layout'),
        'mode'              => 'preview',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'intro-slider-slick-theme-styles', get_template_directory_uri() . '/template-parts/blocks/intro_slider/slick-1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'intro-slider-slick-styles', get_template_directory_uri() . '/template-parts/blocks/intro_slider/slick-1.8.1/slick/slick.css', array(), '1.0.0', 'all' );

            wp_enqueue_style( 'intro-slider-custom-styles', get_template_directory_uri() . '/template-parts/blocks/intro_slider/intro_slider.css', array(), '1.0.0', 'all' );

            wp_enqueue_script( 'intro-slider-slick-script',  get_template_directory_uri() . '/template-parts/blocks/srt/slick-1.8.1/slick/slick.js', array('jquery'), '1.0.0', true );

            wp_enqueue_script( 'intro-slider-custom-script',  get_template_directory_uri() . '/template-parts/blocks/intro_slider/intro_slider.js', array('jquery'), '1.4', true );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'intro', 'slider', 'full width' ),
    ));


    // Video Embed Block
    acf_register_block_type(array(
        'name'              => 'video_embed',
        'title'             =>  __('Video Embed'),
        'description'       =>  __('The block creates a one column video embed section for Vimeo or YouTube. You can add intro text, a title and text area.'),
        'render_template'   =>  'template-parts/blocks/video_embed/video_embed.php',
        'category'          =>  __('layout'),
        'mode'              => 'edit',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'video-embed', get_template_directory_uri() . '/template-parts/blocks/video_embed/video_embed.css', array(), '1.0.0', 'all' );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'video', 'vimeo', 'youtube', 'embed' ),
    ));

    // Hero
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             =>  __('Hero'),
        'description'       =>  __('TBD.'),
        'render_template'   =>  'template-parts/blocks/hero/hero.php',
        'category'          =>  __('layout'),
        'mode'              => 'edit',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_register_script( 'my-script', 'myscript_url' );
            wp_enqueue_script( 'my-script' );
            $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
            //after wp_enqueue_script
            wp_localize_script( 'my-script', 'object_name', $translation_array );

            wp_enqueue_style( 'hero', get_template_directory_uri() . '/template-parts/blocks/hero/hero.css', array(), '1.0.1', 'all' );

            wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/template-parts/blocks/hero/slick-1.8.1/slick/slick.css', array(), '1.0.1', 'all' );

            wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/template-parts/blocks/hero/slick-1.8.1/slick/slick-theme.css', array(), '1.0.1', 'all' );

            wp_enqueue_script( 'lottie',  get_template_directory_uri() . '/template-parts/blocks/hero/svg/lottie.js', array(), '1.0.0', true );

            wp_enqueue_script( 'svg',  get_template_directory_uri() . '/template-parts/blocks/hero/svg/svg.js', array(), '1.0.1', true );

            wp_enqueue_script( 'slick-slider-script', get_template_directory_uri() . '/template-parts/blocks/hero/slick-1.8.1/slick/slick.js', array('jquery'), '1.0.0', true );

            wp_enqueue_script( 'custom-slick', get_template_directory_uri() . '/template-parts/blocks/hero/hero.js', array('jquery'), '1.0.0', true );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'hero' ),
    ));

    // Contact Footer
    acf_register_block_type(array(
        'name'              => 'contact_footer',
        'title'             =>  __('Contact Footer'),
        'description'       =>  __('Displays contact information'),
        'render_template'   =>  'template-parts/blocks/contact_footer/contact_footer.php',
        'category'          =>  __('layout'),
        'mode'              => 'edit',
        'post_types'        => array('page'),
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'contact-footer', get_template_directory_uri() . '/template-parts/blocks/contact_footer/contact_footer.css', array(), '1.0.0', 'all' );

        },
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-quote',
            ),
        'keywords'          => array( 'contact', 'footer' ),
    ));

}