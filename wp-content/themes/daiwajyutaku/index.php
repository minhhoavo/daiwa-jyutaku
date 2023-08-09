<?php get_header(); ?>
<main class="home">
    <section class="home-mainvisual">
        <div class="home-mainvisual__wrap">
            <?php if( have_rows('slides') ): ?>
                <div class="home-mainvisual__slider">
                    <?php while( have_rows('slides') ): the_row(); ?>
                        <div class="home-mainvisual__myslide">
                            <img class="home-mainvisual__img" src="<?php echo get_sub_field('image')['url'] ?>" alt="未来の先輩から生の声が届きました。">
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        <div class="home-mainvisual__inner">
        <div class="home-mainvisual__symbol">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-mountainSP.svg">
                <img class="home-mainvisual__mountain" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-mountain.svg" alt="住みたくなる街">
            </picture>
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-cloud1SP.svg">
                <img class="home-mainvisual__cloud1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-cloud1.svg" alt="住みたくなる街">
            </picture>
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-cloud2SP.svg">
                <img class="home-mainvisual__cloud2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-cloud2.svg" alt="住みたくなる街">
            </picture>
        </div>
        <h2 class="home-mainvisual__title">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mvSP-title1.png">
                <img class="home-mainvisual__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/mv-title1.png" alt="NADA ROKKO">
            </picture>
        </h2>
        </div>
    </div>
    </section>
    <?php
        $the_query = new WP_Query(array(
            'order' => 'DESC', 
            'post_type' => 'post', 
            'posts_per_page' => 3, 
            'orderby' => 'date'
        ));
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <div class="home-infor">
            <div class="home-infor__banner">
                <div class="home-infor__left">
                    <a class="home-infor__box" href="<?php echo get_site_url(); ?>/information">
                        <img class="home-infor__boximg imgno" src="<?php echo get_template_directory_uri(); ?>/assets/img/infor/infor-img_no.png" alt="information">
                        <img class="home-infor__boximg imgon" src="<?php echo get_template_directory_uri(); ?>/assets/img/infor/infor-img_on.png" alt="information">
                    </a>
                </div>
                <div class="home-infor__right">
                    <?php
                        while ($the_query->have_posts()) : $the_query->the_post();
                        $post = get_post();
                    ?>
                        <a class="home-infor__list" href="<?php echo get_permalink($post->ID); ?>">
                            <p class="home-infor__time"><?php echo get_the_date('Y.m.d'); ?></p>
                            <p class="home-infor__content"><?php the_title(); ?></p>
                        </a>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    <?php
        endif;
        wp_reset_postdata();  
    ?>
    
    <section class="home-about">
    <div class="c-block c-block--about">
        <div class="c-block__wrap">
        <div class="c-block__content">
            <div class="c-block__image">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/aboutSP-img.jpg">
                <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/aboutTAB-img.jpg">
                <img class="c-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/about-img.jpg" alt="灘区・東灘区の地域活性化を目指して">
            </picture>
            </div>
            <div class="c-block__box">
            <h2 class="c-block__title">灘区・東灘区の<br class='is-break'>地域活性化を目指して</h2>
            <p class="c-block__desc">大和住宅は昭和32年創業以来、灘区・東灘区の街の価値を上げていくことを使命に、地域に根付いた管理業者としてご入居者様の生活やオーナー様の資産管理をサポートさせていただいております。</p>
            <a href="<?php echo get_site_url(); ?>/about" class="c-btn">大和住宅について</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="home-consignment">
    <div class="c-block l-container c-block--consignment">
        <div class="c-block__wrap">
        <div class="c-block__content">
            <div class="c-block__image">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/consignmentSP-img.jpg">
                <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/consignmentTAB-img.jpg">
                <img class="c-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/consignment-img.jpg" alt="委託管理について">
            </picture>
            </div>
            <div class="c-block__box">
            <h2 class="c-block__title">委託管理について</h2>
            <p class="c-block__desc">大和住宅の委託管理は、入居したら終わりではなく、その後のご入居者様のフォローにも重きを置き、質の高いサービスにこだわっています。</p>
            <a href="<?php echo get_site_url(); ?>/consignment" class="c-btn">詳しくみる</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="home-rent">
    <div class="c-block l-container c-block--rent">
        <div class="c-block__wrap">
        <div class="c-block__content">
            <div class="c-block__image">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/rentSP-img.jpg">
                <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/rentTAB-img.jpg">
                <img class="c-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/rent-img.jpg" alt="物件情報">
            </picture>
            </div>
            <div class="c-block__box">
            <h2 class="c-block__title">物件情報</h2>
            <p class="c-block__desc">神戸大学生協との30年余のお付き合い。<br class='is-break'>長年培ってきた経験と実績で95%の満室率を維持しています。</p>
            <a href="<?php echo get_site_url(); ?>/property" class="c-btn c-btn--rent">詳しくみる</a>
            </div>
        </div>
        </div>
    </div>
    </section>
   
    <?php
        $the_query = new WP_Query(array(
            'post_type' => 'style', 
            'posts_per_page' => 6, 
            'orderby' => 'desc'
        ));
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <section class="home-style">
        <div class="home-style__top">
            <h2 class="c-title"><img class="home-style__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/style/style-title.png" alt="Nada style"></h2>
        </div>
        <div class="home-style__content l-container l-container--w1160">
            <div class="home-style__list">
                <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                    $post = get_post();
                    $taxonomies = get_object_taxonomies($post);   
                    $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
                ?>
                    <div class="home-style__item">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                        <div class="home-style__image">
                            <?php if( get_field('image') ): ?>
                                <img class="home-style__img" src="<?php echo get_field('image')['url']; ?>" alt="<?php the_title(); ?>">
                            <?php else : ?> 
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/no-image.png" alt="no image available">
                            <?php endif; ?>	                       
                            <?php if(!empty($taxonomy_names)) :
                                foreach($taxonomy_names as $tax_name) : ?>
                                    <span class="home-style__label"><?php echo $tax_name; ?></span>
                                <?php endforeach;
                            endif;?>
                        </div>
                        <div class="home-style__banner">
                            <h3 class="home-style__title"><?php the_title(); ?></h3>
                        </div>
                        </a>
                    </div>
                <?php
                    endwhile;
                ?>
            </div>
            <a href="<?php echo get_site_url(); ?>/style" class="c-btn c-btn--style">もっとみる</a>
        </div>
    </section> 
    <?php
        endif;
        wp_reset_postdata();  
    ?>
    
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
</main>
<?php get_footer(); ?>
