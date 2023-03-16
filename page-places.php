<?php
/*Template Name: Places Page */
get_header(); ?>


<!--places page -->


<div class="places">



  <!--breadcrumb-->
  <div class="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url("Anasayfa"); ?>">Anasayfa</a> / </li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>
  <div class="page-title"><?php the_title(); ?></div>
  <hr>

  <!--places-->
  <div class="image-gallery">
    <div class="grid">
      <?php $args = array('post_type' => 'places');
      $query = new WP_Query($args) ?>
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="grid-item">
          <div class="card">

            <a href="<?php the_permalink(); ?>"><img class="card-img" src="<?php the_field('kapak_image') ?>" /></a>
            <button class="button-places"> <a href="<?php the_permalink(); ?>"> <?php the_field('buttontext') ?></a></button>
            <hr class="full">
          </div>
        </div>
      <?php endwhile;  ?>
      

      <!-- Additional grid-items for more images -->
    </div>
  </div>

</div>




<?php get_footer(); ?>