<?php
/*
Template Name: spalten
*/
$page_ID = $post->ID;
$args = array(
'post_type' => 'page',
'post_parent' => $page_ID,
'orderby' => 'menu_order',
'order' => 'ASC'
);
?>
<?php get_header(); ?>
<div class="wrapper">
<?php
$subpages_query = new WP_Query( $args );
if ( $subpages_query->have_posts() ) : while (
$subpages_query->have_posts() ) : $subpages_query->the_post(); $more = 0; ?>



<div class="spalten">
<h3><?php the_title(); ?></h3>
<?php the_content(""); ?>
<p><a class="more" href="<?php the_permalink(); ?>">mehr ...</a></p>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>