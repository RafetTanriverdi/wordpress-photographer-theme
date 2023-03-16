<?php
/*Template Name: Video Clips Page */
get_header(); ?>

<!--video page -->


<div class="video">



  <!--breadcrumb-->
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

  <!--video page-->


  <div class="video-gallery">
    <?php $query = new WP_Query('post_type=videos'); ?>
    <?php if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post(); ?>

        <a href="<?php the_field('url') ?>" data-fancybox="video-gallery">
          <img src="<?php the_field('kpkimage') ?>" alt="Video 1">
          <div class="video-focus">
            <i class="fa-regular fa-circle-play"></i>
          </div>
        </a>

      <?php endwhile; else: ?>
      <p>
        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
      </p>
    <?php endif; ?>

  </div>

</div>
<?php get_footer(); ?>