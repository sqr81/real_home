<?php 
  $nombreDeChambres = get_field_object('nombre_de_chambres');
  $surface = get_field_object('surface');
  $informations = get_field_object('informations');
  $prix = get_field_object('prix');
  $description = get_field_object('description');
  $ville = get_field_object('ville');
  ?>


<article <?php post_class('card-propriete-article col-md-4'); ?>>
  <a class="card-spot_link" href="<?php the_permalink(); ?>">
    <div class="card" style="width: 350px;">
      <figure class="card-propriete-figure mb-0">
        <?= get_the_post_thumbnail($post->ID, 'thumb-555', array('class' => 'img-fluid card-propriete_img')) ?>
      </figure>
      <div class="card-body justify-content-center">
        <?php the_title('<h2 class="entry-title h4">', '</h2>'); ?>
        <p><?= $ville['label'] ?> : <strong><?= $ville['value'] ?> <?= $ville['append'] ?></strong></p>
        <p><?= $prix['label'] ?> : <strong><?= $prix['value'] ?> <?= $prix['append'] ?></strong></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between">
        <strong class=""><?= $surface['value'] ?> <?= $surface['append'] ?></strong>
        <strong><?= $nombreDeChambre['value'] ?> <?= $nombreDeChambre['append'] ?></strong> 
        <strong><?= $informations['value']?> <?= $informations['append'] ?></strong>
      </li>
      </ul>
    </div>
  </a>
</article>