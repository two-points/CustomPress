<form role="search" method="get" class="searchform custompress-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="d-flex">
        <input type="text" class="s column column-75" name="s" placeholder="<?php esc_attr_e( 'Search this website...', 'custompress' ); ?>" value="<?php the_search_query(); ?>" >
        <div class="column column-25">
            <button class="button search-button" type="submit"><span class="dashicons dashicons-search"></span></button>
        </div>
    </div>
</form>
