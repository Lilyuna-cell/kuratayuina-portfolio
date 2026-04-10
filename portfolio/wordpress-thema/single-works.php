<?php get_header(); ?>

<main class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article class="article">
    <div class="article-container">

      <!-- 投稿タイトル -->
      <h2 class="article-title"><?php the_title(); ?></h2>

      <!-- 投稿本文 -->
      <div class="article-body">
        <?php the_content(); ?>
      </div>

      <!-- トップに戻るリンク -->
      <div class="home-link">
        <a href="<?php echo home_url(); ?>#works">Works一覧へ</a>
      </div>

    </div>
  </article>

<?php endwhile; else : ?>
  <p>投稿が見つかりません。</p>
<?php endif; ?>

<div class="page-top" id="js-page-top">
  <span class="material-icons-outlined">expand_less</span>
</div>

</main>

<?php get_footer(); ?>