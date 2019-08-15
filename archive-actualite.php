<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastactualites = get_posts( array(
	'numberposts' => 9,
  'post_type' => 'actualite',
  'orderby' => 'rand'
) );

$lastposts = get_posts( array(
	'posts_per_page' => 1,
  'post__in' => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1
) );

get_header(); 
?>

<section class="py-5 front-actualites container d-flex ">
    <article>
        <div class="title_actualite text-center m-5">
            <h1>Nos actualités</h1>
        </div>
        <?php if ( $lastactualites ) : ?>
        <div class="row front-actualites_grid d-flex flex-column">
            <?php foreach ( $lastactualites as $post ) :
                setup_postdata( $post );	
                get_template_part( 'template-parts/content', 'actualite' );
            endforeach;    
            wp_reset_postdata(); ?>
        </div>
        <?php endif;?>
        
    </article>
    <aside>
        <div class="navActu">
            <h4>Catégories</h4>
            <ul>
                <li>Achats</li>
                <li>Ventes</li>
                <li>News></li>
                <li>Design</li>
            </ul>
            <h4>Archives</h4>
            <ul>
                <li>Janvier 2020</li>
                <li>Décembre 2019</li>
                <li>Novembre 2019</li>
            </ul>
        </div>
    </aside>
</section>



<?php get_footer(); ?>

