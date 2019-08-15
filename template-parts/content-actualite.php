<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */


$date= get_field_object('date');
$corps_de_texte = get_field_object('corps_de_texte');

?>
<section id="primary" class="content-area">
    <main id="main" class=" site-main">
        <div class="card m-1 " style="width: 555px;">
        <article <?php post_class('card-actualite-article'); ?>>
            <div class="card-actualite_content p-3">
                <?php the_title( '<h1 class="entry-title h4">', '</h1>' ); ?> <?= $date['value'] ?>
                <figure class="card_figure mb-3 mb-lg-0">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-555', array( 'class' => 'img-fluid article-lastposts-img' )) ?></a>
                </figure>
                <p><?= $corps_de_texte['value'] ?></p>
            </div>
        </article>
    </main><!-- #main -->
    <button type="button" class="btn btn-outline-danger ml-1 mt-3 mb-3">Lire la suite</button>
</section><!-- #primary -->