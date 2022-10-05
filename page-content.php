<?php
// Template Name: 事業内容
?>

<?php get_header(1); ?>

  <!--メインビュー-->
  <section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-content1.jpg" alt="事業内容トップ画像" />
    </picture>
    <h1 class="c-under-view__body">事業内容</h1>
  </section>

    <!--パンくずリスト-->
    <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li>事業内容</li>
    </ol>
  </nav>
  <div class="l-inner__content">
    <!--ボディタイトル-->
    <section class="content-title">
      <div class="content-body">
        <h3 class="body-title content-body-title">企業理念</h3>
        <p class="body-text content-body-subtitle">説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
      </div>
    </section>
    <!--ボディ-->
    <section class="content-detail1 content__l-inner">
      <figure class="content-detail-images"><img class="content-detail-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content1.jpg" alt=" "></figure>
      <div class="content-detail-body">
        <h3 class="body-title content-detail-title">企業理念１</h3>
        <p class="body-text content-detail-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </section>
    <section class="content-detail2 content__l-inner">
      <figure class="content-detail-images__right"><img class="content-detail-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common//content2.jpg" alt=""></figure>
      <div class="content-detail-body">
        <h3 class="body-title content-detail-title">企業理念２</h3>
        <p class="body-text content-detail-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </section>
    <section class="content-detail2 content__l-inner">
      <figure class="content-detail-images"><img class="content-detail-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content3.jpg" alt=""></figure>
      <div class="content-detail-body">
        <h3 class="body-title content-detail-title">企業理念３</h3>
        <p class="body-text content-detail-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </section>
  </div>

<?php get_footer(); ?>