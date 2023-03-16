
<?php 
/*Template Name: FAQ Page */ 
get_header(); ?>



<div class="faq">

    
    
    <!--faq page -->
    <div class="breadcrumb">
    <ul>
        <li><a href="<?php echo home_url("Anasayfa");?>">Anasayfa</a> / </li>
        <li><?php the_title(); ?></li>
    </ul>
    </div>
    <div class="page-title"><?php the_title(); ?></div>
    <hr>
    <!-- dropdown menu-->
  <section>
    <div class="container">
        <div class="accordion">
            <?php $query =new WP_Query('post_type=faqs'); ?>
        <?php if ($query-> have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="accordion-item" id="<?php the_field('id') ?>">
                <a class="accordion-link"  href="#<?php the_field('id') ?>">
                <?php the_field('ask') ?>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </a>
                <div class="answer">
                    <p><?php the_field('question') ?></p>
                </div>                    
            </div>

            <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
           
            </div>
        </div>
    </div>
  </section>
</div>



<?php get_footer();?>