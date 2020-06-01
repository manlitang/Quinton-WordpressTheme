<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="keywords" content="videographer, video production, video production service, video production company, videograaf, video editor, youtube editor, freelance video editor, freelance editor, freelance cameraman">
    <meta name="author" content="Quinton Dallie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

    <div class="nav-container">
        <nav>
            <div class="logo">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                    <img src="<?php bloginfo('template_url');?>/img/logo.svg" alt="logo">
                </a>
            </div>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false
                )); 
            ?>
            <div id="burger" class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
        </nav>
    </div>

    <main>

    