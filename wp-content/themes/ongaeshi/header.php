<!DOCTYPE html>
<html lang="ja">

<head>

	<!-- Google Tag Manager -->
<script>
	setTimeout(function () { 
	(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-T3WFDBC');
}, 2000);
</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8">

<?php if ( wp_is_phone() ) : ?>
<meta name="viewport" content="width=375">
<?php else: ?>
<meta name="viewport" content="width=1140" />
<?php endif; ?>
	<?php wp_deregister_script( 'jquery' );
		wp_enqueue_script('jquery',get_theme_file_uri().'/assets/js/jquery-3.3.1.min.js');
	?>

	<script>!function(t,i){"function"==typeof define&&define.amd?define([],i):"object"==typeof module&&module.exports?module.exports=i():t.ViewportExtra=i()}("undefined"!=typeof self?self:this,function(){"use strict";var t;return(t=function(t){if(this.minWidth=this.maxWidth=null,"number"==typeof t)this.minWidth=t;else{if("object"!=typeof t)throw new Error("ViewportExtra requires an argument that is number or object");if("number"==typeof t.minWidth&&(this.minWidth=t.minWidth),"number"==typeof t.maxWidth&&(this.maxWidth=t.maxWidth),"number"==typeof this.minWidth&&"number"==typeof this.maxWidth&&this.minWidth>this.maxWidth)throw new Error("ViewportExtra requires that maxWidth is not less than minWidth")}this.applyToElement()}).prototype.applyToElement=function(){if("undefined"!=typeof window){var i=t.createContent(this,window);i&&t.element.setAttribute("content",i)}},t.createContent=function(t,i){var e,n,r;return e=n="",r=[],null!=t.minWidth&&t.minWidth===t.maxWidth?(e="width="+t.minWidth,n="initial-scale="+i.innerWidth/t.minWidth):null!=t.minWidth&&i.innerWidth<t.minWidth?(e="width="+t.minWidth,n="initial-scale="+i.innerWidth/t.minWidth):null!=t.maxWidth&&i.innerWidth>t.maxWidth&&(e="width="+t.maxWidth,n="initial-scale="+i.innerWidth/t.maxWidth),[e,n].forEach(function(t){t&&r.push(t)}),r.join(",")},t.createElement=function(){var t=document.createElement("meta");return t.setAttribute("name","viewport"),t.setAttribute("content","width=device-width,initial-scale=1"),document.head.insertBefore(t,null),t},t.element="undefined"==typeof window?null:document.querySelector('[name="viewport"]')||t.createElement(),t});</script>
	<!-- <script src="<?php bloginfo('template_directory'); ?>/assets/js/lozad.min.js"></script> -->

	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.min.css" type="text/css" />

<script>
window.WebFontConfig = {
  google: { families: ['Material+Icons'] },
  active: function() {
    sessionStorage.fonts = true;
  }
};
   (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
   })(document);
</script>


	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="VfymnetqZW6JoHEXLvLY_U2xq6tXUGZ5dTnsj_9csho" />
		<!-- テンプレートのファイル構成が複雑なのでCSSの変更は以下のファイルで上書きしてます。 -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/add-to-style.css">
</head>

