<!-- header.php -->
<?php get_header(); ?>
<!-- メインビジュアル -->

<main class="content">
  <!-- mv -->
  <div class="mv">
    <div class="mv-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main-top.png" alt="英字新聞のようなメイン画像" />
      <h1 class="mv-title">Lily no Oheya</h1>
    </div>
  </div>
  <!-- /mv -->

  <!-- works -->
  <section class="works section" id="works">
    <div class="container">
      <h2 class="title">WORKS</h2>
      <div class="works-list">
        <?php
$args = array(
  'post_type' => 'works',   
  'posts_per_page' => 6
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <a class="works-item" href="<?php the_permalink(); ?>">
      <div class="works-img">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>
      </div>
      <p class="works-name"><?php the_title(); ?></p>
      <p class="works-info"><?php echo get_the_excerpt(); ?></p>
    </a>
  <?php endwhile; ?>
<?php else : ?>
  <p>まだ投稿がありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <!-- /works -->

  <!-- skill -->
  <section class="skill section" id="skill">
    <div class="container">
      <h2 class="title">SKILL</h2>
      <div class="skill-list">
        <div class="skill-item">
          <p class="skill-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/skills/html_icon_187944.png" alt="html" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">HTML/CSS</h3>
            <p class="skill-text">
              レスポンシブ対応を含むWebページのコーディングや、デザイン再現性の高い実装が可能です。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/skills/social_wordpress_55.png"
              alt="wordpress" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">WordPress</h3>
            <p class="skill-text">
              テーマのカスタマイズやオリジナルデザインの反映、プラグインによる機能拡張が行えます。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/skills/file_java_format_type_icon_134724.png"
              alt="javascript" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">JavaScript</h3>
            <p class="skill-text">
              ページ内の動きを実装し、ユーザー操作に応じたインタラクティブなWeb表現を行えます。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/skills/adb-photoshop_icon-icons.com_50960.png"
              alt="photoshop" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">Adobe Photoshop</h3>
            <p class="skill-text">
              写真のレタッチや合成、Webデザインに適したビジュアルの制作が行えます。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/skills/figma_black_logo_icon_147134.png"
              alt="figma" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">Figma</h3>
            <p class="skill-text">
              コンセプトに沿ったUIデザインやプロトタイプの作成、チームでのデザイン共有ができます。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/skills/language_php_icon_135453 (1).png"
              alt="php" />
          </p>
          <div class="skill-body">
            <h3 class="skill-name">PHP</h3>
            <p class="skill-text">
              データの受け渡しやフォーム処理、WordPressテーマへの動的機能の実装ができます。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /skill -->

  <!-- about -->
  <section class="about section" id="about">
    <div class="container">
      <h2 class="title">ABOUT</h2>
      <div class="profile">
        <p class="profile-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.png" alt="about" />
        </p>
        <div class="profile-body">
          <p>Lily/Yuina</p>
          <p>
            &ensp;アイスランド在住大学生。2025年2月より、プログラミングスクールでWebサイト制作を中心に学んでいる。日本在住時はエアライン業界を志望していたが、アイスランドへの移住をきっかけに新しい環境でも自分らしく働けるスキルを身につけたいと思い、Webデザインを学び始める。北欧やヨーロッパの雰囲気を取り入れた、シンプルであたたかみのあるデザインを心がけている。
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- contact -->
  <section class="contact section" id="contact">
    <div class="container">
      <h2 class="title">CONTACT</h2>
      <p class="lead">
        お問い合わせは、こちらのフォーム<br
          class="sp-only" />またはメールにてお願いいたします。
      </p>

      <div class="main-form">
        <div class="form-first">
          <ul class="info-details">
            <li>
              <i class="fas fa-paper-plane"></i><span>Email: </span><a href="mailto:10vest@lilynooheya.com">10vest@lilynooheya.com</a>
            </li>
            <li>
              <i class="fas fa-globe"></i><span>Website: </span><a href="mailto:10vest@lilynooheya.com">https://lilynooheya.com</a>
            </li>
          </ul>
          <ul class="sns-icons">
            <li>
              <a href="#"><a href="https://www.facebook.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></a>
            </li>
            <li>
              <a href="#"><a href="https://www.instagram.com/lilynooheya" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></a>
            </li>
            <li>
              <a href="#"><a href="https://x.com/lilynooheya1255" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a></a>
            </li>
          </ul>
        </div>

        <div class="form-sec">
            <h2 class="form-title">Send me a message</h2>
            <?php echo do_shortcode('[contact-form-7 id="2b3322a" title="お問い合わせフォーム"]'); ?>
            <!-- <div class="form-fields">
              <div class="form-group">
                <input type="text" class="name" placeholder="Name" />
              </div>

              <div class="form-group">
                <input type="text" class="email" placeholder="Email" />
              </div>

              <div class="form-group">
                <input
                  type="text"
                  class="Subject"
                  placeholder="Subject" />
              </div>

              <div class="form-group">
                <textarea
                  name=" "
                  id=" "
                  placeholder="Write your message"></textarea>
              </div>
            </div>
            <input
              type="submit"
              value="Send message"
              class="submit-button" /> -->
      </div>
    </div>
  </section>

  <!-- /contact -->

  <div class="page-top" id="js-page-top">
    <span class="material-icons-outlined">expand_less</span>
  </div>
</main>



<?php get_footer(); ?>