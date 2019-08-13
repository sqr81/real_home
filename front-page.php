<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastproprietes = get_posts( array(
	'numberposts' => 5,
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

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>
    
    <div class="entry-content container">
      <?php the_content() ?>
    </div>
  </article>

  <?php endwhile; ?>

  <?php else : ?>
  <div class="container py-5">
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
  </div>
  <?php endif; ?>

</main>

<section class="front-container">
  <?php if ( $lastproprietes ) : ?>
    <div class="front-proprietes_grid">
      <?php foreach ( $lastproprietes as $propriete ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'propriete' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= esc_url( home_url( '/' ) ) ?>/proprietes/" class="btn btn-outline-primary my-5"><?php _e('Toutes les proprietes', 'scratch'); ?></a>
  </div>
</section>

  <?php if ( $lastposts ) : ?>

    <section class="front-sticky-post container my-5">
      <?php foreach ( $lastposts as $post ) :
          setup_postdata( $post );	?>

        <article <?php post_class('sticky-post_article row'); ?>>
          <figure class="card_figure mb-0 col-sm-10 col-md-5 offset-sm-1">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-555', array( 'class' => 'img-fluid card-post_img' )) ?></a>
          </figure>
          
        </article>

      <?php endforeach; 
      wp_reset_postdata(); ?>
  </section>

<?php endif;?>



<?php get_footer(); ?>