	<!--お問い合わせ-->
	<section class="p-main-contact l-inner__footer">
		<div class="p-main-contact__inner l-inner">
			<!--セクションタイトル-->
			<div class="p-main-contact__title c-section-title">
				<h2 class="c-section-title__main">お問い合わせ</h2>
				<p class="c-section-title__sub c-section-title__sub--contact">contact</p>
			</div>
			<!--テキスト-->
			<p class="p-main-contact__text">
				テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
			</p>
			<!--ボタン-->
			<div class="p-main-contact__btn">
				<a href="contact.html" class="c-btn">お問い合わせへ</a>
			</div>
		</div>
	</section>
	<!--フッター-->
	<footer class="p-footer l-footer">
		<div class="p-footer__block">
			<!--ロゴ-->
			<h2 class="p-footer__logo">
				<a href="#" class="c-logo">
					<img src="?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeups">
				</a>
			</h2>
			<!--メニュー-->
			<?php
						wp_nav_menu(
							array(
								'theme_location'=>'utility',
								'container' => false,
								'menu_class'=>'p-footer__navs',
							)
						)
					?>
			<!-- <ul class="p-footer__navs">
				<li class="p-footer__nav"><a href="news.html">お知らせ</a></li>
				<li class="p-footer__nav"><a href="content.html">事業内容</a></li>
				<li class="p-footer__nav"><a href="work.html">制作実績</a></li>
				<li class="p-footer__nav"><a href="overview.html">企業概要</a></li>
				<li class="p-footer__nav"><a href="blog.html">ブログ</a></li>
				<li class="p-footer__nav"><a href="contact.html">お問い合わせ</a></li>
			</ul> -->
		</div>
		<!--コピーライト-->
		<div class="p-footer__copyright">
			&copy; 2021 CodeUps Inc.
		</div>
	</footer>
  <?php wp_footer(); ?>
</body>

</html>
