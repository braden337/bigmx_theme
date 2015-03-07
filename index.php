


<?php get_header(); ?>



<!-- Add your site or application content here -->
<main>
  <?php

  if(have_posts()) :

    while (have_posts()) : the_post();

  ?>
  
  <div id="posts">
    <div class="thumbnail"><?php the_post_thumbnail( [100,100], $attr ); ?></div>
    <i class="fa fa-clock-o"></i>
    <time datetime="<?php the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>
    lol
  </div>


  <?php

  endwhile;

  else :

    echo '<p>No content found</p>';

  endif;
  ?>

</div>




<?php get_footer(); ?>























