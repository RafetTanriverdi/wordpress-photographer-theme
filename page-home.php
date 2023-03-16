<?php 
/*Template Name: Home Page */ 
get_header();?>
  <div class="home_content" >
   <div class="slider-container" id="vertical-slider" >
      <div class="left-slide">
        <div style="background-color: <?php the_field('color1') ?>;"class="slide ">
          <h2><?php the_field('title1_1') ?></h2>
          <h1><?php the_field('title1_2') ?></h1>
          <hr>
          <p><?php the_field('text1') ?></p>
          <button class="reservation"  ><a href="<?php the_field('btnurl1') ?>"><?php the_field('btntext1') ?></a></button>
        </div>
        <div style="background-color: <?php the_field('color2') ?>;"class="slide ">
        <h2><?php the_field('title2_1') ?></h2>
          <h1><?php the_field('title2_2') ?></h1>
          <hr>
          <p><?php the_field('text2') ?></p>
          <button class="reservation"  ><a href="<?php the_field('btnurl2') ?>"><?php the_field('btntext2') ?></a></button>
        </div>
        <div style="background-color: <?php the_field('color3') ?>;"class="slide ">
        <h2><?php the_field('title3_1') ?></h2>
          <h1><?php the_field('title3_2') ?></h1>
          <hr>
          <p><?php the_field('text3') ?></p>
          <button class="reservation"  ><a href="<?php the_field('btnurl3') ?>"><?php the_field('btntext3') ?></a></button>
        </div>
        
        <div style="background-color: <?php the_field('color4') ?>;"class="slide ">
        <h2><?php the_field('title4_1') ?></h2>
          <h1><?php the_field('title4_2') ?></h1>
          <hr>
          <p><?php the_field('text4') ?></p>
          <button class="reservation"  ><a href="<?php the_field('btnurl3') ?>"><?php the_field('btntext4') ?></a></button>
        </div>
        

      </div>
      
      
      <div class="right-slide">
        <div  style="background-image: url(<?php the_field('img4') ?>);" class="slide slide1"></div>
        <div  style="background-image: url(<?php the_field('img3') ?>);" class="slide slide2"></div>
        <div  style="background-image: url(<?php the_field('img2') ?>);" class="slide slide3"></div>
        <div  style="background-image: url(<?php the_field('img1') ?>);" class="slide slide4"></div>
      </div>
      
      
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-chevron-down"></i>
          
        </button>
        <button class="up-button">
          <i class="fas fa-chevron-up"></i>
        </button>
      </div>
    </div>
    

    
  </div>
<?php get_footer();?>