<?php get_header(); ?>
<?php
    $post = get_post();
    $taxonomies = get_object_taxonomies($post);   
    $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
?>
<main class="style">
    <section class="infor-banner">
        <div class="infor-banner__image">
            <img class="infor-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/style/style-banner.jpg" alt="灘エリアのご紹介">
        </div>
        <div class="infor-banner__box">
            <h2 class="infor-banner__title">Nada Style<span class="infor-banner__caption">灘エリアのご紹介</span></h2>
        </div>
    </section>
    <div class="c-breadcrumb__wrap c-breadcrumb__wrap--infor">
        <?php custom_breadcrumbs(); ?>
    </div>
    <section class="style-single">
        <div class="style-single__top">
            <div class="company-single__wrap l-container">
                <div class="style-content__item ">
                    <div class="style-content__image">
                        <?php if( get_field('image') ): ?>
                            <img class="style-single__img" src="<?php echo get_field('image')['url']; ?>" alt="<?php the_title(); ?>">
                        <?php else : ?> 
                            <img class="style-single__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/no-image.png" alt="no image available">
                        <?php endif; ?>	                       
                        <?php if(!empty($taxonomy_names)) :
                            foreach($taxonomy_names as $tax_name) : ?>
                                <span class="style-content__label"><?php echo $tax_name; ?></span>
                            <?php endforeach;
                        endif;?>
                    </div>
                    <div class="style-content__banner">
                        <h3 class="style-content__title"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
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