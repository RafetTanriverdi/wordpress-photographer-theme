<?php
/*Template Name: about Page */
get_header(); ?>

<div class="about">



  <!--about page -->
  <div class="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url("Anasayfa"); ?>">Anasayfa</a> / </li>
      <li>
        <?php the_title(); ?>
      </li>
    </ul>
  </div>
  <div class="page-title">
    <?php the_title(); ?>
  </div>
  <hr>

  <div class="slogan">

    <div class="text">
      <h1>
        <?php the_field('slogan') ?>
      </h1>
      <p>
        <?php the_field('desc') ?>
      </p>
    </div>
    <div class="text-box">
      <p>
        <?php the_field('boxtext') ?>
      </p>

    </div>

  </div>

  <div class="card-row">
    <div class="card-colum">
      <div class="image">
        <img src="<?php the_field('profile') ?>">
      </div>
      <div class="footer">
        <div class="name">
          <?php the_field('name') ?>
        </div>
        <div class="job">
          <?php the_field('job') ?>
        </div>
        <div class="social-media">
          <a href="<?php the_field('faceurl') ?>"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="<?php the_field('insurl') ?>"><i class="fa-brands fa-instagram"></i></a>
          <a href="<?php the_field('wpurl') ?>"> <i class="fa-brands fa-whatsapp"></i></a>
          <a href="<?php the_field('phone') ?>"> <i class='bx bx-phone'></i></a>
          <a href="<?php the_field('mail') ?>"><i class="fa-regular fa-envelope"></i></a>
        </div>

      </div>
    </div>
    <div class="address">
      <img src="<?php the_field('adressimage') ?>">
    </div>
  </div>




  <div class="contact-box">
    <div class="text">
      <?php the_field('contact') ?>
    </div>
    <div class="button-box">
      <button><a href="<?php the_field('btnurl') ?>"><?php the_field('btntext') ?></a></button>

    </div>

  </div>


</div>

<?php get_footer(); ?>