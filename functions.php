<?php

    function university_files() {
        //LOAD THE JS
        wp_enqueue_script(
            'main_university_js', 
            get_theme_file_uri('/js/scripts-bundled.js'), 
            NULL,
            microtime(),                                    //php function to disable caching for stylesheet
            true    
        );
        //LOAD THE GOOGLE UNIQUE FONTS
        wp_enqueue_style(
            'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'
        );
        //LOAD THE FONT AWESOME BUNDLE
        wp_enqueue_style(
            'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
        );
        //LOAD THE STYLESHEET OF THE PROJECT
        wp_enqueue_style(
            'university_main_styles', 
            get_stylesheet_uri(), 
            NULL, 
            microtime()                 //php function to disable caching for stylesheet
        );
    }

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features() {
        add_theme_support( 'title-tag' );
    }

    add_action('after_setup_theme', 'university_features');
?>
