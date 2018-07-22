<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>

	<header class="post-header">	
		<h2 class="post-title"><?php the_title(); ?></h2>
	</header>

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
		$quote  = get_post_meta(get_the_ID(), 'tz_quote', true);
		$author = get_post_meta(get_the_ID(), 'tz_author_quote', true); 
	?>

	<?php if (!empty($quote)) : ?>
		<div class="quote-wrap clearfix">
			<blockquote>
				<?php echo $quote; ?>
			</blockquote>
		<?php if (!empty($author)) { ?>
			<cite>&mdash; <?php echo $author; ?></cite>
		<?php }?>
		</div>
	<?php endif; ?>

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