<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<!-- meta情報 -->
	<title><?php bloginfo('name');?></title>
	<meta name="description" content="<?php bloginfo('description') ;?>" />
	<meta name="keywords" content="" />
	<!-- ogp -->
	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<!-- ファビコン -->
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap"
		rel="stylesheet">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
	<!--swiper-->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!--クローラー -->
	<meta name="robots" content="noindex">
  <?php wp_head(); ?>
</head>

<body>
	<!--ヘッダー-->
	<header class="p-header l-header">
		<div class="p-header__inner">
			<div class="p-header__block">
				<!--ロゴ-->
				<h1 class="p-header__logo">
					<a href="#" class="c-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeups">
					</a>
				</h1>
				<!--ハンバーガーボタン-->
				<div class="p-header__drawer c-hamburger js-hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<!--SPメニュー-->
				<nav class="p-header__sp-nav p-sp-nav js-drawer-menu">
				<?php
						wp_nav_menu(
							array(
								'theme_location'=>'drawer',
								'container' => false,
								'menu_class'=>'p-sp-nav__items',
							)
						)
					?>				
					<!-- <ul class="p-sp-nav__items">
						<li class="p-sp-nav__item"><a href="news.html">お知らせ</a></li>
						<li class="p-sp-nav__item"><a href="content.html">事業内容</a></li>
						<li class="p-sp-nav__item"><a href="work.html">制作実績</a></li>
						<li class="p-sp-nav__item"><a href="overview.html">企業概要</a></li>
						<li class="p-sp-nav__item"><a href="blog.html">ブログ</a></li>
						<li class="p-sp-nav__item"><a href="contact.html">お問い合わせ</a></li>
					</ul> -->
				</nav>
				<!--PCメニュー-->
				<nav class="p-header__pc-nav p-pc-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location'=>'global',
								'container' => false,
								'menu_class'=>'p-pc-nav__items',
							)
						)
					?>
					<!-- <ul class="p-pc-nav__items">
						<li class="p-pc-nav__item"><a href="news.html">お知らせ</a></li>
						<li class="p-pc-nav__item"><a href="content.html">事業内容</a></li>
						<li class="p-pc-nav__item"><a href="work.html">制作実績</a></li>
						<li class="p-pc-nav__item"><a href="overview.html">企業概要</a></li>
						<li class="p-pc-nav__item"><a href="blog.html">ブログ</a></li>
						<li class="p-pc-nav__item -p"><a href="contact.html">お問い合わせ</a></li>
					</ul> -->
				</nav>
			</div>
		</div>
	</header>
