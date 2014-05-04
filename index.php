<?php get_header(); ?>
<div class="container_12">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>

                <div class="grid_8 pull_1">
                    <div class="grid_8">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="grid_8">
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    </div>
                    <div class="grid_8">
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="grid_8">
                        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                    </div>
                </div>

                <?php
            } // end while
        } // end if
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>