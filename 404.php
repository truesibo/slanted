<?php get_header(); ?>

<section class="content">
	<div class="pad group">
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div>
		
		<div class="entry">
			<p><?php _e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'slanted' ); ?></p>
		</div>
		
	</div><!--/.pad-->
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>