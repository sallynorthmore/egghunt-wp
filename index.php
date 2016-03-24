<?php get_header(); ?>

<section id="main" class="main">

   <?php while (have_posts()) : the_post(); ?> 
    
    <?php if (has_post_thumbnail( $post->ID )) : ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="section section--post" style="background-image: url('<?php echo $image['0']; ?>')">
  <?php else: ?>
  <div class="section section--post">
  <?php endif; ?>>
    
        <div class="section-inner">
            <h1 class="section-title">
                <?php// the_title(); ?>
            <h1>

            <div class="section-body">
                <?php the_content(); ?>
            </div>
            
        </div>
        
    </div>
    <?php endwhile;?>

</section>

<?php get_footer(); ?>