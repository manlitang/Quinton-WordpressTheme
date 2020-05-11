<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>


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

    