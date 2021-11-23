<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>TAKUYA ISHII</title>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
  <!-- js -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
  <!-- CSS -->
  <!-- <link rel="stylesheet" href="https://classic.yarnpkg.com/en/package/destyle.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap">

    <!-- ヘッダー -->
    <header class="header-hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/header2.jpg')">

      <div class="header-container">
        <div class="header-top">
          <a href="https://hellotakoya.com" class="title" style="color: white;">TAKUYA ISHII</a>

          <!-- 三本線 -->
          <div id="bars" class="bars">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- ↓メニュー（スマホ版のときにボタンで表示したい -->
          <nav id="menu" class="header-menu">
            <ul class="header-menu-list container">
              <li><a href="#about">ABOUT</a></li>
              <li><a href="#works">WORKS</a></li>
              <li><a href="#skill">SKILL</a></li>
              <li><a href="/contact">CONTACT</a></li>
            </ul>
          </nav>
    
        </div>
        <!-- <div class="youtube">
          <iframe width="440" height="247" src="https://www.youtube.com/embed/TYgEaYvn4ro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> -->

      </div>

      
    </header>
