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
    <h1><?php the_field('featured_headline'); ?></h1>
    <h2><?php the_field('featured_subheadline'); ?></h2>

    <?php 
        $featured1 = get_field('featured_project1');
        $featured2 = get_field('featured_project2');
    ?>

    <div class="projects-container">

        <?php 
            $featured1 = get_field('featured_project1'); 
            $featured_img1 = $featured1['featured_image1'];
            $url1 = $featured_img1['url'];
            $alt1 = $featured_img1['alt'];
        ?>

        <div class="project-image-container">
            <a href="<?php echo $featured1['featured_link1']; ?>"><img src="<?php echo $url1 ?>" alt="<?php echo $alt1 ?>"></a>
        </div>

        <?php 
            $featured2 = get_field('featured_project2'); 
            $featured_img2 = $featured2['featured_image2'];
            $url2 = $featured_img2['url'];
            $alt2 = $featured_img2['alt'];
        ?>
        
        <div class="project-image-container">
            <a href="<?php echo $featured2['featured_link2']; ?>"><img src="<?php echo $url2 ?>" alt="<?php echo $alt2 ?>"></a>
        </div>

        <div class="btn-container">
            <a href="#" class="btn">View projects</a>
        </div>

        <div class="bg-overlap"></div>
    </div>
</section>

<section class="section-centered">
<h1>Colleagues talking</h1>
<h2>I could talk about myself but I figured it's more interesting to give the word to people I've worked with.</h2>

<div class="main-carousel">
    <div class="carousel-cell">
        <p>As a camera operator Quinton is great at following camera direction but also creative enough to come up with visually appealing solutions. As an editor he creates a clear reflection of the creative plan or briefing of the client. </p>

        <div class="review-profile-container">
            <div class="review-profile-pic">
                <img src="<?php echo $url1 ?>" alt="<?php echo $alt1 ?>">
            </div>
            <div class="review-profile-details">
                <p>Rik Rampaart</p>
                <p>Slam!TV editorial</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>