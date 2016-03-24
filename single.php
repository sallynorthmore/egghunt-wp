<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section id="main" role="main" class="main">

	<?php if (has_post_thumbnail( $post->ID )) : ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="section section--post" style="background-image: url('<?php echo $image['0']; ?>')">
	<?php else: ?>
	<div class="section section--post">
	<?php endif; ?>
	
		<div class="section-inner">
			<h1 class="section-title">
				<?php the_title(); ?>
			<h1>

			<div class="section-body">
				<?php the_content(); ?>
			</div>

		</div>
		
	</div>

</section>
<?php endwhile; ?>
<?php endif; ?>
