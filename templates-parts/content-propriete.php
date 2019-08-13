<article <?php post_class('card-propriete-article'); ?>>
  <a class="card-propriete_link" href="<?php the_permalink(); ?>">
    <figure class="card-propriete-figure mb-0">
      <?= get_the_post_thumbnail($post->ID, 'thumb-555', array( 'class' => 'img-fluid card-propriete_img' )) ?>
    </figure> 
    <div class="card-propriete_content p-3">
      <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
      <p class="card-propriete_excerpt"><?= wp_trim_words( get_the_content(), 20, '...' ); ?></p>
      <button class="card-propriete_btn btn btn-outline-light"><?php _e( 'Read More', 'scratch' ) ?></button>
    </div>
  </a>
</article>