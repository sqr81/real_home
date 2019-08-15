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

$lastpropriete = get_posts( array(
    'numberposts' => 4,
    'post_type' => 'propriete', /*le slug du CPTU propriété - a changer si demenagé */
    'orderby' => 'rand'
) );

?>

<?php 
  $nombreDeChambres = get_field_object('nombre_de_chambres');
  $surface = get_field_object('surface');
  $informations = get_field_object('informations');
  $prix = get_field_object('prix');
  $description = get_field_object('description');
  $ville = get_field_object('ville');
  ?>

    <section id="primary" class="content-area container mt-5">
        <main id="main" class="site-main">

            <article <?php post_class('card-propriete-article'); ?>>
                <div class="card-propriete_content d-flex">
                    <div class="image_propriete pr-5 mt-3">
                    <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
                    <P><?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
                    </div>
                    <div class="carac_propriete mt-5">
                    
                    <P><strong><?= $prix['value'] ?> <?= $prix['append'] ?></strong></p>
                    <hr/>
                    <P> <?= $ville['label'] ?> : <strong><?= $ville['value'] ?></strong></p>
                    <P><?= $nombreDeChambres['label'] ?> : <strong><?= $nombreDeChambres['value'] ?></strong></p>
                    <P> <?= $surface['label'] ?> : <strong><?= $surface['value'] ?> <?= $surface['append'] ?></strong></p>
                    <P> <?= $informations['label'] ?> : <strong><?= $informations['value'] ?> <?= $informations['append'] ?></strong></p>
                    <p><?= $description['value'] ?> </p>
                    <hr/>
                    </div>
                </div>
                <hr/>
            </article>

        </main><!-- #main -->
    </section><!-- #primary -->

    <section class="container">
        <div class="titre_nos_propriétés text-center m-5">
            <h3>Nos propriétés</h3>
        </div>
        <?php if ( $lastpropriete ) : ?>
            <div class=" row front-proprietes_grid">
                <?php foreach ( $lastpropriete as $post ) :
                    setup_postdata( $post );

                    get_template_part( 'template-parts/content', 'propriete' ); /* renvoi vers templatepart > contentpriopriete */

                endforeach;
                wp_reset_postdata(); ?>
            </div>
        <?php endif;?>
        <div class="text-center">
            <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-primary my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
        </div>
    </section>

<?php get_footer() ?>
<?php

