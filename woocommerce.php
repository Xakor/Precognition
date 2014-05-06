<?php get_header(); ?>
<div class="container_12">
    <div id="widget" class="grid_3 floatleft shadow footerfix">
        <?php get_sidebar(); ?>
    </div>
    <div id="content" class="grid_9 floatright shadow footerfix padding boxsizing">
         <?php woocommerce_content(); ?>
    </div>
</div>
<?php get_footer(); ?>