<?php get_header(); ?>
        <div id="main" class="container">
            <div class="shops">
                <div class="apparel">
                <div id="ap-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/apparel0.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/apparel1.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/apparel2.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/apparel3.png" width="600" height="400" alt="" />
                      </div>
                    <div class="apparel-text">
                        <h2><a href="">APPAREL</a></h2>
                    </div>
                </div><!-- /apparel -->
               <div class="cafe">
                   <div class="cafe-text">
                        <h2>
                            <a href="">CAFE</a>
                        </h2>
                   </div>
                   <div id="cf-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cf0.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cf1.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cf2.png" width="600" height="400" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cf3.png" width="600" height="400" alt="" />
                    </div>
                </div><!-- /cafe -->
                <div class="blog">
                <div id="bg-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg0.png" width="500" height="300" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg1.png" width="500" height="300" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg2.png" width="500" height="300" alt="" />
                    </div>
                    <div class="blog-text">
                        <h2><a href="">BLOG</a></h2>
                    </div>
                </div><!-- /blog -->
            </div><!-- /shops -->
            <div class="news">
                <div class="news-text">
                    <h2><a herf="">NEWS</a></h2>
                </div>

                <?php
                 if (have_posts()) :
                    while(have_posts()):
                        the_post();
                ?>

                 <div class="news-list">
                    <a href="">
                        <time><?php echo get_the_date(); ?></time>
                        <p><?php the_excerpt(); ?></p>
                     </a>
                </ul>
             </div><!-- /news -->

             <?php
                endwhile;
            else:
            ?>

            <p>newsはありません</p>

            <?php
            endif;
            ?>

        </div><!-- /main -->
        <?php get_footer(); ?>
