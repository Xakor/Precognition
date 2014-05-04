<?php get_header(); ?>
<section class="eleven columns row">
  <div class="flexslider">
    <ul class="slides">

        <?php
        query_posts(array('category_name' => 'Featured', 'posts_per_page' => 3));
        if(have_posts()) : while(have_posts()) : the_post();
        ?>

          <li class="featured-post">
            <?php the_post_thumbnail(); ?>
            <div class="caption">
                <a href="#" class="post-title"><?php the_title();?></a>
                <?php the_excerpt(); ?>
                <a href="#" class="readmore">Read More</a>
            </div>
          </li>

        <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
    </ul>
  </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>