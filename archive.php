<?php get_header(); ?>

<div class="content-title">

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<?php printf('%s', single_cat_title('', false)); ?>
		<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
		<?php printf(__('Posts tagged &quot;%s&quot;', 'sight'), single_tag_title('', false)); ?>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<?php printf(_c('Daily archive %s'), get_the_time('M j, Y')); ?>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php printf(_c('Monthly archive %s'), get_the_time('F, Y')); ?>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<?php printf(_c('Yearly archive %s'), get_the_time('Y')); ?>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<?php _e('Author Archive', 'sight'); ?>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<?php _e('Blog Archives', 'sight'); ?>
		<?php } ?>

	<a href="javascript: void(0);" id="mode"<?php if (isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php get_template_part('loop'); ?>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
