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
    <h1><?php the_field('services_headline'); ?></h1>
    <h2><?php the_field('services_subheadline'); ?></h2>
    <div class="column-container"> 

        <?php 
        $service1 = get_field('service_1');
        $service2 = get_field('service_2');
        $service3 = get_field('service_3');
        ?>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-camera.svg" alt="video production">
            <h1><?php echo $service1['service_name1'] ?></h1>
            <p><?php echo $service1['service_details1'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-edit.svg" alt="video production">
            <h1><?php echo $service2['service_name2'] ?></h1>
            <p><?php echo $service2['service_details2'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/icon-motion.svg" alt="video production">
            <h1><?php echo $service3['service_name3'] ?></h1>
            <p><?php echo $service3['service_details3'] ?></p>
        </div>
    </div>
</section>

<section class="section-centered">
    <h1>Featured projects</h1>
    <h2>I'm all about adding personality and humour to videos.<br>But hey, instead of telling you I'll show you. </h2>
</section>

<?php get_footer();?>