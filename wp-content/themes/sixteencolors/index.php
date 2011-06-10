<?php get_header(); ?>
<section class=container>
    <div class=grid_9>
<?php get_template_part( 'loop', 'index' ); ?>
    </div>
    <div class=grid_9>
<?php get_sidebar(); ?>
    </div>
    <div class=clear></div>
</section>
<?php get_footer(); ?> 
