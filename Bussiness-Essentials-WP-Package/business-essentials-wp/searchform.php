<!-- START OF SEARCHBOX -->

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    
<?php $searchresults = get_search_query(); ?>
<?php if ($searchresults != ('')){ ?>
<input type="text" value="<?php echo get_search_query(); ?>" id="searchBox" name="s" class="bar" onblur="if(this.value == '') { this.value = '<?php _e( 'search', 'essentials' ); ?>'; }" onfocus="if(this.value == '<?php _e( 'search', 'essentials' ); ?>') { this.value = ''; }" />

<?php } else { ?>

<input type="text" value="<?php _e( 'search', 'essentials' ); ?>" id="searchBox" name="s" class="bar" onblur="if(this.value == '') { this.value = '<?php _e( 'search', 'essentials' ); ?>'; }" onfocus="if(this.value == '<?php _e( 'search', 'essentials' ); ?>') { this.value = ''; }" />

<?php } ?>

<span class="searchme"></span>
</form>

<!-- END OF SEARCHBOX -->
            	