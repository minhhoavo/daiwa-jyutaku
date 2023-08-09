<?php /* Template Name: Information */ ?>
<?php get_header();?>
<main class="company">
    <section class="company-banner">
        <div class="company-banner__image">
            <img class="company-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-banner.jpg" alt="会社情報">
        </div>
        <div class="company-banner__box">
            <h2 class="company-banner__title">
            <img class="company-banner__titleimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-titlebanner.png" alt="会社情報">
            </h2>
        </div>
    </section>
    <div class="c-breadcrumb__wrap">
    <?php custom_breadcrumbs(); ?>
    </div>
    <section class="company-message">
    <div class="company-message__wrap l-container l-container--w1820">
        <div class="company-message__top">
        <h2 class="company-message__title">
            <img class="company-message__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-title1.png" alt="ご挨拶">
        </h2>
        </div>
        <div class="company-message__content">
            <?php if( have_rows('message') ): ?>
                <?php while( have_rows('message') ): the_row(); ?>
                    <div class="company-message__item">
                        <div class="company-message__right">
                            <?php if( get_sub_field('image') ): ?>
                                <img class="company-message__image" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('title'); ?>">
                            <?php else : ?> 
                                <img class="company-message__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/no-image.png" alt="no image available">
                            <?php endif; ?>    
                        </div>
                        <div class="company-message__left">
                            <h3 class="company-message__texttitle"><?php echo get_sub_field('title'); ?></h3>
                            <p class="company-message__desc"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>	
        </div>
    </div>
    </section>
    <?php
        $phone = get_sub_field('phone');
        $fax = get_sub_field('fax');
    ?>
    <section class="company-table">
        <div class="company-table__wrap l-container l-container--w1160">
            <div class="company-table__top">
                <h2 class="company-table__title">
                    <img class="company-table__img company-table__img--profile" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-title2.png" alt="大和住宅について">
                </h2>
            </div>
            <div class="company-table__content">
                <div class="company-table__list">
                    <?php if( have_rows('profile') ): ?>
                        <?php while( have_rows('profile') ): the_row(); ?>
                            <div class="company-table__column">
                                <?php if( get_sub_field('company_name') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">会社名</p>
                                        <p class="company-table__td"><?php echo get_sub_field('company_name'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('license_number') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">免許番号</p>
                                        <p class="company-table__td"><?php echo get_sub_field('license_number'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('representative') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">代表取締役社長</p>
                                        <p class="company-table__td"><?php echo get_sub_field('representative'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('established') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">設立</p>
                                        <p class="company-table__td"><?php echo get_sub_field('established'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('capital') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">資本金</p>
                                        <p class="company-table__td"><?php echo get_sub_field('capital'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('location') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">所在地</p>
                                        <p class="company-table__td"><?php echo get_sub_field('location'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if((empty($phone) && empty($fax))): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">連絡先</p>
                                        <p class="company-table__td">
                                            <?php if( get_sub_field('phone') ): ?>
                                                <a class="company-table__tdtel" href="tel:<?php echo get_sub_field('phone'); ?>">TEL:<?php echo get_sub_field('phone'); ?></a><?php endif; ?>
                                             / <?php if( get_sub_field('fax') ): ?><span class="company-table__tdfax">FAX:<?php echo get_sub_field('fax'); ?></span><?php endif; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="company-table__column">
                                <?php if( get_sub_field('affiliated_guarantor_association') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">所属保証協会</p>
                                        <p class="company-table__td"><?php echo get_sub_field('affiliated_guarantor_association'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if( have_rows('business_content') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">事業内容</p>
                                        <p class="company-table__td">プロパティマネジメント事業 
                                            <?php while( have_rows('business_content') ): the_row(); ?>
                                                <span class="company-table__tditem"><?php echo get_sub_field('business_content_item'); ?></span>
                                            <?php endwhile; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('membership') ): ?>
                                    <div class="company-table__tr">
                                        <p class="company-table__th">所属団体</p>
                                        <p class="company-table__td">
                                            <?php echo get_sub_field('membership'); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>	
                </div>
            </div>
        </div>
    </section>
    <section class="company-table company-table--associated">
    <div class="company-table__wrap l-container l-container--w1160">
        <div class="company-table__top">
        <h2 class="company-table__title">
            <img class="company-table__img company-table__img--associated" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-title3.png" alt="大和住宅について">
        </h2>
        </div>
        <div class="company-table__content">
            <div class="company-table__list">
                <?php if( have_rows('associated') ): ?>
                    <?php while( have_rows('associated') ): the_row(); ?>
                        <div class="company-table__column">
                            <?php if( get_sub_field('company_name') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">会社名</p>
                                    <p class="company-table__td"><?php echo get_sub_field('company_name'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( get_sub_field('established') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">設立</p>
                                    <p class="company-table__td"><?php echo get_sub_field('established'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( get_sub_field('capital') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">資本金</p>
                                    <p class="company-table__td"><?php echo get_sub_field('capital'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( get_sub_field('location') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">所在地</p>
                                    <p class="company-table__td"><?php echo get_sub_field('location'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if((empty($phone) && empty($fax))): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">連絡先</p>
                                    <p class="company-table__td">
                                        <?php if( get_sub_field('phone') ): ?>
                                            <a class="company-table__tdtel" href="tel:<?php echo get_sub_field('phone'); ?>">TEL:<?php echo get_sub_field('phone'); ?></a><?php endif; ?>
                                            / <?php if( get_sub_field('fax') ): ?><span class="company-table__tdfax">FAX:<?php echo get_sub_field('fax'); ?></span><?php endif; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="company-table__column">
                            <?php if( get_sub_field('affiliated_guarantor_association') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">所属保証協会</p>
                                    <p class="company-table__td"><?php echo get_sub_field('affiliated_guarantor_association'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( have_rows('business_content') ): ?>
                                <div class="company-table__tr">
                                    <p class="company-table__th">事業内容</p>
                                    <p class="company-table__td">プロパティマネジメント事業 
                                        <?php while( have_rows('business_content') ): the_row(); ?>
                                            <span class="company-table__tditem"><?php echo get_sub_field('business_content_item'); ?></span>
                                        <?php endwhile; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
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