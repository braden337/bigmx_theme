


<?php get_header(); ?>



<!-- Add your site or application content here -->
<main>

  <div id="posts" class="box">
  <?php

  if(have_posts()) :

    while (have_posts()) : the_post();

  ?>
  
  <div class="post">
    <?php the_post_thumbnail( [100,100], $attr ); ?>
    <i class="fa fa-clock-o"></i>
    <time datetime="<?php the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>
  </div>


  <?php

  endwhile;

  else :

    echo '<p>No content found</p>';

  endif;
  ?>

</div>

<div id="insta" class="box">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure laboriosam voluptas et nulla sequi repellat dolorem temporibus, id quo, eaque voluptatibus ab, itaque atque numquam ex cupiditate inventore excepturi. Voluptatibus.
</div>

<div id="polls" class="box">
  <?php echo do_shortcode( '[yop_poll id="1"]' ) ?>
</div>

<div id="tweets" class="box">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eaque vero, beatae aspernatur enim commodi. Voluptas consequuntur quia saepe provident totam quasi, id maxime sapiente laudantium iusto animi, dicta ipsa.
</div>







<?php get_footer(); ?>























