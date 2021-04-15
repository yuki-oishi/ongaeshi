<?php
/*
Template Name: トップページ
*/
?>

            <?php get_header(); ?>
            <main class="p-top">
                <div class="p-top-mv">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv_pc.jpg" alt="遺品整理鶴の恩返しイメージ" class="js-imageChange"/>
                </div>
                <!-- Start area-->
                <div class="p-top-area">
                    <div class="l-row02 ">
                        <div class="p-top-area__wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/area_map@2x_pc.png" alt="対応エリア" class="p-top-area__pc" usemap="#image-map" width: 1100px; height: 612px;>
														
<?php
            //タームの取得
            $terms = get_terms('area_category', 'get=all');
            //タームを出力
            if (!empty($terms) && !is_wp_error($terms)) {
                ?>
                <?php foreach ($terms as $term) {
                    ?>

<map name="image-map">
    <area target="" alt="gunma" title="gunma" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="742,144,659,105" shape="rect">

    <area target="" alt="saitama" title="saitama" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="662,151,741,189" shape="rect">

    <area target="" alt="tokyo" title="tokyo" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="663,197,741,231" shape="rect">

    <area target="" alt="kanagawa" title="kanagawa" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="662,242,741,282" shape="rect">

    <area target="" alt="totigi" title="totigi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="750,108,829,141" shape="rect">

    <area target="" alt="ibagragi" title="ibagragi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="751,151,828,188" shape="rect">

    <area target="" alt="tiba" title="tiba" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="750,196,826,231" shape="rect">

    <area target="" alt="yamanashi" title="yamanashi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="662,421,740,456" shape="rect">

    <area target="" alt="shizuoka" title="shizuoka" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="663,467,741,503" shape="rect">
</map>

<?php
} ?>
<?php
} ?>                       

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/area_map@2x_sp.png" alt="対応エリア" class="p-top-area__sp" usemap="#image-map2" width: 400px; height: 789px;>
                            

<?php
//タームの取得
$terms = get_terms('area_category', 'get=all');
//タームを出力
if (!empty($terms) && !is_wp_error($terms)) {
?>
<?php foreach ($terms as $term) {
?>

<map name="image-map2">

    <area target="" alt="yamanashi" title="yamanashi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="99,564,221,619" shape="rect">

    <area target="" alt="shizuoka" title="shizuoka" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="101,635,219,687" shape="rect">

    <area target="" alt="gunma" title="gunma" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="351,418,474,475" shape="rect">

    <area target="" alt="totigi" title="totigi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="485,418,606,476" shape="rect">

    <area target="" alt="saitama" title="saitama" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="351,490,475,546" shape="rect">

    <area target="" alt="ibaragi" title="ibaragi" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="486,490,606,546" shape="rect">

    <area target="" alt="tokhyo" title="tokyo" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="353,558,472,615" shape="rect">

    <area target="" alt="tiba" title="tiba" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="485,557,609,614" shape="rect">

    <area target="" alt="kanagawa" title="kanagawa" href="<?php echo get_term_link($term->slug, 'area_category'); ?>" coords="350,627,472,687" shape="rect">
</map>

<?php
} ?>
<?php
} ?> 

                            
                            <div class="p-top-area__txt">
                                <p>遺品整理の鶴の恩返しは関東圏を全てカバー。お客様のご自宅の最寄りの拠点からスタッフがお伺いしますので、スピーディーかつリーズナブルに作業させていただきます。対応エリア外でも出張可能な範囲であれば柔軟に対応させていただきますので、お気軽にご相談ください。</p>
                                <span>※対応エリア以外でも出張が可能な地域もあります!
                                    出張料金や追加請求などは一切ございません! お気軽にお問い合わせください。</span>
                            </div>
                        </div><!-- End area__wrap-->
                    </div><!-- End inner-->
                </div><!-- End area-->

                    <div class="p-top-contents_wrap l-row02">
                        <div class="l-contents ">
                        <div class="p-top_trable">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/onayami_pc.png" alt="遺品整理でこんなお悩みありませんか？" class="js-imageChange"/>
                            <ul>
                                <li>大量に物があって<span class="c-txt_underline">整理がしきれない</span></li>
                                <li>大きな家財道具や家電があって<span class="c-txt_underline">一人では運べない</span></li>
                                <li>賃貸物件で<span class="c-txt_underline">退去日が迫っている</span></li>
                                <li>忙しくて<span class="c-txt_underline">遺品整理にまで手が回らない</span></li>
                                <li>大量の<span class="c-txt_underline">不用品の処分に困っている</span></li>
                                <li>骨董品や美術品を<span class="c-txt_underline">買取ってほしい</span></li>
                                <li>想い出の品や大事な書類などを<span class="c-txt_underline">探してほしい</span></li>
                                <li>遠方に住んでいるから<span class="c-txt_underline">1 日で作業を終わらせたい</span></li>
                                <li>すぐにでも家の中を<span class="c-txt_underline">整理してほしい</span></li>
                                <li>なるべく<span class="c-txt_underline">安く遺品整理をお願いしたい</span></li>
                            </ul>
                            <div class="p-top_trable-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/banner@2x_pc.png" alt="鶴の恩返しにお任せください" class="js-imageChange"/>
                            </div>
                        </div><!-- End trable-->

                            <div class="p-top_sport c-mt80
                            ">
                                <h2 class="c-h2">実績豊富なスタッフがサポート</h2>
                                <p class="c-mt40 p-top-inner_sp">
                                    鶴の恩返しは遺品整理や不用品買取を専門に行っている業者です。<span class="c-txt_underline">スタッフはさまざまな現場で経験を積んでいるので、スムーズに遺品を整理します。</span>室内清掃やゴミ屋敷の整理など、一般の方が手を付けられないような状況でも対応可能です。ご遺族の方の心情に配慮し、故人と遺品に敬意を払いながら、<span class="c-txt_red">一品一品心を込めて仕分け</span>をさせていただきます。
