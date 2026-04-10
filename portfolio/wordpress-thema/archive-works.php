<?php get_header(); ?>

<main class="content">
  <!-- mv（もし共通のメインビジュアルを出したいなら） -->
  <div class="mv">
    <div class="mv-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main-top.png" alt="英字新聞のようなメイン画像" />
      <h1 class="mv-title">Lily no Oheya</h1>
    </div>
  </div>

  <!-- works一覧 -->
  <section class="works section" id="works">
    <div class="container">
      <h2 class="title">WORKS</h2>
      <div class="works-list">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a class="works-item" href="<?php the_permalink(); ?>">
            <div class="works-img">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="No image" />
              <?php endif; ?>
            </div>
            <p class="works-name"><?php the_title(); ?></p>
            <p class="works-info">
              <?php echo get_the_excerpt(); ?>
            </p>
          </a>
        <?php endwhile; else: ?>
          <p>まだ制作実績はありません。</p>
        <?php endif; ?>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>