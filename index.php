<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="wrapper">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php the_content(); ?>
		<p class="meta"><?php edit_post_link('Seite bearbeiten'); ?></p>
		<?php comments_template(); ?>
	</div>
		<?php endwhile; else: ?>
<?php endif; ?>
<?php get_footer(); ?>
