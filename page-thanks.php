<?php
// Template Name: サンクスページ
?>
<?php get_header(1); ?>

<!--メインビュー-->
<section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/contact-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contact-spmv" alt="お問い合わせトップ画像" />
    </picture>
    <h1 class="c-under-view__body">お問い合わせ</h1>
  </section>

    <!--パンくずリスト-->
    <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li>お問い合わせ</li>
    </ol>
  </nav>

  <div class="p-thanks l-inner">
    お問い合わせありがとうございました。３日以内にご返信いたします。
  </div>

<?php get_footer(); ?>