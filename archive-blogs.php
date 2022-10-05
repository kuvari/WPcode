<?php
// Template Name: 企業概要
?>

<?php get_header(1); ?>

  <!--メインビュー-->
  <section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/blogs-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blogs-spmv.jpg" alt="ブログトップ画像" />
    </picture>
    <h1 class="c-under-view__body">ブログ</h1>
  </section>
  <!--パンくずリスト-->
  <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li><a href=".">ブログ</a></li>
    </ol>
  </nav>



		<!--ブログボディ-->
		<div class="p-main-blog__list c-card__list">
    <?php
$args = array(
  'post_type' => 'blogs',// 投稿タイプを指定
  'posts_per_page' => 10,// 表示する記事数
);
$news_query = new WP_Query( $args );
if ( $news_query->have_posts() ): 
  while ( $news_query->have_posts() ): 
    $news_query->the_post(); 
?>

<a class="p-works-archive__block" href="">
  <div class="archive-works__image">
    
  </div>
  <div class="archive-works__title"></div>
</a>

			<!--ブログカード-->
			<a href="<?php the_permalink(); ?>" class="c-card__item">
				<figure class="c-card__img">
					<img src="<?php the_post_thumbnail('full'); ?>" alt="">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
            <?php the_title(); ?>
						</div>
						<div class="c-card__text">
            <?php the_content(); ?>
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<time class="c-card__date"><?php the_time('Y.m.d'); ?></time>
					</div>
				</div>
			</a>
      <?php endwhile; else: ?>
<?php endif ?>
<?php wp_reset_postdata(); ?>
</div>


<?php get_footer(); ?>