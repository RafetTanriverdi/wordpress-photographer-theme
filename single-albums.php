<?php
get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="custom-album">




    <!--breadcrumb-->
    <div class="breadcrumb">
        <ul>
            <li><a href="<?php echo home_url("Anasayfa"); ?>">Anasayfa</a> / </li>
            <li><?php the_field('title') ?></li>
        </ul>
    </div>
    <div class="page-title"><?php the_field('title') ?></div>
    <hr>

    <!--custom album post page-->
    <div class="video-container">
        <?php the_field('url') ?>
    </div>


    <div class="custom-album-gallery">
        <a href="<?php the_field('image1_1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image1_1') ?>">
        </a>
        <a href="<?php the_field('image1_2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image1_2') ?>">
        </a>
        <a href="<?php the_field('image1_3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image1_3') ?>">
        </a>
        <a href="<?php the_field('image1_4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image1_4') ?>">
        </a>
        
        <a href="<?php the_field('image2_1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image2_1') ?>">
        </a>
        <a href="<?php the_field('image2_2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image2_2') ?>">
        </a>
        <a href="<?php the_field('image2_3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image2_3') ?>">
        </a>
        <a href="<?php the_field('image2_4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image2_4') ?>">
        </a>
        
        <a href="<?php the_field('image3_1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image3_1') ?>">
        </a>
        <a href="<?php the_field('image3_2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image3_2') ?>">
        </a>
        <a href="<?php the_field('image3_3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image3_3') ?>">
        </a>
        <a href="<?php the_field('image3_4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image3_4') ?>">
        </a>
        <a href="<?php the_field('image4_1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image4_1') ?>">
        </a>
        <a href="<?php the_field('image4_2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image4_2') ?>">
        </a>
        <a href="<?php the_field('image4_3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image4_3') ?>">
        </a>
        <a href="<?php the_field('image4_4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image4_4') ?>">
        </a>
        
        <a href="<?php the_field('image5_1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image5_1') ?>">
        </a>
        <a href="<?php the_field('image5_2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image5_2') ?>">
        </a>
        <a href="<?php the_field('image5_3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image5_3') ?>">
        </a>
        <a href="<?php the_field('image5_4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('image5_4') ?>">
        </a>
        


    </div>

    <div class="custom-album-gallery-2">
        <a href="<?php the_field('singleimage1') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage1') ?>">
        </a>
        <a href="<?php the_field('singleimage2') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage2') ?>">
        </a>
        <a href="<?php the_field('singleimage3') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage3') ?>">
        </a>
        <a href="<?php the_field('singleimage4') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage4') ?>">
        </a>
        <a href="<?php the_field('singleimage5') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage5') ?>">
        </a>
        <a href="<?php the_field('singleimage6') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage6') ?>">
        </a>
        <a href="<?php the_field('singleimage7') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage7') ?>">
        </a>
        <a href="<?php the_field('singleimage8') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage8') ?>">
        </a>
        <a href="<?php the_field('singleimage9') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage9') ?>">
        </a>
        <a href="<?php the_field('singleimage10') ?>" data-fancybox="image-gallery">
            <img src="<?php the_field('singleimage10') ?>">
        </a>
       


    </div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>