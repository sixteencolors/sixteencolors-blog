<form method="get" action="<?php echo home_url( '/' ); ?>">
    <label class="screen-reader-text" for="s">Search 16c News</label>
	<input type=search  name=s id=s value="<?php echo get_search_query(); ?>" placeholder="Search 16c News..." required />
	<input type=submit value=Search />
</form>
