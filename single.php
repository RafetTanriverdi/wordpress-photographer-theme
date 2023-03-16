<?php if(have_posts()){the_post(); rewind_posts(); } ?>
    <?php if('albums' == get_post_type()) {?>
        <?php include(TEMPLATEPATH.'/single-albums.php');?>
        <?php } elseif ('places' == get_post_type()){ ?>
            <?php include(TEMPLATEPATH.'/single-places.php');?>
        <?php } ?>