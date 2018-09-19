<article id="post-<?php the_ID(); ?>" <?php post_class( array('group', 'grid-item') ); ?>>
	<div class="post-inner post-hover">

		<h2 class="post-title entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php hu_the_post_thumbnail( apply_filters( 'hu_grid_thumb_size', 'thumb-medium' ), '', $placeholder = true, $placeholder_size = apply_filters( 'hu_grid_placeholder_size', 'thumb-medium' ) ); ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
			</a>
			<?php if ( hu_is_comment_icon_displayed_on_grid_item_thumbnails() ) : ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="far fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>
		</div><!--/.post-thumbnail-->

		<!--<div class="post-meta group">
			<p class="post-category"><?php the_category(' / '); ?></p>
			<?php get_template_part('parts/post-list-author-date'); ?>
		</div>post-meta-->

		

		<?php if (hu_get_option('excerpt-length') != '0'): ?>
		<!--<div class="entry excerpt entry-summary">
			<?php the_excerpt(); ?>
		</div>.entry
		<?php endif; ?>-->
		
		<div class="entry">
			<table>
				<tr>
					<td>Статус: <?php echo get_post_meta(get_the_ID(), 'Status', true); ?></td>
					<td>Дней с начала проекта: <?php echo get_post_meta(get_the_ID(), 'ActiveDays', true); ?></td>
				</tr>
				<tr>
					<td>Минмальная сумма вклада: <?php echo get_post_meta(get_the_ID(), 'minSum', true); ?></td>
					<td>Максимальная сумма вклада: <?php echo get_post_meta(get_the_ID(), 'maxSum', true); ?></td>
				</tr>
			</table>
		</div>

	</div><!--/.post-inner-->
</article><!--/.post-->