<body id="<?php wp_title(''); ?>">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3WFDBC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="l-page">

		<div class="cam-oshirase">
				<p class="cam-title"><span style="color:#2a4c80;">【W得トク割引を実施中】</span></p>
				<span>お見積り時に</span>
				<span style="color:#ca1c40;">最大3,000円割引!</span>
				<span>詳しくは
						<a style="text-decoration: underline;" href="<?php echo esc_url(home_url('/contact/')); ?>">
								コチラ</a>
						よりお問い合わせください。
				</span>
		</div>

		<div id="marquee" class="clearfix">
			<?php
					$args = array(
							'posts_per_page' => 4, // 表示する投稿数
							'post_type' => array('voice'), // 取得する投稿タイプのスラッグ
							'orderby' => 'date', //日付で並び替え''
							'post_status' => 'publish',
							'order' => 'DESC' // 降順 or 昇順
					);
					$my_posts = get_posts($args);
			?>
			<dl class="loop1">
					<?php foreach ($my_posts as $post) : setup_postdata($post); ?>
							<dt><?php the_time('Y年m月d日'); ?></dt>
							<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
			</dl>
			<dl class="loop2">
					<?php foreach ($my_posts as $post) : setup_postdata($post); ?>
							<dt><?php the_time('Y年m月d日'); ?></dt>
							<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; 
					wp_reset_postdata();
					?>
			</dl>
		</div>


		<header class="p-header">

			
			<div class="p-header_top l-header">
				<h1>
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/logo@2x_pc.png" alt="遺品整理鶴の恩返しロゴ" class="js-imageChange lozad" />
					</a>
				</h1>
				<div class="p-header_top-menu">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/muryo@2x_pc.png" alt="ご相談、お見積もり全て無料" />
						</li>

						<li>
							<div class="p-header-top_tel-01">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/call@2x_pc.png" alt="電話アイコン" />
								<p>0120-479-492</p>
							</div>
							<span>【受付時間】9:00 ~ 21:00</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/mukyu@2x_pc.svg" alt="年中無休" />
						</li>
						<li>
							<a href="/contact/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/mail@2x_pc.png" alt="無料メールお見積もり" />
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/estimate/')); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/line@2x_pc.png" alt="無料ラインお見積もり" />
							</a>
						</li>
						<li class="p-header__toggle">
							<span></span>
							<span></span>
							<span></span>
							<span>メニュー</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="p-nav-overlay"></div>
			<!-- End header-inner-->
		</header>		

		<nav class="p-header-nav">
				<ul class="p-header-nav_pc">
					<li><a href="/">トップ</a></li>
					<li id="menu-toggle" class="menu-toggle"><a href="/service/">サービス</a><span class="material-icons arrow-down">arrow_drop_down</span>
						<ul class="menu-second">
							<li>
								<a href="/service/ihin-seiri/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img1_pc.png" alt="遺品整理" />
									<p class="u-mt20">
										遺品整理
									</p>
								</a>
							</li>
							<li><a href="<?php echo esc_url(home_url('/service/seizen-seiri')); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img2_pc.png" alt="生前整理" />
									<p class="u-mt20">生前整理</p>
								</a>
							</li>
							<li>
								<a href="/service/kaitori/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img3_pc.png" alt="遺品買取" />
									<p class="u-mt20">
										遺品買取
									</p>
								</a>
							</li>
							<li>
								<a href="/service/gomiyashiki/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img4_pc.png" alt="ゴミ屋敷の片付け" />
									<p class="u-mt20">
										ゴミ屋敷の片付け
									</p>
								</a>
							</li>
						</ul>

					</li>
					<li><a href="<?php echo esc_url(home_url('/price/')); ?>">料金のご案内</a></li>
					<li><a href="<?php echo esc_url(home_url('/reason/')); ?>">選ばれる理由</a></li>
					<li><a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a></li>
					<li id="menu-toggle" class="menu-toggle"><a href="/flow/">ご利用案内</a><span class="material-icons arrow-down">arrow_drop_down</span>
						<ul class="menu-second">
							<li>
								<a href="<?php echo esc_url(home_url('/first/')); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img1_pc.png" alt="遺品整理" /> -->
									<p class="u-mt20">
										初めての方へ
									</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/flow/')); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img1_pc.png" alt="遺品整理" /> -->
									<p class="u-mt20">
										ご利用の流れ
									</p>
								</a>
							</li>
							<li><a href="<?php echo esc_url(home_url('/faq/')); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img2_pc.png" alt="生前整理" /> -->
									<p class="u-mt20">よくある質問</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/estimate/')); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img3_pc.png" alt="遺品買取" /> -->
									<p class="u-mt20">
										無料LINEお見積り
									</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/area-list/')); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img4_pc.png" alt="ゴミ屋敷の片付け" /> -->
									<p class="u-mt20">
										対応エリア
									</p>
								</a>
							</li>
						</ul>

					</li>
					<li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社案内</a></li>
				</ul>
				<div class="header-txt">故人の遺品整理、生前整理・ゴミ屋敷の片付けなら鶴の恩返し</div>
				<ul class="p-header-nav_sp">
					<div class="sp-nav-contacts">
						<p class="sp-nav-tell">

							<span class="call-icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/call-icon.svg" alt="遺品整理鶴の恩返し電話番号"></span>
							<a href="tel:0120-479-492">0120-479-492<span class="call-cap">【受付時間】9:00 ~ 21:00</span></a>

						</p>
						<p class="sp-nav-bnr">
							<a href="/contact/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/mail-bnr.svg" alt="遺品整理鶴の恩返しメール">
							</a>
							<a href="<?php echo esc_url(home_url('/estimate/')); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/line-bnr.svg" alt="無料ラインお見積もり">
							</a>
						</p>
					</div>

					<li>
						<a href="/">トップ</a>
					</li>
					<li id="acMenu" class="accordion-menu">
						サービス<span class="material-icons arrow-down">arrow_drop_down</span>
						<ul class="menu-second_sp">
							<li><a href="/service/">サービス-トップ-</a></li>
							<li><a href="/service/ihin-seiri/">遺品整理</a></li>
							<li><a href="/service/seizen-seiri/">生前整理</a></li>
							<li><a href="/service/kaitori/">遺品買取</a></li>
							<li><a href="/service/gomiyashiki/">ゴミ屋敷の片付け</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/price/')); ?>">料金のご案内</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/reason/')); ?>">選ばれる理由</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
					</li>
					<li id="acMenu" class="accordion-menu">
						ご利用案内<span class="material-icons arrow-down">arrow_drop_down</span>
						<ul class="menu-second_sp">
							<li><a href="<?php echo esc_url(home_url('/first/')); ?>">初めての方へ</a></li>
							<li><a href="<?php echo esc_url(home_url('/flow/')); ?>">ご利用の流れ</a></li>
							<li><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
							<li><a href="<?php echo esc_url(home_url('/estimate/')); ?>">無料LINEお見積り</a></li>
							<li><a href="<?php echo esc_url(home_url('/area-list/')); ?>">対応エリア</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/company/')); ?>">会社案内</a>
					</li>

				</ul>
			</nav>
