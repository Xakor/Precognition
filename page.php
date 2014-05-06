<?php get_header(); ?>
<div class="container_12">
    <div id="widget" class="grid_4 floatleft shadow footerfix">
        <?php get_sidebar(); ?>
    </div>
    <div id="content" class="grid_8 floatright shadow footerfix">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>

                    <div  id="content_entity" class="grid_8 padding boxsizing">
                        <div id="content_title">
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div id="content_date">
                            <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                        </div>
                        <div id="content_text">
                            <?php the_content(); ?>
                        </div>
                        <div id="content_metadata">
                            <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                        </div>
                    </div>

                    <?php
                } // end while
            } // end if
        ?>
    </div>
</div>
<?php get_footer(); ?>