<form action="/" method="get">
  <div class="search-form">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
    <input type="image" alt="search" src="<?php bloginfo( 'template_url' ); ?>/src/assets/images/search.svg" class="search-icon" />
  </div>
</form>