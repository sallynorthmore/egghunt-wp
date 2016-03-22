<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<section class="main" id="main">
    <?php while (have_posts()) : the_post(); ?> 
    
    <?php if (has_post_thumbnail( $post->ID )) : ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="section" style="background-image: url('<?php echo $image['0']; ?>')">
    <?php endif; ?>
    
        <div class="section-inner">
            <!-- <h1 class="section-title"> -->
                <?php// the_title(); ?>
            <!-- <h1> -->

            <div class="section-body">
                <?php the_content(); ?>
            </div>
            
        </div>
        
    </div>
    <?php endwhile;?>

</section>

<?php get_footer(); ?>