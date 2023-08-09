<?php /* Template Name: About */ ?>
<?php get_header();?>
<main class="about">
    <section class="about-banner">
    <div class="about-banner__image">
        <img class="about-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-banner.jpg" alt="大和住宅について">
    </div>
    <div class="about-banner__box">
        <h2 class="about-banner__title">
            <img class="about-banner__titleimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-titlebanner.png" alt="大和住宅について">
        </h2>
    </div>
    </section>
    <div class="c-breadcrumb__wrap">
        <?php custom_breadcrumbs(); ?>
    </div>
    <section class="about-intro">
    <div class="about-intro__top">
        <h2 class="about-intro__title">
        <img class="about-intro__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-title1.png" alt="大和住宅について">
        </h2>
    </div>
    <div class="about-intro__content">
        <div class="c-block c-block--aboutus l-container l-container--w1160">
            <div class="c-block__wrap">
                <?php if( have_rows('about_us') ): ?>
                    <?php while( have_rows('about_us') ): the_row(); ?>
                    <div class="c-block__content">
                        <div class="c-block__image">
                        <?php if( get_sub_field('image') ): ?>
                            <img class="c-block__img" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('title'); ?>">
                        <?php else : ?> 
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/no-image.png" alt="no image available">
                        <?php endif; ?>    
                        </div>
                        <div class="c-block__box">
                            <h3 class="c-block__title"><?php echo get_sub_field('title'); ?></h3>
                            <p class="c-block__desc"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>	
            </div>
        </div>
    </div>
    </section>
    <section class="about-service">
    <div class="abut-service__wrap l-container l-container--w1160">
        <div class="about-service__top">
        <h2 class="about-service__title">
            <img class="about-service__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-title2.png" alt="事業内容">
        </h2>
        </div>
        <div class="about-service__content">
            <div class="about-service__row">    
                <?php if( have_rows('services') ): ?> 
                    <?php while( have_rows('services') ): the_row(); ?>
                        <div class="about-service__column">
                            <?php if( get_sub_field('icon') ): ?>
                                <img class="about-service__icon" src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('title'); ?>">
                            <?php else : ?> 
                                <img class="about-service__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/no-icon.png" alt="no icon available">
                            <?php endif; ?>  
                            <h3 class="about-service__title"><?php echo get_sub_field('title'); ?></h3>
                            <p class="about-service__desc"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>	
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