<?php get_header(); ?>
	<?php while( have_posts() ): the_post(); ?>
	<div class="wrapper aktuell">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php the_content(); ?>
		<p class="meta"><?php edit_post_link('Seite bearbeiten'); ?></p>
		<?php comments_template(); ?>
	</div>
		<?php endwhile; ?>
<?php get_footer(); ?>
