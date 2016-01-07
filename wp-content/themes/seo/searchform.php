<?php
/*
 * Search form: Seo
 */
 ?>
 <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'seo' ); ?></label>
		<input type="text" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}"  value="Search" name="s" id="s" />


	</div>
</form>