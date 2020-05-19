<?php get_header();?>

<div class="text-header-container">
    <h1><?php the_field('page_headline'); ?></h1>
    <h1 class="text-header-shadow rellax" data-rellax-speed="4"><?php the_field('page_headline'); ?></h1>
</div>

<?php
if (is_page('contact')) {
?>
<p><?php the_field('page_text'); ?></p>

<section>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
</section>

<?php }
?>

<!-- PROJECT PAGE -->

<?php
if (is_page('projects')) {
?>
<div class="projects-intro-grid-container">
    <ul>
        <p><?php the_field('page_text'); ?></p>
        <br>

        <div class="cta-container">
            <div class="down-arrow-icon">
                <?php the_field('cta_icon'); ?>
            </div>
            <a href="#projects"><?php the_field('cta_text'); ?></a>
        </div>
    </ul>

    <ul class="list-channels">
        <li>YouTube</li>
        <li>Television</li>
        <li>Socials</li>
    </ul>

    <ul class="list-industries">
        <li>Entertainment</li>
        <li>Music</li>
        <li>Food</li>
        <li>Corporate</li>
    </ul>
</div>

<section id="projects" class="section-centered section-centered--no-padding-bottom">
    <?php 
        $project1 = get_field('project1');
        $project2 = get_field('project2');
        $project3 = get_field('project3');
        $project4 = get_field('project4');
    ?>

    <div class="projects-container">

        <?php 
            $project1 = get_field('project1');
            $img1 = $project1['image'];
            $url = $img1['url'];
            $alt = $img1['alt'];

            $logo_img1 = $project1['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="100" data-tilt-reverse="true">
            <a href="<?php echo $project1['link']; ?>">
            <img src="<?php echo $img1['url'] ?>" alt="<?php $img1['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img1['url'] ?>" alt="<?php echo $logo_img1['alt'] ?>">
                </div>
            </a>
        </div>

        <?php 
            $project2 = get_field('project2');
            $img2 = $project2['image'];
            $url = $img2['url'];
            $alt = $img2['alt'];

            $logo_img2 = $project2['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="100" data-tilt-reverse="true">
            <a href="<?php echo $project2['link']; ?>">
            <img src="<?php echo $img2['url'] ?>" alt="<?php $img2['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img2['url'] ?>" alt="<?php echo $logo_img2['alt'] ?>">
                </div>
            </a>
        </div>

        <?php 
            $project3 = get_field('project3');
            $img3 = $project3['image'];
            $url = $img3['url'];
            $alt = $img3['alt'];

            $logo_img3 = $project3['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="100" data-tilt-reverse="true">
            <a href="<?php echo $project3['link']; ?>">
            <img src="<?php echo $img3['url'] ?>" alt="<?php $img3['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img3['url'] ?>" alt="<?php echo $logo_img3['alt'] ?>">
                </div>
            </a>
        </div>

        <?php 
            $project4 = get_field('project4');
            $img4 = $project4['image'];
            $url = $img4['url'];
            $alt = $img4['alt'];

            $logo_img4 = $project4['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="100" data-tilt-reverse="true">
            <a href="<?php echo $project4['link']; ?>">
            <img src="<?php echo $img4['url'] ?>" alt="<?php $img4['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img4['url'] ?>" alt="<?php echo $logo_img4['alt'] ?>">
                </div>
            </a>
        </div>

        <div class="bg-overlap"></div>
    </div>
</section>

<section class="client-container">
    <h1>Clients</h1>
    <div class="client-logo-container">
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/24k.png" alt="">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/ziggo.png" alt="">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/unilever.png" alt="">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/slam.png" alt="">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/opel.png" alt="">
        </div>
    </div>
</section>
<?php }
?>

<!-- PROJECT PAGE -->
<?php
if (is_page('about')) {
?>

<?php 
    $banner_photo = get_field('banner_photo');
?>
<section>
    <div class="banner-photo">
        <img src="<?php echo $banner_photo['url'] ?>" alt="<?php echo $banner_photo['alt'] ?>">
    </div>
</section>


<?php 
    $usp1 = get_field('usp_1');
    $usp2 = get_field('usp_2');
    $usp3 = get_field('usp_3');
?>

<div class="column-container"> 
    <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/a.svg" alt="video production">
            <h1><?php echo $usp1['usp_name'] ?></h1>
            <p><?php echo $usp1['usp_details'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/c.svg" alt="video production">
            <h1><?php echo $usp2['usp_name'] ?></h1>
            <p><?php echo $usp2['usp_details'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/b.svg" alt="video production">
            <h1><?php echo $usp3['usp_name'] ?></h1>
            <p><?php echo $usp3['usp_details'] ?></p>
        </div>
    </div>
</div>

<section class="profile-container section-centered--extra-padding">
    <div class="profile-photo">
        <?php 
            $profile_photo = get_field('profile_photo');
        ?>

        <img src="<?php echo $profile_photo['url'] ?>" alt="<?php echo $profile_photo['alt'] ?>">
    </div>

    <div class="profile-description">
        <h1><?php the_field('headline'); ?></h1>
        <p><?php the_field('description'); ?></p>
    </div>
</section>
<?php }
?>


<!-- FOOTER CTA FOR PROJECTS AND ABOUT PAGE -->

<?php
if (is_page(array('projects', 'about'))) {
?>
<section class="section-centered section-centered--extra-padding section-mobile-centered">
    <h1><?php the_field('footer_headline'); ?></h1>
    <h2><?php the_field('footer_subheadline'); ?></h2>

    <div class="one-btn-container">
        <div class="btn-container">

            <?php 
                $button1 = get_field('button1'); 
            ?>

            <a href="<?php echo $button1['button_link1']; ?>" class="btn"><?php echo $button1['button_text1']; ?></a>
        </div>
    </div>

    <div class="bg-transparent"></div>
</section>
<?php } 
?>


<?php get_footer();?>