<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foto Anıl Sır</title>
  <?php wp_head(); ?>
</head>
<body>



  <div class="sidebar" onmouseover="onSidebar()" onmouseout="offSidebar()">
    <div class="logo_content">
      <i class='bx bx-menu' id="btn"  ></i>
      <i class='bx bx-menu' id="btn-m"  ></i>
      <a class="logo" href="<?php echo home_url("Anasayfa");?>">
      <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/Anıl Sır.png" alt="">
        
      </a>
    </div>

    <ul class="nav_list" >

      <?php

      wp_nav_menu( array(

      'theme_location'  => 'primary',
      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'ul',
      'container_class' => 'nav_list',

      ) );

?>
    </ul>
    <div class="fav-icon">
      <img class="img " src="<?php echo get_site_icon_url();?>" >
    </div>
    <div class="footer-sidebar">
      <div class="social-footer">
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-solid fa-phone"></i></a>
      </div>
      
      <hr>
      <div class="copyright"><a href="https://www.rafettanriverdi.com/">&copy;AnılSır</a></div>
    </div>
    
  </div>
