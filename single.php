<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section id="main" role="main" class="Post">

	<article id="post_<?php the_ID(); ?>" class="Post-content">
		<h2 class="Post-title">
			<?php echo the_title(); ?>
		</h2>
	
		<div class="Post-body">
			<?php the_content(); ?> 
		</div>
	</article>

    <a href="#">back</a>

</section>
<?php endwhile; ?>
<?php endif; ?>
