
<?php

        register_nav_menus(
            array('primary-menu'=>'New Primary Menu')
        );

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-header' );

        register_sidebar( array(
            'name'          => __( 'Sidebar-1', 'textdomain' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Sidebar-2', 'textdomain' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );


?>