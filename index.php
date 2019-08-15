<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */
get_header();
?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<?php get_footer() ?>


<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */
get_header();
?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 