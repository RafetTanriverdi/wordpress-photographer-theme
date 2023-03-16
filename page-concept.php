<?php /*Template Name: Concept Page */
get_header();
?>

<div class="custom-album">

    
  
<!--breadcrumb-->
<div class="breadcrumb">
    <ul>
        <li><a href="<?php echo home_url("Anasayfa");?>">Anasayfa</a> / </li>
        <li><?php the_title(); ?></li>
    </ul>
</div>
<div class="page-title"><?php the_title(); ?></div>
<hr>

<!--custom album post page-->

  

<div class="custom-album-gallery">
  <a href="<?php the_field('image1_1') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image1_1') ?>" >
  </a>
  <a href="<?php the_field('image1_2') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image1_2') ?>" >
  </a>
  <a href="<?php the_field('image1_3') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image1_3') ?>" >
  </a>
  <a href="<?php the_field('image1_4') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image1_4') ?>" >
  </a>
  <a href="<?php the_field('image2_1') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image2_1') ?>" >
  </a>
  <a href="<?php the_field('image2_2') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image2_2') ?>" >
  </a>
  <a href="<?php the_field('image2_3') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image2_3') ?>" >
  </a>
  <a href="<?php the_field('image2_4') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image2_4') ?>" >
  </a>
  <a href="<?php the_field('image3_1') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image3_1') ?>" >
  </a>
  <a href="<?php the_field('image3_2') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image3_2') ?>" >
  </a>
  <a href="<?php the_field('image3_3') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image3_3') ?>" >
  </a>
  <a href="<?php the_field('image3_4') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image3_4') ?>" >
  </a>
 


</div>

<div class="custom-album-gallery-2">
  <a href="<?php the_field('image1') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image1') ?>" >
  </a>
  <a href="<?php the_field('image2') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image2') ?>" >
  </a>
  <a href="<?php the_field('image3') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image3') ?>" >
  </a>
  <a href="<?php the_field('image4') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image4') ?>" >
  </a>
  <a href="<?php the_field('image5') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image5') ?>" >
  </a>
  <a href="<?php the_field('image6') ?>" data-fancybox="image-gallery">
    <img src="<?php the_field('image6') ?>" >
  </a>

</div>
  
</div>




<?php get_footer();?>