<?php
    add_theme_support( 'title_tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header', array (
        'default-image' => get_template_directory_uri().'/images/banner.jpg'
    ));
    add_theme_support( 'post-thumbnails' );

    // Load Text domain
    load_theme_textdomain( 'test', get_template_directory_uri().'/languages' );

    // Menu Register
    register_nav_menus( array(
        'mainmenu'      => __('Main Menu','test'),
        'footermenu'    => __('Footer Menu','test')
    ));

    // //Sidebar Register
    // function test_theme_sidebar() {
    //     register_sidebar( array(
    //         'name' => 'Right Sidebar',
    //         'descrpition' => 'You Can add right sidebar widget on here',
    //         'id' => 'rightsidebar',
    //         'before_title' => '<h3>',
    //         'after_title' => '</h3>',
    //         'before_widget' => '',
    //         'after_widget' => '',
    //     ))
    // }
    // add_action( 'widget_init', 'test_theme_sidebar' );
?>