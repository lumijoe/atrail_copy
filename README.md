# atrail

お知らせ

<!-- お知らせ -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p>
    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 3);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

<!-- news test -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p> -->
<!-- ||| -->
<!-- <div class="page-inner full-width">
      <div class="page-main" id="pg-news">
        <div class="main-container">
          <div class="main-wrapper">
            <div class="newsLists">
              <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  get_template_part('content-archive');
                endwhile;
              endif;
              ?>
            </div>
            <div class="pager">
              <ul class="pagerList">
                <?php
                page_navi();
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 5);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

## wp-config.php

/\*\*

- 開発者へ: WordPress デバッグモード
-
- この値を true にすると、開発中に注意 (notice) を表示します。
- テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
  \*/
  define('WP_DEBUG', false);

/_ 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 _/

/** Absolute path to the WordPress directory. \*/
if (!defined('ABSPATH'))
define('ABSPATH', dirname(**FILE**) . '/');
/** コンタクトフォームの P タグ不要 \*/
define('WPCF7_AUTOP', false);

/\*_ Sets up WordPress vars and included files. _/
require_once(ABSPATH . 'wp-settings.php');

p タグ不要の追加
