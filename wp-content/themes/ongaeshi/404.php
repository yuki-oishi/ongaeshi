<!-- 404.php -->
<?php get_header(); ?>
<main>
    <h2>お探しのページは見つかりませんでした。</h2>
    <p>We can't find this page / 404 error/</p>
    <p>このページのURLを間違えている可能性があります。 ： <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
    <p>You might mistake type this page URL ： <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
    <p class="u-mt30"><a href="<?php echo home_url(); ?>">TOPページに戻る。</a></p>
</main>
<?php get_footer(); ?>
