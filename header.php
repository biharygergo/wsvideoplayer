<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
   <script>

        jQuery(document).ready(function($){
            console.log('click')
            $.ajaxSetup({cache:false});
            $("a").click(function(e){ // line 5
                pageurl = $(this).attr('href');


                var post_id = $(this).attr("rel")
                $(".target").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/competitor03/wordpress/fashionweekpage/",{id:post_id}); // line 12
                return false;
            });
        });
    </script>
</head>
<body <?php body_class(); ?>>
<div class="target">

</div>
<div class="hero-header">
    <div class="header-overlay"></div>
    <div class="main-video-container">
        <video class="main-video" autoplay loop preload = "auto">
            <source src="<?php echo get_stylesheet_directory_uri ()?>/test.m4v" type="video/mp4">
        </video>
        <div id="site-title"><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                echo '<h1>';
            } ?><?php echo esc_html(get_bloginfo('name')); ?><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                echo '</h1>';
            } ?></div>
    </div>
    <div class="previews">
        <div class="previews-inner">
            <div class="preview-video-container">
                <video class="preview-video ">
                    <source src="<?php echo get_stylesheet_directory_uri ()?>/test.m4v" type="video/mp4">
                </video>

            </div>
            <div class="preview-video-container">
                <video class="preview-video ">
                    <source src="<?php echo get_stylesheet_directory_uri ()?>/test.m4v" type="video/mp4">
                </video>

            </div>
        </div>

        <div class="preview-title">

        </div>
    </div>
</div>
<div class="sidebar">
    Haligali
</div>
<button class="sidebar-btn">Open sidebar</button>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <section id="branding">

            <div id="site-description"><?php bloginfo('description'); ?></div>
        </section>
        <nav id="menu" role="navigation">
            <div id="search">
                <?php get_search_form(); ?>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>
    <div id="container">