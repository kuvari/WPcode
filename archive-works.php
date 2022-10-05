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
    </ol>
  </nav>

 

<div class="p-works-archive l-inner">
  <?php
$args = array(
  'post_type' => 'works',// 投稿タイプを指定
  'posts_per_page' => 10,// 表示する記事数
);
$news_query = new WP_Query( $args );
if ( $news_query->have_posts() ): 
  while ( $news_query->have_posts() ): 
    $news_query->the_post(); 
?>

<a class="p-works-archive__block" href="<?php the_permalink(); ?>">
  <div class="archive-works__image">
    <?php the_post_thumbnail('full'); ?>
  </div>
  <div class="archive-works__title"><?php the_title(); ?></div>
</a>

<?php endwhile; else: ?>
<?php endif ?>
<?php wp_reset_postdata(); ?>
</div>
<!-- <?php get_footer(); ?>