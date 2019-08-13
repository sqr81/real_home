<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastproprietes = get_posts( array(
	'numberposts' => 9,
  'post_type' => 'propriete',
  'orderby' => 'rand'
) );

$lastposts = get_posts( array(
	'posts_per_page' => 1,
  'post__in' => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1
) );

get_header(); 
?>

<section class="py-5 front-proprietes container">
  <?php if ( $lastproprietes ) : ?>
    <div class="row front-proprietes_grid">
      <?php foreach ( $lastproprietes as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'propriete' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
</section>



<?php get_footer(); ?>