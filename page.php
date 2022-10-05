<?php get_header(); ?>

$args = array(
        'post_type'=>’post_typeを書く’,
        'posts_per_page'=> 1ページに表示する記事の数,
        'order' => ‘昇順か降順かを書く’, DESCかASC
        'orderby' => ‘どの値を基準に記事を並べるか’,
        'paged' => $paged, ページ番号、これがないとページナビがバグる
    );
    $wp_query = new WP_Query( $args ); // ここでWP_Queryのクラスに$argsの配列を入れて情報を取得
?>
    <?php if ($wp_query->have_posts() ) : // 記事があれば記事を取得 ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        // ここに処理を記述する
        <?php endwhile; ?>
    <?php else : ?>
        // 記事がない場合の処理を書く
    <?php endif; ?>
<?php wp_reset_postdata(); ?> // これがない後々バグを起こします

<?php get_footer(); ?>