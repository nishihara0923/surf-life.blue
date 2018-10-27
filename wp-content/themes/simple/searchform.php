<div class="search-aria">
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<dl class="search-form">
<dt><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></dt>
<dd><button id="searchsubmit" type="submit"></button></dd>
</dl>
</form>
</div>