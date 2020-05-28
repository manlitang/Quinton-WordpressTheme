<?php get_header();?>

<?php
if ( $post->post_parent == 0 ) {
?>
<div class="text-header-container">
    <h1><?php the_field('page_headline'); ?></h1>
    <h1 class="text-header-shadow rellax" data-rellax-speed="4"><?php the_field('page_headline'); ?></h1>
</div>
<?php
}
?>

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
if (is_page('work')) {
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

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="1000" data-tilt-reverse="true">
            <a href="<?php echo $project1['link']; ?>">
            <img src="<?php echo $img1['url'] ?>" alt="<?php $img1['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img1['url'] ?>" alt="<?php echo $logo_img1['alt'] ?>">
                </div>
                <div class="dark-overlay"></div>
            </a>
        </div>

        <?php 
            $project2 = get_field('project2');
            $img2 = $project2['image'];
            $url = $img2['url'];
            $alt = $img2['alt'];

            $logo_img2 = $project2['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="1000" data-tilt-reverse="true">
            <a href="<?php echo $project2['link']; ?>">
            <img src="<?php echo $img2['url'] ?>" alt="<?php $img2['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img2['url'] ?>" alt="<?php echo $logo_img2['alt'] ?>">
                </div>
                <div class="dark-overlay"></div>
            </a>
        </div>

        <?php 
            $project3 = get_field('project3');
            $img3 = $project3['image'];
            $url = $img3['url'];
            $alt = $img3['alt'];

            $logo_img3 = $project3['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="1000" data-tilt-reverse="true">
            <a href="<?php echo $project3['link']; ?>">
            <img src="<?php echo $img3['url'] ?>" alt="<?php $img3['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img3['url'] ?>" alt="<?php echo $logo_img3['alt'] ?>">
                </div>
                <div class="dark-overlay"></div>
            </a>
        </div>

        <?php 
            $project4 = get_field('project4');
            $img4 = $project4['image'];
            $url = $img4['url'];
            $alt = $img4['alt'];

            $logo_img4 = $project4['logo'];

        ?>

        <div class="project-image-container" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-perspective="8000" data-tilt-speed="1000" data-tilt-reverse="true">
            <a href="<?php echo $project4['link']; ?>">
            <img class="project-image-bg" src="<?php echo $img4['url'] ?>" alt="<?php $img4['alt'] ?>">
                <div class="logo-overlay">
                    <img src="<?php echo $logo_img4['url'] ?>" alt="<?php echo $logo_img4['alt'] ?>">
                </div>
                <div class="dark-overlay"></div>
            </a>
        </div>

        <div class="bg-overlap"></div>
    </div>
</section>

<section class="client-container section-centered--extra-padding-2">
    <h1>Clients</h1>
    <div class="client-logo-container">
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/ziggo.svg" alt="Ziggo">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/slamtv.svg" alt="Slam!TV">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/mtv.svg" alt="MTV">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/disney.svg" alt="Disney">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/24kitchen.svg" alt="24Kitchen">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/cola.svg" alt="Coca Cola">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/coop.svg" alt="Coop">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/unilever.svg" alt="Unilever">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/kilroy.svg" alt="Kilroy">
        </div>
        <div class="client-logo">
            <img src="<?php bloginfo('template_url');?>/img/client-logos/bunq.svg" alt="Bunq">
        </div>

    </div>
</section>
<?php }
?>

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
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/team.svg" alt="video production">
            <h1><?php echo $usp1['usp_name'] ?></h1>
            <p><?php echo $usp1['usp_details'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/editor.svg" alt="video production">
            <h1><?php echo $usp2['usp_name'] ?></h1>
            <p><?php echo $usp2['usp_details'] ?></p>
        </div>

        <div class="column">
            <img src="<?php bloginfo('template_url');?>/img/usp-icons/education.svg" alt="video production">
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

<?php
if ( $post->post_parent == '12' ) {
?>
<div class="text-header-container">
    <h1><?php single_post_title(); ?></h1>
    <h1 class="text-header-shadow rellax" data-rellax-speed="4"><?php single_post_title(); ?></h1>
    <p class="project-brief"><?php the_field('project_brief'); ?></p>
</div>

<?php if( get_field('video_link') ): ?>
<section>
    <div class="iframe-container">
        <iframe class="responsive-iframe" src="<?php the_field('video_link'); ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<?php endif; ?>


<?php if( get_field('video_file') ): ?>
<section>
    <div class="video-container">
        <video controls>
            <source src="<?php 
                    $vid = get_field('video_file'); 
                    $url = $vid['url'];
                    echo $url
                ?>" type="video/mp4">
        </video>
    </div>
</section>
<?php endif; ?>

<section class="project-details-grid-container">
    <?php if( get_field('client') ): ?>
    <div>
        <h1>Client</h1>
        <p><?php the_field('client'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('agency') ): ?>
    <div>
        <h1>Agency</h1>
        <p><?php the_field('agency'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('year') ): ?>
    <div>
        <h1>Year</h1>
        <p><?php the_field('year'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('episodes') ): ?>
    <div>
        <h1>Episodes</h1>
        <p><?php the_field('episodes'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('production') ): ?>
    <div>
        <h1>Production</h1>
        <p><?php the_field('production'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('direction') ): ?>
    <div>
        <h1>Direction</h1>
        <p><?php the_field('direction'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('camera_direction') ): ?>
    <div>
        <h1>Camera direction</h1>
        <p><?php the_field('camera_direction'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('camera') ): ?>
    <div>
        <h1>Camera</h1>
        <p><?php the_field('camera'); ?></p>
    </div>
    <?php endif; ?>

    <?php if( get_field('edit') ): ?>
    <div>
        <h1>Edit</h1>
        <p><?php the_field('edit'); ?></p>
    </div>
    <?php endif; ?>

</section>

<section class="project-description">
    <p><?php the_field('first_paragraph'); ?></p>
    <br>
    <p><?php the_field('second_paragraph'); ?></p>

    <div class="two-column-photo-container">
        <div class="project-photo">
            <?php 
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
            ?>
            <img src="<?php echo $image_1['url'] ?>" alt="<?php echo $image_1['alt'] ?>">
        </div>

        <div class="project-photo">
            <img src="<?php echo $image_2['url'] ?>" alt="<?php echo $image_2['alt'] ?>">
        </div>
    </div>

    <p><?php the_field('third_paragraph'); ?></p>

    <div class="two-column-photo-container">
        <div class="project-photo">
            <?php 
                $image_3 = get_field('image_3');
                $image_4 = get_field('image_4');
            ?>
            <img src="<?php echo $image_3['url'] ?>" alt="<?php echo $image_3['alt'] ?>">
        </div>

        <div class="project-photo">
            <img src="<?php echo $image_4['url'] ?>" alt="<?php echo $image_4['alt'] ?>">
        </div>
    </div>

</section>

<?php }
?>


<!-- FOOTER CTA FOR PROJECTS AND ABOUT PAGE -->

<?php
if (is_page(array('work', 'about'))) {
?>
<section class="section-centered section-centered--extra-padding section-mobile-centered position-relative">
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