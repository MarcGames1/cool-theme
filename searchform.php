<form role='search' method='get' action='<?php echo esc_url( home_url('/') )?>' >
    <input type='search' name='s' placeholder="<?php __('Search','_themename_') ?>" value='<?php echo esc_attr__(  get_search_query(  ) )  ?>'/>
    <button type='submit'>Search</button>
</form>