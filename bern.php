<?php 
/*
Template Name: bern
*/
get_header(); ?>
<div class="wrapper statisch2">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?><p class="meta"><?php edit_post_link('Seite bearbeiten'); ?></p>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php //include (TEMPLATEPATH . '/sidebar2.php'); ?>
<?php get_footer(); ?>
