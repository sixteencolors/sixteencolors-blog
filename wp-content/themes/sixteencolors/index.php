<?php get_header(); ?>
<section class=container>
    <div class=grid_8 id=blog>
<?php get_template_part( 'loop', 'index' ); ?>
    </div>
    <div class=grid_4 id=sidebar>
<?php get_sidebar(); ?>
    </div>
    <div class=clear></div>
</section>
<?php get_footer(); ?> 
