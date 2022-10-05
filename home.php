<?php get_header(1); ?>

  <!--メインビュー-->
  <section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/news-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/news-spmv.jpg" alt="お知らせトップ画像" />
    </picture>
    <h1 class="c-under-view__body">お知らせ</h1>
  </section>
  <!--パンくずリスト-->
  <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li><a href=".">お知らせ一覧</a></li>
    </ol>
  </nav>


  <!--ニュース一覧-->
  <div class="p-news l-inner__news">
  <section class="news"  id="main-news">
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
      <div class="news__inner under-news__inner">
        <!--日付-->
        <div class="news-block under-news__block">
          <time><?php the_time('Y.m.d'); ?></time>
          <p class="news-category">お知らせ</p>
        </div>
        <!--本文-->
        <div class="news-body__text under-news-body__text">
          <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </div>
      </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>
    <!--ページネーション-->
    <div class="c-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
  </div>


<?php get_footer(); ?>