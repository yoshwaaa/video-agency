<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
<?php if(!is_singular()) : ?>
	<header class="post-header">
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</header>
<?php else : ?>
	<header class="post-header">	
		<h2 class="post-title"><?php the_title(); ?></h2>
	</header>
<?php endif; ?>

	<?php

		$args = array(
			'meta_elements' => array(
				'start_unite',
					'date',
				'end_unite',
				'start_unite',
					'author',
					'categories',
					'tags',
				'end_unite',
			),
			'meta_class' => 'post_meta top'
		);
		get_post_metadata($args);

	?>

	<?php 
		if (has_post_thumbnail() ){
			$lightbox = (get_post_meta(get_the_ID(), 'tz_image_lightbox', TRUE)== 'yes')?TRUE:FALSE;
			$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( '9999','9999' ), false, '' ); ?>
			<div class="post-thumb clearfix">
			<?php
				$thumb      = get_post_thumbnail_id();
				$img_url    = wp_get_attachment_url( $thumb,'full'); //get img URL
				$img_before = '';
				$img_after  = '';
				$img_attr   = (of_get_option('load_image') == 'false' || of_get_option('load_image')=="")?'src="':'data-src="';
				$image      = $img_attr.aq_resize( $img_url, 670, 325, true ).'"'; //resize & crop img
				
				if($lightbox){
					$img_before = '<a class="image-wrap" rel="prettyPhoto" title="'.get_the_title().'" href="'.$src[0].'">';
					$img_after  = '<span class="zoom-icon"></span></a>';
				}
			?>
			<figure class="featured-thumbnail thumbnail large">
				<?php echo $img_before.'<img '.$image.' alt="'.get_the_title().'"/>'.$img_after; ?>
			</figure>
			<div class="clear"></div>
		</div>
		<?php }
	?>
	<!-- Post Content -->
	<div class="post_content">
		<?php the_content(''); ?>

		<?php

			$args = array(
				'meta_elements' => array(
					'start_unite',
						'comment',
						'like',
						'dislike',
						'views',
						'permalink',
					'end_unite',
				),
				'meta_class' => 'post_meta comment'
			);
			get_post_metadata($args);

		?>

		<div class="clear"></div>
	</div>
	<!-- //Post Content -->
</article><!--//.post__holder-->