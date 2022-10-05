<?php get_header(); ?>
<?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'category_name' => 'news',
		'posts_per_page' => 3,
	)
);
?>

	<div class="p-news l-inner">
	<?php if ( $news_query->have_posts() ) : ?>
	<?php while ( $news_query->have_posts() ) : ?>
	<?php $news_query->the_post(); ?>
	<!--ニュース-->
		<div class="p-news__inner">
			<!--日付-->
			<div class="p-news__block">
				<time><?php the_time('Y.m.d'); ?></time>
				<p class="p-news__category">お知らせ</p>
			</div>
			<!--本文-->
			<div class="p-news__text">
				<a href="<?php the_permalink();?>">
					<?php the_title(); ?>
				</a>
			</div>
			<!--ニュースボタン-->
			<div class="p-news__btn"><a href="<?php get_term_link( $id );?>">すべて見る</a></div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>


	<!--事業内容-->
	<section class="p-main-content l-inner">
		<!--セクションタイトル-->
		<div class="p-main-content__title c-section-title">
			<h2 class="c-section-title__main">事業内容</h2>
			<p class="c-section-title__sub c-section-title__sub--content">content</p>
		</div>
		</div>
		<!--ホバー時マスク画像-->
		<div class="p-main-content__container">
			<ul class="p-main-content__items">
				<li class="p-main-content__item">
					<a href="content.html" class="p-main-content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-content1.jpg" alt="">
						<span>経営理念ページへ</span>
					</a>
				</li>
				<li class="p-main-content__item">
					<a href="content.html" class="p-main-content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-content2.jpg" alt="">
						<span>理念１へ</span>
					</a>
				</li>
				<li class="p-main-content__item">
					<a href="content.html" class="p-main-content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-content3.jpg" alt="">
						<span>理念２へ</span>
					</a>
				</li>
				<li class="p-main-content__item">
					<a href="content.html" class="p-main-content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-content4.jpg" alt="">
						<span>理念３へ</span>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!--斜め線-->-
	<div class="work-bg-line"></div>
	<!--制作実績-->
	<section class="p-main-work  c-bg-line">
		<!--セクションタイトル-->
		<div class="p-main-work__title c-section-title l-inner">
			<h2 class="c-section-title__main">制作実績</h2>
			<p class="c-section-title__sub c-section-title__sub--right">works</p>
		</div>
		<!--PC背景-->
		<div class="p-main-work__bg">
			<!--ボディ-->
			<div class="p-main-work__container l-inner">
				<div class="p-main-work__swiper">
					<!--スライダー-->
					<div class="swiper js-swiper-work">
						<!--画像-->
						<div class="swiper-wrapper">
							<div class="swiper-slide p-main-work__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-works1.jpg" alt=""></div>
							<div class="swiper-slide p-main-work__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-works2.jpg" alt=""></div>
							<div class="swiper-slide p-main-work__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-works3.jpg" alt=""></div>
						</div>
					</div>
					<!--ページネーション-->
					<div class="swiper-pagination"></div>
				</div>
				<!--テキスト-->
				<div class="p-main-work__detail c-detail-body">
					<h3 class="c-detail-body__title">メインタイトルが入ります。</h3>
					<p class="c-detail-body__text">
						テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
					</p>
					<div class="c-detail-body__btn">
						<a href="work.html" class="c-btn">詳しく見る</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--斜め線-->
	<div class="overview-bg-line"></div>
	<!--制作実績-->
	<section class="p-main-overview c-bg-line">
		<!--セクションタイトル-->
		<div class="p-main-overview__title c-section-title  l-inner">
			<h2 class="c-section-title__main">企業概要</h2>
			<p class="c-section-title__sub c-section-title__sub--left">overview</p>
		</div>
		<!--PC背景-->
		<div class="p-main-overview__bg">
			<!--ボディ-->
			<div class="p-main-overview__container l-inner">
				<div class="p-main-overview__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images//common/main-overview.jpg" alt="">
				</div>
				<!--テキスト-->
				<div class="p-main-overview__detail c-detail-body">
					<h3 class="c-detail-body__title">メインタイトルが入ります。</h3>
					<p class="c-detail-body__text">
						テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
					</p>
					<div class="c-detail-body__btn">
						<a href="overview.html" class="c-btn">詳しく見る</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--ブログ-->
	<section class="p-main-blog l-inner">
		<!--セクションタイトル-->
		<div class="p-main-blog__title c-section-title">
			<h2 class="c-section-title__main">ブログ</h2>
			<p class="c-section-title__sub c-section-title__sub--right">blog</p>
		</div>
		<!--ブログボディ-->
		<div class="p-main-blog__list c-card__list">
			<!--Newアイコン-->
			<div class="p-main-blog__icon">
				<p class="c-new-icon">new</p>
			</div>
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-blog1.jpg" alt="">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
						<div class="c-card__text">
							説明文が入ります。説明文が入ります。説明文が入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-blog2.jpg" alt="">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
						<div class="c-card__text">
							説明文が入ります。説明文が入ります。説明文が入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-blog3.jpg" alt="">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
						<div class="c-card__text">
							説明文が入ります。説明文が入ります。説明文が入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
		</div>
		<!--ボタン-->
		<div class="p-main-blog__btn">
			<a href="blog.html" class="c-btn">詳しく見る</a>
		</div>
	</section>

<?php get_footer(); ?>