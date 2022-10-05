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

	<section class="p-work-under l-inner">
		<div class="p-work-under__inner">
			<div class="p-work-under__company">
				<p><?php the_title(); ?></p>
			</div>
      <div class="p-work-under__tag">
        <time datetime="2022-09-09"><?php the_time('Y.m.d'); ?></time>
        <p>カテゴリ１</p>
      </div>
			<div class="p-work-under__main">
				<div class="swiper p-work-under__images js-swiper-work-under">
					<!-- メイン -->
					<div class="swiper-wrapper">
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
				<!-- サムネイル -->
				<div class="swiper p-work-under__thumbs js-swiper-thumb">
					<div class="swiper-wrapper">
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
						<div class="swiper-slide p-work-under__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像"></div>
					</div>
				</div>
			</div>
			<div class="p-work-under__blocks">
				<div class="p-work-under__block">
					<div class="p-work-under__title">
						<p>制作のポイント</p>
					</div>
					<div class="p-work-under__text">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
				<div class="p-work-under__block">
					<div class="p-work-under__title">
						<p>デザインのポイント</p>
					</div>
					<div class="p-work-under__text">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
				<div class="p-work-under__block">
					<div class="p-work-under__title">
						<p>その他</p>
					</div>
					<div class="p-work-under__text">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="p-work-under__info">
			<p>関連記事</p>
		</div>

		<div class="c-card__list c-card__list--work">
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item c-card__item--work">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item c-card__item--work">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item c-card__item--work">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像">
				</figure>
				<div class="c-card__container">
					<div class="c-card__body">
						<div class="c-card__title">
							タイトルが入ります。タイトルが入ります。
						</div>
					</div>
					<div class="c-card__info">
						<div class="c-card__category">カテゴリ</div>
						<p class="c-card__date">2021.07.20</p>
					</div>
				</div>
			</a>
		</div>
	</section>
<?php get_footer(); ?>