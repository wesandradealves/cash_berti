<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta content="<?php echo get_bloginfo('blogdescription'); ?>" name="description">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="true">
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <?php 
        wp_meta(); 
        wp_head();
    ?>
</head>

<body <?php body_class('d-none page--'.$post->post_name); ?>>
    <div id="wrap" class="d-flex w-100 flex-column justify-content-start overflow-hidden">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
                /* translators: Hidden accessibility text. */
                esc_html_e( 'Skip to content', 'twentytwentyone' );
            ?>
        </a>
        <header class="header">
            <?php if(get_field('topbar','option')) : ?>
                <?php get_template_part('template_parts/_topbar', null, array('data' => get_field('topbar','option') )); ?>
            <?php endif; ?>
            <div class="header-top">
                <div class="container d-flex flex-wrap align-items-center justify-content-between">
                    <?php get_template_part('template_parts/_logo', null, array( )); ?>
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'main', 
                                'menu_class' => 'd-none d-xl-flex flex-fill align-items-center justify-content-end flex-wrap',   
                                'container' => 'nav',
                                'container_class' => 'navigation' 
                            ) 
                        ); 
                    ?>         
                    <button class="hamburger hamburger--collapse d-xl-none p-0 m-0" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>                                  
                </div>
            </div>
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main', 
                        'menu_class' => 'd-flex flex-column',   
                        'container' => 'nav',
                        'container_class' => 'navigation mobile' 
                    ) 
                ); 
            ?>             
        </header>
        <main class="main">