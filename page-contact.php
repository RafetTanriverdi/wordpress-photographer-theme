<?php 
/*Template Name: Contact Page */ 
get_header(); ?>

<div class="contact">
   
       
     
   <!--contact page -->

   <div class="breadcrumb">
       <ul>
           <li><a href="<?php echo home_url("Anasayfa");?>">Anasayfa</a> / </li>
           <li><?php the_title(); ?></li>
       </ul>
   </div>
   <div class="page-title"><?php the_title(); ?></div>
   <hr>
   
   <div class="map" id="maps">
       <iframe src="<?php the_field('map') ?>"></iframe>
   </div>

   <div class="contact-main">
       <div class="adress">
           <h1 class="before" ><?php the_field('adres_title') ?></h1>
           <a href="https://wa.me/9<?php the_field('wp') ?>">
               <i class="fa-brands fa-whatsapp"></i><?php the_field('wp') ?>
           </a>
           <a href="tel:<?php the_field('phone') ?>">
               <i class='bx bx-phone' > </i><?php the_field('phone') ?>   
           </a>
           <a href="mailto:<?php the_field('mail') ?>">
               <i class="fa-regular fa-envelope"></i> <?php the_field('mail') ?>
           </a>
           <a href="#maps" class="map">
               <i class="fa-solid fa-location-dot"></i><?php the_field('maptext') ?>
           </a>
       </div>
       <div class="why-section">
           <h1 class="before"><?php the_field('title') ?></h1>
           <p><?php the_field('desc') ?></p>
       </div>
   </div>
   <div class="wp">
       <h1><?php the_field('teklif') ?></h1>
       <a href="https://wa.me/<?php the_field('wp') ?>"><?php the_field('teklifslogan') ?></a>
   </div>




</div>


<?php get_footer();?>