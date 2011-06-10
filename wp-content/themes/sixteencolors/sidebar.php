	<div class=primary>
<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<div id="blog-search">
				<?php get_search_form(); ?>
			</div>

			<h2 class=style_1>Archives</h2>
			<ul>
				<?php wp_get_archives( 'type=monthly&show_post_count=1' ); ?>
			</ul>

			<h2 class=style_1>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>

<?php endif; ?>
	</div>
<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div class=secondary>
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div>

<?php endif; ?>
