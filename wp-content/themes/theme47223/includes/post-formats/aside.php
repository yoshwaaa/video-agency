<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>

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
		<?php the_content('<span>' . theme_locals('continue_reading') . '</span>'); ?>
		<!--// Post Content -->

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

</article><!--//.post__holder-->