<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package scratch
 */


get_header(); 
?>
<header class="entry-header main-header py-5">
  <div class="title_propriete text-center">
    <h1>Propriétés</h1>
  </div>
</header>

<div class="container py-5">
  <main>
    <?php if (have_posts()) : ?>
    <section class="py5  section-archive-proprietes container">
        <div class="row front-propriete-grid">
           <?php while (have_posts()) : the_post(); ?>
               <?php get_template_part( 'template-parts/content', 'propriete' ); ?>
           <?php endwhile; ?>
        </div>
    </section>
    <?php the_posts_pagination(); ?>

    <?php else : ?>
    <div class="container py-5">
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
    </div>
    <?php endif; ?>

  </main>

</div>

<?php get_footer(); ?>