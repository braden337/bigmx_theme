        <?php get_header(); ?>
        
        <svg width="0" height="0" class="visually-hidden">
          <symbol id="icon-clock" viewBox="0 0 32 32" fill="currentColor">
            <path d="M16 0 A16 16 0 0 0 0 16 A16 16 0 0 0 16 32 A16 16 0 0 0 32 16 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 28 16 A12 12 0 0 1 16 28 A12 12 0 0 1 4 16 A12 12 0 0 1 16 4 M14 6 L14 17.25 L22 22 L24.25 18.5 L18 14.75 L18 6z "></path>
          </symbol>

          <symbol id="icon-calendar" viewBox="0 0 32 32" fill="currentColor">
            <path d="M2 4 L6 4 L6 2 A2 2 0 0 1 10 2 L10 4 L22 4 L22 2 A2 2 0 0 1 26 2 L26 4 L30 4 L30 10 L2 10 M2 12 L30 12 L30 30 L2 30  "></path>
          </symbol>

          <symbol id="icon-grid" viewBox="0 0 32 32" fill="currentColor">
            <path d="M2 2 L10 2 L10 10 L2 10z M12 2 L20 2 L20 10 L12 10z M22 2 L30 2 L30 10 L22 10z M2 12 L10 12 L10 20 L2 20z M12 12 L20 12 L20 20 L12 20z M22 12 L30 12 L30 20 L22 20z M2 22 L10 22 L10 30 L2 30z M12 22 L20 22 L20 30 L12 30z M22 22 L30 22 L30 30 L22 30z "></path>
          </symbol>

          <symbox id="icon-twitter" viewBox="0 0 32 32" fill="currentColor">
            <path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4 "></path>
          </symbol>

          <symbol id="icon-music-note" viewBox="0 0 32 32" fill="currentColor">
            <path d="M0 24 A6 6 0 0 0 12 24 V8 H26 V18 A6 6 0 0 0 18 24 A6 6 0 0 0 30 24 V2 H8 V18 A6 6 0 0 0 0 24 "></path>
          </svg>
        </svg>


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