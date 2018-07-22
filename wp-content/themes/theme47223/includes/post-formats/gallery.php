<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php if(!is_singular()) : ?>
	<header class="post-header">
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
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

	<?php $random = gener_random(10); ?>

	<script type="text/javascript">
		jQuery(window).load(function() {
			jQuery('#flexslider_<?php echo $random ?>').flexslider({
				animation: "slide",
				smoothHeight: true
			});
		});
	</script>
		
		<!-- Gallery Post -->
		<div class="gallery-post">
			
			<!-- Slider -->
			<div id="flexslider_<?php echo $random ?>" class="flexslider thumbnail">
				<ul class="slides">
					<?php 
						$args = array(
							'orderby'        => 'menu_order',
							'order'          => 'ASC',
							'post_type'      => 'attachment',
							'post_parent'    => get_the_ID(),
							'post_mime_type' => 'image',
							'post_status'    => null,
							'numberposts'    => -1,
						);
						$attachments = get_posts($args);
					
						if ($attachments) :
						foreach ($attachments as $attachment) :
							$attachment_url = wp_get_attachment_image_src( $attachment->ID, 'full' );
							$url            = $attachment_url['0'];
							$image          = aq_resize($url, 800, 400, true);
					?>
					
					<li><img src="<?php echo $image; ?>" alt="<?php echo apply_filters('the_title', $attachment->post_title); ?>"/></li>
					
					<?php 
						endforeach;
						endif;
					?>
					
				</ul>
			</div>
			<!-- /Slider -->
		</div>
		<!-- /Gallery Post -->

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