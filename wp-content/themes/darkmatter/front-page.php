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

        <div class="btn-container btn-container--padding-bottom">
            <a href="#" class="btn">View projects</a>
        </div>

        <div class="bg-overlap"></div>
    </div>
</section>

<section class="section-centered">
    <h1><?php the_field('testimonials_headline'); ?></h1>
    <h2><?php the_field('testimonials_subheadline'); ?></h2>

    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "pageDots": true, "prevNextButtons": false, "autoPlay": 8000 }'>
        <?php 
            $testimonial1 = get_field('testimonial1'); 
            $testimonial_img1 = $testimonial1['testimonial_image1'];

        ?>

        <div class="carousel-cell">
            <div class="review">
                <p><?php echo $testimonial1['testimonial_statement1']; ?></p>
            </div>
            <div class="review-profile-container">
                <div class="review-profile-pic">
                    <img src="<?php echo $testimonial_img1['url'] ?>" alt="<?php echo $testimonial_img1['alt'] ?>">
                </div>
                <div class="review-profile-details">
                    <p><?php echo $testimonial1['testimonial_name1']; ?></p>
                    <p><?php echo $testimonial1['testimonial_title1']; ?></p>
                </div>
            </div>
        </div>

        <?php 
            $testimonial2 = get_field('testimonial2'); 
            $testimonial_img2 = $testimonial2['testimonial_image2'];

        ?>

        <div class="carousel-cell">
            <div class="review">
                <p><?php echo $testimonial2['testimonial_statement2']; ?></p>
            </div>
            <div class="review-profile-container">
                <div class="review-profile-pic">
                    <img src="<?php echo $testimonial_img2['url'] ?>" alt="<?php echo $testimonial_img2['alt'] ?>">
                </div>
                <div class="review-profile-details">
                    <p><?php echo $testimonial2['testimonial_name2']; ?></p>
                    <p><?php echo $testimonial2['testimonial_title2']; ?></p>
                </div>
            </div>
        </div>

        <?php 
            $testimonial3 = get_field('testimonial3'); 
            $testimonial_img3 = $testimonial3['testimonial_image3'];

        ?>

        <div class="carousel-cell">
            <div class="review">
                <p><?php echo $testimonial3['testimonial_statement3']; ?></p>
            </div>
            <div class="review-profile-container">
                <div class="review-profile-pic">
                    <img src="<?php echo $testimonial_img3['url'] ?>" alt="<?php echo $testimonial_img3['alt'] ?>">
                </div>
                <div class="review-profile-details">
                    <p><?php echo $testimonial3['testimonial_name3']; ?></p>
                    <p><?php echo $testimonial3['testimonial_title3']; ?></p>
                </div>
            </div>
        </div>

        <?php 
            $testimonial4 = get_field('testimonial4'); 
            $testimonial_img4 = $testimonial4['testimonial_image4'];

        ?>

        <div class="carousel-cell">
            <div class="review">
                <p><?php echo $testimonial4['testimonial_statement4']; ?></p>
            </div>
            <div class="review-profile-container">
                <div class="review-profile-pic">
                    <img src="<?php echo $testimonial_img4['url'] ?>" alt="<?php echo $testimonial_img4['alt'] ?>">
                </div>
                <div class="review-profile-details">
                    <p><?php echo $testimonial4['testimonial_name4']; ?></p>
                    <p><?php echo $testimonial4['testimonial_title4']; ?></p>
                </div>
            </div>
        </div>

        <?php 
            $testimonial5 = get_field('testimonial5'); 
            $testimonial_img5 = $testimonial5['testimonial_image5'];

        ?>

        <div class="carousel-cell">
            <div class="review">
                <p><?php echo $testimonial5['testimonial_statement5']; ?></p>
            </div>
            <div class="review-profile-container">
                <div class="review-profile-pic">
                    <img src="<?php echo $testimonial_img5['url'] ?>" alt="<?php echo $testimonial_img5['alt'] ?>">
                </div>
                <div class="review-profile-details">
                    <p><?php echo $testimonial5['testimonial_name5']; ?></p>
                    <p><?php echo $testimonial5['testimonial_title5']; ?></p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-centered">
    <h1>Ready to get started?</h1>
    <h2>Let's talk about you and how I can be of help.</h2>

    <div class="two-btns-container">
        <div class="btn-container">
            <a href="#" class="btn">View projects</a>
        </div>

        <div class="btn-mobile-seperator">
        <p>Or</p>
        </div>

        <div class="btn-container">
            <a href="#" class="btn">Contact me</a>
        </div>
    </div>

    <div class="bg-transparent"></div>
</section>

<?php get_footer();?>