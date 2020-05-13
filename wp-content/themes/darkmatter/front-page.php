<?php get_header();?>

<section class="hero">
    <video autoplay muted loop>
        <source src="<?php 
                $bg_vid = get_field('hero_video'); 
                $url = $bg_vid['url'];
                echo $url
            ?>" type="video/mp4">
    </video>
    <div class="hero__text">
        <h1><?php the_field('hero_headline'); ?></h1>

        <div class="hero__cta">
            <div class="play-btn"><?php the_field('hero_icon'); ?></div>
            <p><?php the_field('hero_cta'); ?></p>
        </div>
    </div>
</section>

<?php get_footer();?>