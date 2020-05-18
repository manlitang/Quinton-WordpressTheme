<?php get_header();?>

<div class="text-header-container">
    <h1><?php the_field('page_headline'); ?></h1>
    <h1 class="text-header-shadow rellax" data-rellax-speed="4"><?php the_field('page_headline'); ?></h1>
</div>

<?php
if (is_page( 'projects' )) {
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
<?php }
?>

<?php get_footer();?>