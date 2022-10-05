<?php
// Template Name: 企業概要
?>

<?php get_header(1); ?>

  <!--メインビュー-->
  <section class="c-under-view c-under-view__inner">
    <picture class="c-under-view__img">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-mv.jpg)" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-spmv.jpg" alt="企業概要トップ画像" />
    </picture>
    <h1 class="c-under-view__body">企業概要</h1>
  </section>
  <!--パンくずリスト-->
  <nav class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href=".">トップ</a></li>
      <li><a href=".">企業概要</a></li>
    </ol>
  </nav>
  <!--企業概要-->
  <section class="l-inner__overview">
    <!--
    <ul class="overview-body">
      <li class="overview-body__block"></li>
        <p class="overview-body__title">会社名</p>
        <p class="overview-body__text">株式会社CodeUps</p>
      <li class="overview-body__block"></li>
        <p class="overview-body__title">会社名</p>
        <p class="overview-body__text">株式会社CodeUps</p>
    </ul>-->
    <table class="overview-body overview-body__inner">
      <tr>
      <th>会社名</th>
      <td>株式会社CodeUps</td>
      </tr>
      <tr>
      <th>設立</th>
      <td>テキストが入ります。</td>
      </tr>      
      <tr>
      <th>資本金</th>
      <td>テキストが入ります。</td>
      </tr>
      <tr>
      <th>売上高</th>
      <td>テキストが入ります。</td>
      </tr>
      <tr>
      <th>代表者</th>
      <td>テキストが入ります。</td>
      </tr>
      <tr>
      <th>従業員数</th>
      <td>テキストが入ります。</td>
      </tr>
      <tr>
      <th>事業内容</th>
      <td>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</td>
      </tr>      
      <tr>
      <th>所在地</th>
      <td>東京駅</td>
      </tr>
    </table>

    <div class="overview-map inner">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493611525882!3d35.68123618019432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1646718818819!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

<?php get_footer(); ?>