<br>
<br>
遺品整理をご依頼される方は急いでおられるケースがほとんどです。私たちはご遺族の方のご期待に応えるべく、<span class="c-txt_red">スピーディーな対応</span>を大切にしています。現地調査や作業日もお客さまのご都合に合わせて行わせていただき、<span class="c-txt_underline">最短即日の作業も可能です。</span>
<br>
<br>
不用品の処分もお任せください。当社のトラックですべて持ち帰らせていただくため、<span class="c-txt_red">お客さまが労力と時間をかけて不用品を処分する必要はありません。</span>美術品や骨董品、家電、家具、人形や昭和のレトロなおもちゃなど、価値があるものは買い取らせていただきますので、<span class="c-txt_underline">大切な遺品を現金化することも可能です。</span><br>
<br>
ぜひ、遺品整理は鶴の恩返しにお任せください。

                                </p>
                            </div>

                            <div class="p-top_account c-mt80">
                                <h2 class="c-h2_double">リーズナブルで明朗会計!<br class="u-hidden-pc">追加料金はかかりません</h2>
                                <p class="c-mt40 p-top-inner_sp">鶴の恩返しの強みは<span class="c-txt_red">リーズナブルな料金設定と明朗会計</span>です。遺品整理に必要な費用はすべて基本料金に含まれているから、<span class="c-txt_underline">作業修了後に追加料金を請求するということはございません。</span>
                                </p>
                            </div>

                            <!-- Start blue-area-->
                            <div class="p-top_blueArea">
                                <div class="p-top_blue-01 ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/compare@2x_pc.png" alt="料金比較" />
                                </div><!-- End blue-item01-->

                                <div class="p-top_blue-02">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/question@2x_pc.png" alt="アンケート割引" class="js-imageChange"/>
                                </div><!-- End blue-item02-->

                                <div class="p-top_blue-03">
                                    <div class="p-top_blue-03Img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/komikomi_pc.png" alt="鶴の恩返しは明朗会計で全部コミコミ" class="js-imageChange"/>
                                    </div>

                                    <div class="p-top_blue-03Txt">
                                        <ul>
                                            <li>上記の料金は目安です。お部屋の状況によって変動することもございますので、まずはお見積りをご依頼ください。</li>
                                            <li>正式な料金は現場調査でご状況やご要望を確認させていただいた上でお見積りします。内訳も詳しく記載しておりますので、ご安心ください。</li>
                                            <li>料金に含まれるサービスのなかには機材等が必要なものもございます。現地調査の際にお客さまにご確認します。</li>
                                            <li>本格的なハウスクリーニングは別途お見積りとなりますので、ご希望がございましたらお申し付けください。</li>
                                            <li>買取サービスをご利用いただくことにより、さらにお客さまのご負担を大幅に軽減することができますので、ぜひご利用ください。</li>
                                        </ul>
                                    </div>
                                </div><!-- End blue-item03-->

                                <div class="p-top_blue-04">
                                    <span class="p-top_h3-before">他社には絶対真似できない！</span>
                                    <h3>鶴の恩返しの料金が安い<br class="u-hidden-pc"><span class="">3</span><span>つの理由</span></h3>
                                    <div class="p-top_blue-04Item">
                                        <h4 class="p-top_step_01">効率を<br class="u-hidden-pc">徹底しています</h4>

                                        <p>鶴の恩返しには遺品整理の実績豊富なスタッフが多数在籍。正しい知識をもち、これまでの経験から培ったノウハウで、効率的な作業を実現。さらに拠点を複数設けることで移動時間やトラックの消費燃料も削減。人件費や経費の無駄がないから、<span class="c-txt_underline">その分お客さまに還元できるのです。</span></p>
                                    </div><!-- End item01-->

                                    <div class="p-top_blue-04Item">
                                        <h4 class="p-top_step_02">広告宣伝費を<br class="u-hidden-pc">お客さまに還元</h4>

                                        <p>多くの遺品整理業者はチラシやポスティング、新聞や雑誌広告を使って集客を行っています。それにかかった費用は当然お客さまが支払う料金に上乗せされることになります。鶴の恩返しは必要最低限の宣伝しかしていません。<span class="c-txt_underline">サービスの質が良いので、広告をかけずともお客さまから選ばれています。</span>だからこそ、リーズナブルな価格が実現できるのです。</p>
                                    </div><!-- End item02-->

                                    <div class="p-top_blue-04Item">
                                        <h4 class="p-top_step_03">不用品のリサイクルで<br class="u-hidden-pc">利益を確保</h4>
                                        <p>お客さまのご自宅で不用品として回収した物のなかには、まだ使えるものも数多くあります。こうしたものをゴミとして捨ててしまうのではなく、オークションやリサイクル販売に出します。<span class="c-txt_underline">遺品整理以外にも利益を得られるから、お客さまに格安な料金でサービスをご提供できるのです。</span></p>
                                    </div><!-- End item03-->
                                </div><!-- End blue-item04-->
                            </div><!-- End blueArea-->

                            <a href="<?php echo esc_url(home_url('/price/')); ?>" class="c-btn_yellow p-top_price-btn">料金のご案内はこちらへ</a>

                            <div class="p-top_services c-mt80">
                                <h2 class="c-h2">安さをお客さまの目でお確かめください！</h2>
                                <div class="p-top_services-flex c-p15">
                                    <div class="p-top_services-txt">
                                        <p>鶴の恩返しはただ単に遺品を整理するだけではありません。<span class="c-txt_underline">遺品買取、不用品回収、お部屋の片付けまで、一貫してご依頼いただけます。</span>しかも、これらのサービスも<span class="c-txt_red">遺品整理と同様に業界最安値水準で実現</span>します。</p>
                                    </div>
                                    <div class="p-top_services-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-man.jpg" alt="遺品買取、不用品回収、お部屋の片付けまで、一貫してご依頼いただけます。">
                                    </div>
                                </div>
                                <p class="c-p15"> すべて任せられるから安心。遺品がたくさん残っているお部屋、物で溢れかえっているようなお部屋、そもそも室内清掃が必要で一般の方では対処しきれないようなお部屋でも、もとのようにきれいに整理して清掃します。<br>
                                    <br>
                                    当社のサービスを一覧にまとめたので、ぜひご確認ください。</p>
                            </div>

                            <section class="p-ihinseiri_services">
                                <h2 class="c-h2_pc-double">遺品整理のプロ集団<br>鶴の恩返しの便利なサービス一覧
                                </h2>

                                <div class="p-service__listbox">
                                    <figure class="p-service__title">
                                            <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/services@2x_pc.png"
                                                    alt="遺品整理鶴の恩返しの充実なサービス内容">
                                    </figure>
                                    <ul class="p-service__lists">
                                            <li>
                                                    <a href="/service/ihin-seiri/">
                                                            <figure>
                                                                    <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/link-01_pc.png"  alt="遺品整理">
                                                            </figure>
                                                    </a>
                                                </li>
                                            <li>
                                                    <a href="/service/seizen-seiri/" >
                                                            <figure>
                                                                    <img alt="生前整理" class="js-imageChange"
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/service/link-02_pc.png" alt="生前整理">
                                                            </figure>
                                                    </a>
                                            </li>
                                            <li>
                                                    <a href="/service/kaitori/" >
                                                            <figure>
                                                                    <img alt="遺品買取" class="js-imageChange"
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/service/link-03_pc.png" alt="遺品買取">
                                                            </figure>
                                                    </a>
                                            </li>
                                            <li>
                                                    <a href="/service/gomiyashiki/" >
                                                            <figure>
                                                                    <img alt="ゴミ屋敷の片付け" class="js-imageChange"
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/service/link-04_pc.png">
                                                            </figure>
                                                    </a>
                                            </li>
                                    </ul>
                            </div>

                            </section>

                            <section class="p-flow p-top_flow">
                                <h2 class="c-h2_big">鶴の恩返しでは遺品整理作業を<br>
                                        スムーズに行います
                                </h2>
                                <figure class="p-flow__img">
                                        <img alt="遺品整理サービスまでの流れ" class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_pc.png">
                                </figure>
                                <p class="p-flow__txt u-pt20">
                                    鶴の恩返しでは現地調査でお客さまのお宅を訪問したスタッフが、そのまま遺品整理作業も行います。直接ご状況を確認し、ご要望をお聞きしたスタッフが作業をさせていただくため、非常にスムーズかつ的確な遺品整理を実現します。他のスタッフに予定の調整や引き継ぎなどをする必要もないので、その分スピーディーな対応も可能です。<br>
                                    <br>
                                    <span class="c-txt_underline">お問い合わせいただいてから作業まで最短1日。</span>どこよりも早い対応が自慢です。

                                </p>
                        </section>

                        <section class="p-saiyasu">
                        <figure class="p-saiyasu__img">
                        </figure>
                        <div class="p-contact__links p-saiyasu__links">
                            <a class="tell-btn c-tell" href="tel:0120-479-492">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/call_pc.png" alt="遺品整理鶴の恩返し電話番号">
                                                  </a>
                            <a class="mail-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/mail_pc.png" alt="無料メール見積り">
                            </a>
                        </div>
                                        </section>
                                        
