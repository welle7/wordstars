<?php get_header(); ?>
<div class="wrapper">
		<div class="content">
	<?php while( have_posts() ): the_post(); ?>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php the_author(); ?>
		<?php the_date(); ?>
		<?php the_content(); ?>
		<p class="meta"><?php edit_post_link('Seite bearbeiten'); ?></p>
		<?php comments_template(); ?>

		<?php endwhile; ?>
		</div>
		<aside class="sidebar">
    <?php
    get_sidebar( $sidebar );
    ?>
</aside>
</div>
<?php get_footer(); ?>
