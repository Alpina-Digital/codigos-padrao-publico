<?php

// SINGLE PAGE //
  
//   Exibir a foto do autor do POST
  <?= get_avatar( get_post_field( 'post_author', get_the_ID() )); ?>

// Exibir o primeiro e o último nome do autor na página single.php
  <?= get_the_author_meta('first_name', $post->post_author); ?> 
  <?= get_the_author_meta('last_name', $post->post_author); ?>

// Exibir a descrição do autor na página single.php
  <?= get_the_author_meta('user_description', $post->post_author); ?>

// Exibir a data de publicação do post
  <?= get_the_date();?>

// thumbnail url
<?= post_thumbnail_url( 'full' ); ?>


// ARCHIVE //



//CATEGORY //