<section class="p-7reasons p-top_reasons">
    <figure class="p-7reasons__hedline">
            <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/topic@2x_pc.png" alt="鶴の恩返しが他社よりも圧倒的に選ばれる7つの理由">
    </figure>
    <div class="p-7reasons__cards cards-01">
            <div class="p-7reasons__card card01">
                    <div class="p-7reasons__card--title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/1.png" alt="理由1">
                            <h3>
                                業界最安値水準のリーズナブルな料金
                            </h3>
                    </div>
                    <div class="p-7reasons__card--txt p-reason-card_wrap">

                            <figure class="card-caption p-reason-card_img">
                                    <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img1@2x_pc.png" alt="リーズナブルな料金">
                             </figure>
                             <p>
                                鶴の恩返しでは作業効率化と広告宣伝費などの徹底的なコストダウン、不用品の販売などによる収益化によって、サービスや対応の質を落とさず業界最安値水準の料金を実現。どこよりも安い自信がございます。また<span class="c-txt_red">キャンペーンや不用品の買取りサービスをご利用いただくことで更に割引も可能</span>です。<span class="c-txt_underline">他社よりも1円でも高ければご相談ください。</span>

                             </p>
                    </div>
            </div><!-- End item 01-->

            <div class="p-7reasons__card card02">
                    <div class="p-7reasons__card--title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/2.png" alt="理由2">
                            <h3>
                                必要なものは全部コミコミ

                            </h3>
                    </div>
                    <div class="p-7reasons__card--txt p-reason-card_wrap">

                            <figure class="card-caption p-reason-card_img">
                                    <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img2@2x_pc.png" alt="全部コミコミ">
                            </figure>
                            <p>
                                遺基本料金には遺品の仕分け、作業時の養生、遺品の梱包、お部屋の清掃、不用品の処分、遺品買取など、遺品整理作業に必要な費用がすべて含まれております。そのため、お客さまからの追加作業のご依頼がないかぎり、<span class="c-txt_underline">現地調査でお見積りをさせていただいた金額に追加料金が上乗せされることはありません。</span>

                            </p>
                    </div>
            </div>
    </div>
    <div class="p-7reasons__cards cards-02">
            <div class="p-7reasons__card card01">
                    <div class="p-7reasons__card--title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/3.png" alt="理由3">
                            <h3>
                                どこよりも早いスピーディーな対応

                            </h3>
                    </div>
                    <div class="p-7reasons__card--txt p-reason-card_wrap">
                            <figure class="card-caption p-reason-card_img">
                                    <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img3@2x_pc.png" alt="スピーディーな対応">
                            </figure>
                            <p>
                                鶴の恩返しは他社よりも素早くお客さまのご要望にお応えします。遺品整理や室内清掃などは急いでいらっしゃる方がほとんど。私たちはそんなご遺族の方の想いに応えるべく、社内体制を見直し、<span class="c-txt_underline">お問い合わせいただいてから最短1日でのスピード対応を実現</span>しました。「今すぐに来てほしい！」という切実なご希望にも着実にお応えします。

                            </p>
                    </div>
            </div>
            <div class="p-7reasons__card card02">
                    <div class="p-7reasons__card--title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/4.png" alt="理由4">
                            <h3>
                                複数のサービスを組み合わせられる

                            </h3>
                    </div>
                    <div class="p-7reasons__card--txt p-reason-card_wrap">

                            <figure class="card-caption p-reason-card_img">
                                    <img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img4@2x_pc.png" alt="複数のサービスを組み合わせ">
                            </figure>
                            <p>
                                鶴の恩返しでは遺品整理だけではなく、室内清掃やゴミ屋敷の片付け、遺品の買取や不用品の買取など、さまざまなメニューをご用意しています。<span class="c-txt_underline">「ゴミ屋敷のお部屋から大切なものだけを仕分けしてほしい」「遺品を整理した後にしっかりと清掃してほしい」「遺品を現金化してほしい」</span>といったご要望にもお応えできますので、お気軽にご相談ください。
                            </p>
                    </div>
            </div>
    </div>
    <div class="p-7reasons__cards cards-03">
                    <div class="p-7reasons__card card01">
                            <div class="p-7reasons__card--title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/5.png" alt="理由5">
                                    <h3>
                                        お客さまのご要望にきめ細かく対応いたします

                                    </h3>
                            </div>
                            <div class="p-7reasons__card--txt p-reason-card_wrap">

                                    <figure class="card-caption p-reason-card_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img5@2x_pc.png" alt="ご要望にきめ細かく対応いたします">
                                     </figure>
                                    <p>
                                        「たくさんある遺品の中から想い出の品を探してほしい」「通帳や権利書などを見つけてほしい」といった<span class="c-txt_underline">お客さまのご要望にも現場できめ細かく対応いたします。</span>何が必要で、何が不要か、いただいたご指示にもとづき分別作業を行い、完了時にはお客さまお立ち会いのもとで確認いただきますので、安心してお任せいただけます。

                                    </p>
                            </div>
                    </div>
                    <div class="p-7reasons__card card02">
                    <div class="p-7reasons__card--title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/6.png" alt="理由6">
                            <h3>
                                お客さまの手間が一切要らない
                            </h3>
                    </div>
                    <div class="p-7reasons__card--txt p-reason-card_wrap">

                            <figure class="card-caption p-reason-card_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img6@2x_pc.png" alt="お客さまの手間が一切要らない">
                            </figure>
                            <p>
                                鶴の恩返しでは基本料金内で遺品整理作業から不用品の搬出、お部屋の清掃まで一貫して対応いたします。一人ではできない大型の家具家電の搬出や、手間がかかる不用品の分別や処分、面倒な掃除も、すべてお任せいただけるから、<span class="c-txt_underline">お客さまの手間は一切不要</span>です。お忙しい方やお体が不自由な方、遠方の方にも便利にご利用いただけます。

                            </p>
                    </div>
                    </div>
    </div>
 <div class="p-7reasons__cards cards-04">
                <div class="p-7reasons__card card-last">
                        <div class="p-7reasons__card--title">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/7.png" alt="理由7">
                                <h3>
                                    不要になった遺品を買取ります

                                </h3>
                        </div>
                        <div class="p-7reasons__card--txt card-last__txt p-reason-card_wrap-last">

                                <figure class="card-caption p-reason-card_img-last">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7reasons/top/img7@2x_pc.png" alt="不要になった遺品を買取ります">
                                </figure>
                                <p>
                                    まだ使える家具や家電、機械や車両などの買取りにも対応しています。故人のコレクションや愛用品のなかで骨董品としての価値が認められるものが出てくるケースも少なくありません。<span class="c-txt_underline">遺品を売却した利益を作業料金の支払いに充てることも可能。</span>場合によっては作業金額を上回る値段で売れることも考えられます。<span class="c-txt_red">腕利きの鑑定士が直接査定しますので、他社よりも高価買取が実現</span>できます。
                                </p>
                        </div>
                </div>
 </div>
 <a href="<?php echo esc_url(home_url('/reason/')); ?>" class="c-btn_yellow p-top_reasons-btn">詳しくはこちらへ</a>
