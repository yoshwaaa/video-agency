<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			 the_content( sprintf(
			 	__( 'Continue reading %s', 'twentyfifteen' ),
			 	the_title( '<span class="screen-reader-text">', '</span>', false )
			 ) );

			
        ?>
        
	</div><!-- .entry-content -->

</article><!-- #post-## -->
