<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php if(is_home() || is_front_page()){
		echo 'Home ';
	}else{
		wp_title('');
	} ?> | Daiwa</title>
	<meta name="description" content="<?php if(is_home() || is_front_page()){
		echo 'Home ';
	}else{
		wp_title('');
	} ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
<header class="c-header <?php $current_page = get_the_title(); if (is_home() || is_front_page()){ echo '';} else {{ echo 'c-header--page';}}?>">
      <div class="c-header__wrap">
        <div class="c-header__logo">
          <a href="<?php bloginfo('url'); ?>"><span class="c-header__logotxt">兵庫県知事 (10) 8316号</span>
            <h1>
              <img class="c-header__logoimg pc-only c-header__logoimg--fix" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logo.png" alt="大和住宅株式会社">
              <img class="c-header__logoimg sp-only c-header__logoimg--fix" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logoSP.png" alt="大和住宅株式会社">
              <img class="c-header__logoimg c-header__logoimg--scroll" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logoscroll.png" alt="大和住宅株式会社">
            </h1>
          </a>
        </div>
        <div class="c-header__right">
          <nav class="c-header__nav">
            <ul class="c-header__menu">
              <li class="c-header__item">
                <a class="c-header__link <?php $current_page = get_the_title(); if ($current_page == '大和住宅について'){ echo 'is-active';}?>" href="<?php echo get_site_url(); ?>/about">大和住宅について</a>
              </li>
              <li class="c-header__item">
                <a class="c-header__link" href="<?php echo get_site_url(); ?>/consignment">委託管理について</a>
              </li>
              <li class="c-header__item">
                <a class="c-header__link <?php $current_page = get_the_title(); if ($current_page == '会社情報'){ echo 'is-active';}?>" href="<?php echo get_site_url(); ?>/company">会社情報</a>
              </li>
              <li class="c-header__item">
                <a class="c-header__link <?php $current_page = get_the_title(); if ($current_page == 'お知らせ'){ echo 'is-active';}?>" href="<?php echo get_site_url(); ?>/property">物件情報</a>
              </li>
            </ul>
          </nav>
          <div class="c-header__hamburger" id="hamburger">
            <span class="c-header__line"></span>
            <span class="c-header__line"></span>
            <span class="c-header__line"></span>
            <img class="c-header__linetxt" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/hamburger-img.png" alt="menu">
          </div>
          <div class="c-header__overlay"></div>
          <nav class="c-header__navhide">
            <div class="c-header__row">
              <div class="c-header__col">
                <ul class="c-header__colmenu">
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/about">About us<span class="c-header__coltxt">大和住宅について</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/consignment">Consignment management<span class="c-header__coltxt">委託管理について</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/company">Company<span class="c-header__coltxt">会社情報</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/property">For sale &amp; rent<span class="c-header__coltxt">物件情報</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/faq">FAQ<span class="c-header__coltxt">賃貸管理トラブル集</span></a></li>
                </ul>
              </div>
              <div class="c-header__col">
                <ul class="c-header__colmenu">
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/information">Information<span class="c-header__coltxt">お知らせ</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/style">Nada style<span class="c-header__coltxt">灘エリアのご紹介</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/column">Column<span class="c-header__coltxt">コラム</span></a></li>
                  <li class="c-header__colitem"><a class="c-header__collink" href="<?php echo get_site_url(); ?>/contact">Contact<span class="c-header__coltxt">お問い合わせ</span></a></li>
                </ul>
              </div>
            </div>
            <div class="c-header__bottom">
              <ul class="c-header__botlist">
                <li class="c-header__botitem"><a class="c-header__botlink" href="#" target="_blank"><img class="c-header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-ins.svg" alt="instagram"></a></li>
                <li class="c-header__botitem"><a class="c-header__botlink" href="#" target="_blank"><img class="c-header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-fb.svg" alt="facebook"></a></li>
              </ul>
            </div>
          </nav>
          <div class="c-header__inquiry"><a class="c-header__inquirylink" href="<?php echo get_site_url(); ?>/contact"><img class="c-header__inquiryimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-inquiry.png" alt="inquiry"></a></div>
        </div>
      </div>
    </header>