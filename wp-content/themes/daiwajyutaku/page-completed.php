<?php get_header(); ?>
<main class="completed">
    <section class="contact-banner">
        <div class="contact-banner__image">
            <img class="contact-banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact-banner.jpg" alt="会社情報">
        </div>
        <div class="contact-banner__box">
            <h2 class="contact-banner__title"> THANK YOU!<span class="contact-banner__caption">お問い合わせ完了</span></h2>
        </div>
        </section>
        <div class="c-breadcrumb__wrap c-breadcrumb__wrap--infor">
            <?php custom_breadcrumbs(); ?>
        </div>
        <section class="contact-form">
        <div class="contact-form__cover l-container l-container--w750">
            <div class="contact-form__top">
                <h2 class="contact-form__topttl"><span class="contact-form__topcap">お問い合わせ、ありがとうございました。</span>THANK YOU!</h2>
                <p class="contact-form__topdesc">メール確認後、担当者よりご連絡させていただきます。<br class="is-break"> 万一、当方からの返信がない場合は、メッセージの送信に失敗している可能性があります。<br> その際は大変恐縮ですが、再度お問い合わせいただくか、別の手段にてご連絡お願いいたします。</p>
            </div>
            <div class="contact-form__main">
                <?php echo do_shortcode('[mwform_formkey key="164"]'); ?>
                <a class="contact-form__btn" href="<?php bloginfo('url'); ?>"><span class="contact-form__btntxt">トップページへ戻る</span></a>
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