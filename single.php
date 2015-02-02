        <?php get_header(); ?>

          

        <!-- Add your site or application content here -->
        <div class="site-content">
        <?php

        if(have_posts()) :

          while (have_posts()) : the_post();

        ?>

          <ul class="posts">

              <li class="post no-max">

                <a href="<?php the_permalink(); ?>" class="post-link post-header">

                  <div class="post-line">
                    <?php the_post_thumbnail( [56,56], $attr ); ?>
                    <!-- <span class="show-num">150</span> -->
                    <h2><?php the_title(); ?></h2>
                  </div>

                  <div class="meta">
                    <svg>
                      <use xlink:href="#icon-calendar"></use>
                    </svg>
                    <time datetime="<?php the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>
                    <svg>
                      <use xlink:href="#icon-clock"></use>
                    </svg>
                    <?php the_time('g:i a'); ?>
                  </div>

                  <div class="content">
                    <?php the_content(); ?>
                  </div>

                </a>

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
