<?php get_header(1); ?>

  <!--パンくずリスト-->
  <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li><a href=".">ブログ記事一覧</a></li>
      <li><a href=".">ブログ記事詳細</a></li>
    </ol>
  </nav>

	<section class="p-blog-under l-inner">
		<div class="p-blog-under__inner">
			<div class="p-blog-under__blogs">
				<p><?php the_title(); ?></p>
			</div>
			<div class="p-blog-under__main">
				<div class="p-blog-under__images">
					<img src="<?php the_post_thumbnail('full'); ?>" alt="">
				</div>
			</div>
			
			<div class="p-blog-under__main">
				<div class="p-blog-under__text">
					<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
				</div>
			</div>

			<div class="p-blog-under__main">
				<h3 class="p-blog-under__title1">見出し２</h3>
			</div>
			
			<div class="p-blog-under__main">
				<div class="p-blog-under__text">
					<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
				</div>
			</div>

			<div class="p-blog-under__main">
				<h3 class="p-blog-under__title2">見出し３見出し３見出し３見出し３</h3>
			</div>
			
			<div class="p-blog-under__main">
				<div class="p-blog-under__text">
					<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
				</div>
			</div>

			<div class="p-blog-under__main">
				<div class="p-blog-under__images">
					<img src="/images/common/blog2.jpg" alt="">
				</div>
			</div>

			<div class="p-blog-under__main">
				<ol class="p-blog-under__bullet">
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
				</ol>
			</div>
			<div class="p-blog-under__main">
				<ol class="p-blog-under__number">
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
					<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
				</ol>
			</div>

		</div>

		<div class="p-blog-under__info">
			<p>関連記事</p>
		</div>

		<div class="c-card__list c-card__list--work">
			<!--ブログカード-->
			<a href="blog.html" class="c-card__item c-card__item--blog">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/work1.jpg" alt="">
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
			<a href="blog.html" class="c-card__item c-card__item--blog">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/work1.jpg" alt="">
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
			<a href="blog.html" class="c-card__item c-card__item--blog">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/work1.jpg" alt="">
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
			<a href="blog.html" class="c-card__item c-card__item--blog">
				<figure class="c-card__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/work1.jpg" alt="">
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