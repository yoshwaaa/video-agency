<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php if(!is_singular()) : ?>
	<header class="post-header">
		<?php if(is_sticky()) : ?>
			<h5 class="post-label"><?php echo theme_locals("featured");?></h5>
		<?php endif; ?>
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

	<?php get_template_part('includes/post-formats/post-thumb'); ?>
	
	<?php if(!is_singular()) : ?>
	<!-- Post Content -->
	<div class="post_content">
		<?php $post_excerpt = of_get_option('post_excerpt'); ?>
		<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
			<div class="excerpt">
			<?php 
				$content = get_the_content();
				$excerpt = get_the_excerpt();
			if (has_excerpt()) {
				the_excerpt();
			} else {
				if (!is_search()) {
					echo my_string_limit_words($content,48);
				} else {
					echo my_string_limit_words($excerpt,48);
				}
			} ?>
			</div>
		<?php } 
			$button_text = of_get_option('blog_button_text') ? of_get_option('blog_button_text') : theme_locals("read_more") ;
		?>
		<a href="<?php the_permalink() ?>" class="btn btn-primary btn-large"><?php echo $button_text; ?></a>

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

	<?php else :?>
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
	<?php endif; ?>

</article>