<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
    <label class="screen-reader-text" for="s">Search 16c News</label>
	<input type=search value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search 16c News..." required />
	<input type=submit id="searchsubmit" value="Search" />
</form>

