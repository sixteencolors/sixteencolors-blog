<form role="search" method="get" action="<?php home_url( '/' ); ?>" >
	<div>
    <label class="screen-reader-text" for="s">Search 16c News</label>
	<input type=search value="<?php get_search_query(); ?>" name="s" id="s" placeholder="Search 16c News..." required />
	<input type=submit id="searchsubmit" value="Search" />
	</div>
</form>

