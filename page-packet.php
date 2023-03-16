<?php
/*Template Name: packets Page */ 
get_header();?>



<div class="packets">

    
    
<!--breadcrumb-->
<div class="breadcrumb">
    <ul>
        <li><a href="<?php echo home_url("Anasayfa");?>">Anasayfa</a> / </li>
        <li><?php the_title(); ?></li>
    </ul>
</div>
<div class="page-title"><?php the_title(); ?></div>
<hr>

<!--card images-->
<div class="image-gallery">
    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <a href="<?php the_field('paket1') ?>" data-fancybox="responsive">

            <img class="card-img" src="<?php the_field('paket1') ?>" alt="Image 1" />
          </a>
          
        </div>
      </div>
      <div class="grid-item">
        <a href="<?php the_field('paket2') ?>" data-fancybox="responsive">

          <img class="card-img" src="<?php the_field('paket2') ?>" alt="Image 2" />
        </a>
        
      </div>
      <div class="grid-item">
        <a href="<?php the_field('paket3') ?>" data-fancybox="responsive">

          <img class="card-img" src="<?php the_field('paket3') ?>" alt="Image 3" />
        </a>
        
      </div>
      <div class="grid-item">
        <a href="<?php the_field('paket4') ?>" data-fancybox="responsive">

          <img class="card-img" src="<?php the_field('paket4') ?>" alt="Image 4" />
        </a>
        
      </div>
    
      </div>
      <!-- Additional grid-items for more images -->
    </div>
</div>
  
</div>

<?php get_footer();?>