<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Lily no Oheya</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/ress.css" media="all" rel="stylesheet" type="text/css" />
    <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script
      src="https://kit.fontawesome.com/26f9eb3f4f.js"
      crossorigin="anonymous"
    ></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrapper">
      <!-- header -->
      <header class="header">
        <div class="container">
          <div class="top-header">
            <a href="#" id="js-page-top">
              <img src="<?php echo get_template_directory_uri(); ?>/images/toplogo.png" alt="Lily no Oheyaロゴ" />
            </a>
            <!-- ナビゲーション（PC用） -->
            <nav class="gnav">
              <ul class="gnav-list">
                <li class="gnav-item"><a href="#works">Work</a></li>
                <li class="gnav-item"><a href="#skill">Skill</a></li>
                <li class="gnav-item"><a href="#about">About</a></li>
                <li class="gnav-item"><a href="#contact">Contact</a></li>
              </ul>
            </nav>
            <!-- SNS アイコン -->
            <div class="sns-icons">
              <a href="https://www.instagram.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://x.com/lilynooheya1255" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://www.facebook.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
          <!-- スマホ用メニューボタン -->
          <div class="menu-bar">
            <a href="#" id="js-page-top">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="ロゴ" />
            </a>
            <i class="fa-solid fa-bars" id="menu-btn"></i>
          </div>
        </div>
          <!-- スマホ用ナビゲーション -->
          <nav id="nav-sp">
            <button id="close" onclick="document.getElementById('nav-sp').style.display = 'none'">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/cross.png"
              alt="ナビゲーションを閉じる">
            </button>
            <ul>
              <li>
                <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="トップページに戻る"></a>
              </li>
                <li class="menu"><a href="#works">Work</a></li>
                <li class="menu"><a href="#skill">Skill</a></li>
                <li class="menu"><a href="#about">About</a></li>
                <li class="menu"><a href="#contact">Contact</a></li>
            </ul>
            <div id="sns-icons-sp">
              <a href="https://www.instagram.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://x.com/lilynooheya1255" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://www.facebook.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
            </div>
          </nav>
      </header>