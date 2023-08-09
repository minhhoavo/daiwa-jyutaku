<footer class="c-footer">
  <div class="c-footer__wrap l-container l-container--w1160">
    <div class="c-footer__top">
      <div class="c-footer__column">
        <div class="c-footer__colfirst">
          <ul class="c-footer__list">
            <li class="c-footer__item"><a href="<?php bloginfo('url'); ?>" class="c-footer_link">トップページ</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/about" class="c-footer_link">大和住宅について</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/consignment" class="c-footer_link">委託管理について</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/company" class="c-footer_link">会社情報</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/property" class="c-footer_link">物件情報</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/rental" class="c-footer_link">賃貸管理トラブル集</a></li>
          </ul>
        </div>
        <div class="c-footer__colsecond">
          <ul class="c-footer__list">
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/notice" class="c-footer_link">お知らせ</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/introduction" class="c-footer_link">灘エリアのご紹介</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/column" class="c-footer_link">コラム</a></li>
            <li class="c-footer__item"><a href="<?php echo get_site_url(); ?>/contact" class="c-footer_link">お問い合わせ</a></li>
          </ul>
        </div>
        <div class="c-footer__colthird">
          <a href="https://kobe-rokko.jp/" target="_blank"><img class="c-footer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/f-logo.jpg" alt="kobe-rokko"></a>
        </div>
      </div>
    </div>
    <div class="c-footer__bot">
      <address>Copyright&nbsp; DAIWA-JYUTAKU All Rights Reserved.</address>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>