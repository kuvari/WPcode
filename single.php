<?php get_header(1); ?>

  <!--メインビュー-->
  <section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像" />
    </picture>
    <h1 class="c-under-view__body">制作実績</h1>
  </section>
  <!--パンくずリスト-->
  <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li><a href=".">制作実績</a></li>
      <li><a href=".">制作実績詳細</a></li>
    </ol>
  </nav>

<?php get_footer(); ?>