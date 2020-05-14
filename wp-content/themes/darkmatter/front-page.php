<?php get_header();?>

<section class="hero-container">
    <div class="video-container">
        <video autoplay muted loop>
            <source src="<?php 
                    $bg_vid = get_field('hero_video'); 
                    $url = $bg_vid['url'];
                    echo $url
                ?>" type="video/mp4">
        </video>
    </div>
    <div class="hero__text">
        <h1><?php the_field('hero_headline'); ?></h1>

        <div class="hero__text-cta">
            <div class="play-btn"><?php the_field('hero_icon'); ?></div>
            <p><?php the_field('hero_cta'); ?></p>
        </div>
    </div>
</section>

<section class="section-centered">
    <h1>Services</h1>
    <h2>Entertainment shows, cooking shows, brand films, music videos, commercials.<br>As a freelance videographer, I believe there's nothing where my creativity doesn't fit to make video content watched and remembered.</h2>
    <div class="column-container"> 
        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-camera.svg" alt="video production">
            <h1>Video production</h1>
            <p>Camera direction</p>
            <p>Creative perspectives</p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-edit.svg" alt="video production">
            <h1>Video editing</h1>
            <p>Colour correction + grading</p>
            <p>Audio mix</p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-motion.svg" alt="video production">
            <h1>Motion design</h1>
            <p>VFX</p>
            <p>graphics</p>
        </div>
    </div>
</section>

<?php get_footer();?>