</section>


<div class="p-top-voice ">
<h2 class="c-h2">お客様の声</h2>


<div class="swiper-container">
<div class="swiper-wrapper">

<?php
        $paged = get_query_var('paged') ?: 1;
        $args = array(
                'post_type' => 'voice',
                'posts_per_page' => -1,
                'paged' => $paged,
        );
        $voice_all_query = new WP_Query($args);
        if ($voice_all_query->have_posts() ) :
            while ( $voice_all_query->have_posts() ) : $voice_all_query->the_post();
                ?>
                <?php get_template_part('template-parts/voice-list'); ?>
            <?php endwhile;
        endif;
        wp_reset_query();
        ?>

</div>
</div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
<a href="<?php echo esc_url(home_url('/voice/')); ?>" class="c-btn c-btn_yellow u-mt40">お客様の声一覧を見る
																		</a>
</div>

                            <h2 class="c-h2_big c-mt80">鶴の恩返しでは幅広いエリアで<br>
                                スピード対応が可能です</h2>
                            <section class="p-areaMap p-top-area_blue">
                                <figure class="p-areaMap__img">
                                        <img alt="鶴の恩返しの対応エリア" class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/area_pc.png">
                                </figure>
                                <p class="p-areaMap__txt p-top-area_blue-txt">鶴の恩返しでは東京都を中心に関東圏の幅広いエリアでスピーディーな対応をいたします。交通費や車両費なども一切不要です。また、以下のエリア外のお客さまでも柔軟に対応させていただきますので、お気軽にご相談ください。
                                </p>

                                <div class="p-areaMap__list p-top-area_blue-list">
                                        <ul>
                                        <li>栃木県</li>
                                            <li>群馬県</li>
                                            <li>埼玉県</li>
                                            <li>千葉県 </li>
                                            <?php
                                            //タームの取得
                                            $terms = get_terms('area_category', 'get=all');
                                            //タームを出力
                                            if(!empty($terms) && !is_wp_error($terms)) {
                                                ?>
                                                <?php foreach($terms as $term){ ?>
                                                <li>
                                                    <a href="<?php echo get_term_link($term->slug, 'area_category'); ?>"><?php echo $term->name?></a>
                                                </li>
                                                <?php } ?>
                                            <?php } ?>
                                            <li>神奈川県</li>
                                            <li>静岡県</li>
                                            <li>山梨県</li>
                                        </ul>
                                </div>
                                <p class="p-areaMap__cap">※順次エリア拡大中です!一部対応できない地域もあるため事前にご相談ください。</p>
                        </section>

                            <div class="p-top_news c-mt80">
                                <h2 class="c-h2">お知らせ</h2>
                                <div class="p-top_news-wrap">
                                    <input id="tab1" type="radio" name="tab_btn" checked>
 <input id="tab2" type="radio" name="tab_btn">
                                    <div class="p-top_news-tab tab_area">

 <label class="tab1_label" for="tab1">新着情報</label>
 <label class="tab2_label" for="tab2">メディア掲載情報</label>
                                    </div><!-- End tab-->
                                    <div class="p-top_news-tab-wrap panel_area">
                                    <div class="p-top_news-new tab_panel" id="panel1">
                                        <div class="p-top_news-item-wrap">
                                            <?php query_posts(
                                                array(
                                                'post_type' => 'news', //カスタム投稿名を指定
                                                'taxonomy' => 'news_category',     //タクソノミー名を指定
                                                'term' => 'new',           //タームのスラッグを指定
                                                'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
                                                )
                                            ); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()):the_post(); ?>
                                            <div class="p-top_news-item">
                                                <a href="<?php the_permalink();?>">
                                                <div class="p-top_news-itemImg">
                                                    <img src="<?php the_field('mv'); ?>" alt="新着情報">
                                                </div>
                                                <div class="p-top_news-itemTxt">
                                                    <p><?php the_time('Y/m/j'); ?></p>
                                                    <span class="c-cat c-cat_01">新着情報</span>
                                                    <h4 class="abbr-s-ttl"><?php the_title(); ?></h4>
                                                </div>
                                            </a>
                                            </div><!-- End item-->
                                                <?php endwhile;
                                            endif; ?>
                                        <?php wp_reset_query(); ?>

                                        </div><!-- End item-wrap-->
                                    </div><!-- End new-->

                                    <div class="p-top_news-media tab_panel" id="panel2">
                                        <div class="p-top_news-item-wrap">
                                            <?php query_posts(
                                                array(
                                                'post_type' => 'news', //カスタム投稿名を指定
                                                'taxonomy' => 'news_category',     //タクソノミー名を指定
                                                'term' => 'media',           //タームのスラッグを指定
                                                'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
                                                )
                                            ); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()):the_post(); ?>
                                            <div class="p-top_news-item">
                                                <a href="<?php the_permalink();?>">
                                                <div class="p-top_news-itemImg">
                                                    <img src="<?php the_field('mv'); ?>" alt="メディア掲載情報">
                                                </div>
                                                <div class="p-top_news-itemTxt">
                                                    <p><?php the_time('Y/m/j'); ?></p>
                                                    <span class="c-cat c-cat_01">メディア掲載情報</span>
                                                    <h4 class="abbr-s-ttl"><?php the_title(); ?></h4>
                                                </div>
                                            </a>
                                            </div><!-- End item-->
                                                <?php endwhile;
                                            endif; ?>
                                        <?php wp_reset_query(); ?>

                                        </div><!-- End item-wrap-->
                                    </div><!-- End media-->

                                </div><!-- End tabwrap-->
                                    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn c-btn_yellow">お知らせ一覧を見る</a>
                                </div><!-- End news-wrap-->
                            </div><!-- End news-->

                            <div class="p-top_column c-mt80">
                                <h2 class="c-h2">遺品整理のお役立ちコラム</h2>

                                <div class="p-top_column-wrap">
                                    <div class="p-top_column-item-wrap">
                                        <?php
                                        $paged = get_query_var('paged') ?: 1;
                                        $args = array(
                                        'post_type' => 'column',
                                        'posts_per_page' => 4,
                                        'paged' => $paged,
                                        );
                                        $column_all_query = new WP_Query($args);
                                        if ($column_all_query->have_posts() ) :
                                            while ( $column_all_query->have_posts() ) : $column_all_query->the_post();
                                                ?>
                                        <div class="p-top_column-item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="c-flex">
                                                    <p><?php the_time('Y/m/j'); ?></p>
                                                    <span class="c-cat c-cat_02">
                                                <?php
                                                $term      = wp_get_object_terms($post->ID, 'column_category'); //指定されたタクソノミーのタームを取得
                                                $term_name = $term[0]->name; //ターム名
                                                ?>
                                                <?php echo $term_name; ?>
                                                    </span>
                                                </div>
                                                <h4><?php the_title(); ?></h4>
                                                <div class="p-top_column-item-flex">
                                                    <div class="p-top_column-itemImg">
                                                        <img src="<?php the_field('mv'); ?>" alt="お役立ちコラム">
                                                    </div>
                                                    <p class="abbr-s"><?php the_field('main-text'); ?></p>
                                                </div>
                                                <span class="p-top_column-more">もっとみる</span>
                                            </a>
                                        </div>
                                            <?php endwhile;
                                        endif;
                                        wp_reset_query();
                                        ?>
                                    </div>
                                    <a href="<?php echo esc_url(home_url('/column/')); ?>" class="c-btn c-btn_yellow c-mt40">コラム一覧を見る
																		</a>
                                </div><!-- End item-wrap-->
                            </div>
                        </div><!-- End top-contents-->
                        <?php get_sidebar(); ?>
                    </div><!-- End top-wrap-->


            </main>
            <?php get_footer(); ?>
