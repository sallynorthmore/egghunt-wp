<?php get_header(); ?>

<section id="main">

  <div class="Gallery">

  	<ul class="Gallery-items">
      <?php while (have_posts()) : the_post(); ?> 
      <li class="Gallery-item">
        <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
        <?php endif; ?>
      
        <h3 class="Gallery-itemTitle">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
      </li>
      <?php endwhile;?>
    </ul>

  </div>

</section>

<?php get_footer(); ?>