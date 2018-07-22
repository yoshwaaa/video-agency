<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php $url = get_post_meta(get_the_ID(), 'tz_link_url', true); ?>
	<?php if(!is_singular()) : ?>
	<header class="post-header">
		<h2 class="post-title">
			<a target="_blank" href="<?php echo $url; ?>" title="<?php echo $url; ?>"><span><?php the_title(); ?></span></a>
		</h2>
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

</article><!--//.post-holder-->