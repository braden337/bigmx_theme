


<?php get_header(); ?>



<!-- Add your site or application content here -->
<div class="site-content">
  <?php

  if(have_posts()) :

    while (have_posts()) : the_post();

  ?>
  
  <div class="post">
    <div class="postimg"><?php the_post_thumbnail( [56,56], $attr ); ?></div>


  </div>
  <ul class="posts">

    <li class="post no-max">

        <div class="post-line">
          
          <h3><?php the_title(); ?></h3>
        </div>

        <div class="meta">
          <!-- <div data-icon="ei-calendar" data-size="s"></div> -->
          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
          <time datetime="<?php the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>
          <svg>
            <use xlink:href="#icon-clock"></use>
          </svg>
          <?php the_time('g:i a'); ?>
        </div>


    </li>


  </ul>


  <?php

  endwhile;

  else :

    echo '<p>No content found</p>';

  endif;
  ?>

</div>




<?php get_footer(); ?>























