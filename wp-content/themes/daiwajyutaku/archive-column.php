<?php /* Template Name: Column */ ?>
<?php get_header();?>
    <main class="infor">
        <section class="infor-banner">
            <div class="infor-banner__image">
                <img class="infor-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/column/column-banner.jpg" alt="大和住宅について">
            </div>
            <div class="infor-banner__box">
                <h2 class="infor-banner__title">Column<span class="infor-banner__caption">コラム</span></h2>
            </div>
        </section>
        <div class="c-breadcrumb__wrap">
            <?php custom_breadcrumbs(); ?>
        </div>

        <?php
            $page = get_query_var('paged', 1);
            $the_query = new WP_Query(array(
            'order' => 'DESC', 
            'post_type' => 'post', 
            'post_per_page' => '10', 
            'paged' => $page
            ));
        ?>
        <section class="infor-content">
            <div class="infor-content__wrap l-container l-container--w1160">
                <?php if ( $the_query->have_posts() ) : ?>
                <div class="infor-content__left">
                    <?php 
                        while ($the_query->have_posts()) : $the_query->the_post();
                        $post = get_post(); 
                    ?>
                    <div class="infor-content__item">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <h2 class="infor-content__title"><?php the_title(); ?></h2>
                        </a>
                        <div class="infor-content__itembot">
                            <?php
                                $category = get_the_category();
                                if ($category) { ?>
                                    <?php if (count($category) > 0) {
                                        foreach ($category as $cat) { ?>
                                            <a href="<?php echo get_category_link($cat->term_id); ?>" class="infor-content__cat"><?php echo $cat->cat_name; ?></a>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>            
                            <span class="infor-content__time"><?php echo get_the_date('Y.m.d'); ?></span>
                        </div>
                    </div>
                    <?php
                        endwhile; 
                    ?>
                    <?php 
                        endif; 
                    ?>
                    <div class="c-pagination">
                        <?php pagination($the_query);?>
                    </div>
                </div>
                <div class="infor-content__right">
                    <div class="c-category">
                        <h3 class="c-category__title">CATEGORY</h3>  
                        <ul class="c-category__list">
                        <?php
                            $category = get_categories();
                        if ($category) {
                            foreach ($category as $cat) { ?>
                            <li class="c-category__item">
                                <i class="fa-solid fa-square"></i><a href="<?php echo get_category_link($cat->term_id); ?>" class="c-category__link"><?php echo $cat->cat_name; ?></a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
      <div class="c-backtotop"></div>
    </main>
    <section class="home-column" id="column">
      <div class="home-column__content">
          <div class="home-column__white">
              <?php
                  $the_query = new WP_Query(array(
                      'post_type' => 'column', 
                      'posts_per_page' => 3, 
                      'orderby' => 'desc'
                  ));
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
                  <div class="home-column__inner">
                      <h2 class="home-column__title"><img class="home-column__img home-column__img--column" src="<?php echo get_template_directory_uri(); ?>/assets/img/column/column-title.png" alt="Column"></h2>
                      <div class="home-column__list">
                          <?php
                              while ($the_query->have_posts()) : $the_query->the_post();
                              $post = get_post();
                          ?>
                              <a class="home-column__row" href="<?php bloginfo('url'); ?>/404">
                                  <p class="home-column__time"><?php echo get_the_date('Y.m.d'); ?></p>
                                  <p class="home-column__content"><?php the_title(); ?></p>
                              </a>
                          <?php
                              endwhile;
                          ?>
                      </div>
                      <a href="<?php echo get_site_url(); ?>/column" class="c-btn c-btn--column">もっとみる</a>
                  </div>
              <?php
                  endif;
                  wp_reset_postdata();  
              ?>
          </div>
          
          <div class="home-column__yellow">
              <?php
                  $the_query = new WP_Query(array(
                      'post_type' => 'faq', 
                      'posts_per_page' => 3, 
                      'orderby' => 'desc'
                  ));
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
              <div class="home-column__inner">
                  <h2 class="home-column__title"><img class="home-column__img home-column__img--faq" src="<?php echo get_template_directory_uri(); ?>/assets/img/column/faq-title.png" alt="FAQ"></h2>
                  <div class="home-column__list">
                      <?php
                          while ($the_query->have_posts()) : $the_query->the_post();
                          $post = get_post();
                      ?>
                          <a class="home-column__row" href="<?php bloginfo('url'); ?>/404">
                              <p class="home-column__label">Q.</p>
                              <p class="home-column__question"><?php the_title(); ?></p>
                          </a>
                      <?php
                          endwhile;
                      ?>
                  </div>
                  <a href="<?php echo get_site_url(); ?>/faq" class="c-btn c-btn--column">もっとみる</a>
              </div>
              <?php
                  endif;
                  wp_reset_postdata();  
              ?>
          </div>
      </div>
    </section>
    <div class="c-backtotop"><i class="fa-solid fa-angle-up"></i></div>
<?php get_footer(); ?>