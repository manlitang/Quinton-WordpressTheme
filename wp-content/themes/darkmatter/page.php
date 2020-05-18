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
<?php }
?>

<?php get_footer();?>