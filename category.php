<?php
/*
Template Name: Category Page
*/
get_header(); ?>

<nav class="Banner-nav" role="navigation" id="menu-button">
	<?php wp_nav_menu( array('sort_column' => 'menu_order', 'container' => false, 'menu_class' => 'Banner-navItems')); ?> 
</nav>

<div class="Categories">

    <ul class="Categories-items">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li class="Categories-item">
			<a class="Categories-itemLink" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('medium'); ?>
				<h3 class="Categories-itemTitle">
					<?php echo the_title(); ?>
				</h3>
			</a>
		</li>
		<?php endwhile; ?>
		<?php else: ?>
		<li><p><?php _e('Sorry, there are no posts to show.'); ?></p></li>
		<?php endif; ?>
	</ul>
</div>

<?php get_footer(); ?>