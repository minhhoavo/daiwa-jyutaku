<?php /* Template Name: About */ ?>
<?php get_header();?>
    <main class="about">
    <section class="infor-banner">
        <div class="infor-banner__image">
            <img class="infor-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/404-banner.jpg" alt="大和住宅について">
        </div>
        <div class="infor-banner__box">
            <h2 class="infor-banner__title">404 Not found<span class="infor-banner__caption">ページが見つかりませんでした。</span></h2>
        </div>
    </section>
    <div class="c-breadcrumb__wrap">
    <ul class="c-breadcrumb c-breadcrumb--infor">
          <li><a href="<?php bloginfo('url'); ?>">TOP</a></li>
          <li>404 Not found</li>
        </ul>
    </div>
    <section class="notfound-intro">
        <div class="notfound-intro__top">
            <h2 class="notfound-intro__title">Whoops! お探しのページが見つかりませんでした。</h2>
        </div>
        <div class="notfound-intro__content">
            <p class="notfound-intro__txt">申し訳ありません。<br>
                お探しのページは見つかりませんでした。<br>
                URLを確認しもう一度探してみてください。
            </p>        
        </div>
        <a href="<?php bloginfo('url'); ?>" class="c-btn">トップページへ戻る</a>
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