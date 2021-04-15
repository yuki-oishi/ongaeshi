<?php
/*
Template Name: 初めての方へ
*/
?>
<?php get_header(); ?>
    <main class="l-main sp-menu-show">
        <div class="c-lower-mv p-area-detail__header">
            <div class="c-breadcrumbs l-row02">
                <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                <span>初めての方へ</span>
            </div>
            <h2 class="p-area__detail-ttl l-row02">初めての方へ</h2>
        </div>

            <div class="l-row02 c-contens-flex">
                <div class="l-contents p-first">
                    <!-- ここに「p-*」でscssを書いていく。固有はc -->
                    <section class="p-seizen seizen-sec01">
                        <h2 class="c-h2">初めての遺品整理・生前整理・<br class="__sp">ゴミ屋敷の片付け</h2>
                        <div class="p-first__txtwrap">
                            <p><span class="red">「初めての遺品整理…どの業者に頼めばいい？」「悪徳業者に引っ掛からないか心配」</span>など、業者選びには悩みがつきもの。しかし<span class="bold-under-line">良い業者を見分けるテクニックが、実はあるんです！今回は「遺品整理や生前整理、ゴミ屋敷清掃の違い」といった基本的なことから、「業者の選び方」</span>まで、<span class="red">遺品整理をスムーズに行うためのコツ</span>をご紹介します。</p>
                        </div>
                    </section>
                    <section class="s-about">
                       <div class="tabs c-mt40">
                            <input id="tab1" type="radio" name="tab_item1" checked>
                            <label class="tab_item" for="tab1"><span>遺品整理とは?</span></label>
                            <input id="tab2" type="radio" name="tab_item1">
                            <label class="tab_item" for="tab2"><span>生前整理とは?</span></label>
                            <input id="tab3" type="radio" name="tab_item1">
                            <label class="tab_item" for="tab3"><span>ゴミ屋敷の<br class="__sp">片付けとは?<span></label>
                            <div class="tab_content" id="tab1_content">
                            <div class="tab_content_description">
                                <div class="c-txtsp">
                                    <h3>遺品整理とは？</h3>
                                    <div>
                                        <img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/organize-relics.png" alt="遺品整理とは">
                                        <p>遺品整理とは、<span class="bold-under-line">亡くなられた方（故人様）の遺品を整理し、部屋を綺麗に片付けること</span>をいいます。しかしただ単に、<span class="red">いらないものを処分するだけでは遺品整理として不十分</span>です。</p>
                                        <p>故人様の大切にしていたお品物は、<span class="red">供養</span>したり、<span class="red">形見分け</span>を行うのも、遺品整理の重要な作業です。遺品を粗末に扱うことなく、故人様のことを想いながら丁寧に扱う…それにより、<span class="bold-under-line">ご家族が故人様と改めて向き合い、気持ちの整理をつけていく</span>のです。</p>
                                        <p>遺品整理を始める時期やタイミングに明確な決まりはありません、しかし<span class="bold-under-line">故人様の自宅が賃貸である場合は、退去日が決まっていることもあるため、なるべく早めに済ませるのがおすすめ</span>です。すぐに住居を片付ける必要がない場合は、家族が落ち着いてからでよく、<span class="red">特に期限はありません。</span></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab_content" id="tab2_content">
                            <div class="tab_content_description">
                                <div class="c-txtsp">
                                    <h3>生前整理とは？</h3>
                                    <img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/organize-before-life.png" alt="生前整理とは">
                                    <p>生前整理とは、<span class="bold-under-line">生きているうちに死後のことを考え、自分の持ち物を整理すること</span>です。<span class="red">生きているうちに自分で整理整頓を行うため</span>、自身が亡くなってから家族（遺族）の方に行っていただく遺品整理とは大きく異なります。</p>
                                    <p>エンディングノートや遺言状と同じく、<span class="red">「終活」</span>や<span class="red">「断捨離」</span>の一環として元気なうちに始める方もたくさんいます。</p>
                                    <p>生前整理の大きなメリットは、<span class="bold-under-line">「自分の死後に家族に迷惑をかけない」こと</span>です。突然なんの準備もなく亡くなってしまった人の荷物を片付けるのは、家族にとっても大きな負担となります。遺された家族に負担をかけないためにも、<span class="bold-under-line">生きているうちに自分の荷物や貴重品の行く先を考えることは、大切なことです。</span></p>
                                </div>
                            </div>
                            </div>
                            <div class="tab_content" id="tab3_content">
                            <div class="tab_content_description">
                                <div class="c-txtsp clearfix">
                                    <h3>ゴミ屋敷の片付けとは?</h3>
                                    <img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/cleaning-up-the-garbage-house.png" alt="ゴミ屋敷の片付けとは？">
                                    <p>ゴミ屋敷や汚部屋はニュースや雑誌で取り上げられることも多く、<span class="red">社会問題</span>となっています。ゴミ屋敷に明確な定義はありません。一般的には、<span class="bold-under-line">家中にゴミやいらないものが溢れており、日常生活に支障をきたすレベル</span>をいいます。</p>
                                    <p>ゴミ屋敷になってしまう理由は様々ですが、<span class="bold-under-line">住人本人もどうしようもない状態だと諦めているケース</span>も少なくありません。</p>
                                    <p>ゴミ屋敷の状態では、ネズミなどの害獣、ゴキブリなどの害虫、悪臭・火災の原因となることも多く、<span class="bold-under-line">見かねた実家を子供が片付けたりすることもあるようです。</span>ただ、粗大ゴミなどの大きい荷物は、自治体のルールのもと、捨てなければいけないため、手間や時間もかかり、処分に困ることが多いので、<span class="red">専門業者に依頼することがほとんど</span>です。</p>
                                    <p>1LDK以上のお部屋の作業は一日がかりになることもあり、多くの場合<span class="red">貴重品を残し、ゴミを一斉に撤去する方法</span>が取られます。</p>
                                    <p>しかし一時的に片付けただけでは、すぐに元通りになってしまうことも少なくありません。<span class="bold-under-line">繰り返さないためには、家族の協力が必要なこともあるほど、ゴミ屋敷は根深い問題です。</span></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                    <section class="s-nayami">
                        <div class="nayami_wrap">
                            <h2 class="top_ttl tac">
                                <span class="txt10"><span>&nbsp;＼</span><span>遺品整理・お片付け業者の選び方でお困りの方へ</span><span>／&nbsp;</span></span>
                                    <br>
                                <span class="txt09">こんな
                                    <span class="red">お悩み</span>
                                    ありませんか？
                                </span>
                            </h2>
                            <div class="nayami_box pt-1">
                                <ul>    
                                    <li class="pt-3">
                                        <img class="img" alt="" src="https://kaitori-sanpomichi.com/wp-content/themes/curios/assets/img/page-2/banar-check.png">
                                        <span class="bold-under-line">遺品整理や生前整理の方法</span>がわからない
                                    </li>
                                    <li>
                                        <img class="img" alt="" src="https://kaitori-sanpomichi.com/wp-content/themes/curios/assets/img/page-2/banar-check.png">
                                        <span class="bold-under-line">他の業者との違い</span>がわからない
                                    </li>
                                    <li>
                                        <img class="img" alt="" src="https://kaitori-sanpomichi.com/wp-content/themes/curios/assets/img/page-2/banar-check.png">
                                        自分たちだけでゴミ屋敷は<span class="bold-under-line">手に負えない</span>
                                    </li>
                                    <li>
                                        <img class="img" alt="" src="https://kaitori-sanpomichi.com/wp-content/themes/curios/assets/img/page-2/banar-check.png">
                                        とにかく<span class="bold-under-line">リーズナブルに済ませたい</span>
                                    </li>
                                    <li>
                                        <img class="img" alt="" src="https://kaitori-sanpomichi.com/wp-content/themes/curios/assets/img/page-2/banar-check.png">
                                        急いでいるんだけど､<span class="bold-under-line">すぐ対応してほしい</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cp_arrows">
                                <div class="cp_arrow"></div>
                                <div class="cp_arrow"></div>
                                <div class="cp_arrow"></div>
                            </div>
                            <p class="guide">ここを見れば納得！<br class="__sp">遺品整理・お片付け業者の選び方を<br class="__sp">完全ガイド</p>
                            <div class="p-first__txtwrap">
                                <p>遺品整理や生前整理、ゴミ屋敷の片付けなどをする際、<span class="red">「どんな業者に依頼すれば失敗しないの？」</span>と悩みますよね。遺品整理や生前整理は一生に何度もするものではないからこそ、しっかりとした業者選びは必須です。ここでは<span class="bold-under-line">優良な遺品整理業者の選び方のポイント・注意点</span>について解説します。</p>
                            </div>
                    </section>
                    <section class="s-guide">
                        <h3 class="s-guide__title">
                            <span class="s-guide__txt01">1</span>
                            <span class="s-guide__txt02">しっかりとした見積もりを出してくれるか</span>
                        </h3>
                        <div class="s-guide__wrap p-first__txtwrap">
                            <img class="s-guide__img alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/estimates.png" alt="しっかりとした見積もりを出してくれるか">
                            <p>遺品整理や生前整理・ゴミ屋敷の片付けを依頼する前に、<span class="red">しっかりとした見積もりを出してくれる業者</span>を選びましょう。また<span class="bold-under-line">見積もり以外に費用がかかる可能性があるかも併せてチェックしておくとよい</span>です。</p>
                            <p>業者との間で<span class="red">「見積もりになかったオプション料金を請求された」</span>というトラブルは結構あります。見積もりにはしっかりと目を通し、<span class="bold-under-line">不明瞭な請求金額や疑問点があれば、契約前に全てクリアにしておくと安心</span>です。</p>
                            <p>特に<span class="bold-under-line">説明不足な点が多い場合や、説明を拒む業者・専門用語ばかりで内容がわからない業者はおすすめできません。</span>また現地調査をせずに見積もりをしてもらうと後々トラブルになる可能性があるため注意しましょう。</p>
                        </div>
                        <h3 class="s-guide__title">
                            <span class="s-guide__txt01">2</span>
                            <span class="s-guide__txt02">料金が明確であること</span>
                        </h3>
                        <div class="s-guide__wrap p-first__txtwrap">
                            <img class="s-guide__img alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/money-clear.png" alt="料金が明確であること">
                            <p>後で高額な請求をされて驚かないためにも、<span class="red">料金を明確に提示してくれる業者</span>を選びましょう。
                            <p>基本料金が安いと思って飛びついたら、<span class="bold-under-line">あれよあれよという間にオプションを追加され、気付いたら高額なっていた</span>…といったケースも珍しくありません。</p>
                            <p>中にはお客様の無知に付け込んで作業終了後に高額な請求をする業者もいるので、見積りと併せてしっかりと確認しましょう。作業費だけでなく、<span class="bold-under-line">出張費用や交通費などの名目で費用が上乗せされていないかにも注目してください</span>ね。</p>
                            <p><span class="red">「もしかして相場より高いかも？」</span>と思ったら、複数の業者に問い合わせ、<span class="bold-under-line">相見積もりを取ってみるのもおすすめ</span>です。業者を選ぶ際には、金額や内訳をわかりやすく説明してくれる、信頼できる会社を選びましょう。</p>
                        </div>
                        <h3 class="s-guide__title">
                            <span class="s-guide__txt01">3</span>
                            <span class="s-guide__txt02">スタッフの対応</span>
                        </h3>
                        <div class="s-guide__wrap p-first__txtwrap">
                            <img class="s-guide__img alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/staff-correspondence.png" alt="スタッフの対応">
                            <p>遺品整理は貴重品や、家族にとって大切なものを扱う作業です。そのため<span class="red">スタッフの対応にも注目</span>してみましょう。<span class="bold-under-line">まずは最初の問い合わせの時や見積もり時に感じたスタッフの印象はどうでしたか？</span></p>
                            <p>明るくハキハキと気持ちの良い対応だったでしょうか。もし<span class="red">「感じが悪くてイヤな印象だった…」</span>と少しでも不安を感じたら、その直感を信じ、他の業者への問い合わせを検討するのもおすすめです。</p>
                            <p><span class="bold-under-line">遺品整理や生前整理は本人や家族にとって、「ひとつの人生の区切り」を付けるためにも、大切な作業</span>です。適当にされてしまっては、ガッカリしてしまいますよね。きちんと気持ちに寄り添ってくれる、<span class="red">信頼できる業者選びが大切</span>です。</p>
                        </div>
                        <h3 class="s-guide__title">
                            <span class="s-guide__txt01">4</span>
                            <span class="s-guide__txt02">ゴミの処分以外のサービスにも注目してみる</span>
                        </h3>
                        <div class="s-guide__wrap p-first__txtwrap">
                            <img class="s-guide__img alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/garbage-processing.png" alt="ゴミの処分以外のサービスにも注目してみる">
                            <p>遺品整理の目的は<span class="red">「必要な物を残し、いらないものを処分すること」</span>です。しかし処分業者の中には、<span class="bold-under-line">「ゴミを処分して終わり」という業者も少なくありません。</span>中には遺品を次々と捨ててしまう業者もいるようです。</p>
                            <p>遺品は故人様の生きた証です。ゴミ扱いされ、処分するだけでは味気ないと感じるかもしれません。</p>
                            <p>そんな時は<span class="red">遺品整理の専門業者を選ぶのが正解</span>です。遺品整理の専門業者であれば、遺品をただの「いらないもの」として扱うことはありません。<span class="bold-under-line">一点一点丁寧に扱い、故人様や家族の思いを汲み取りながら、「どう扱うのが一番ベストか」を一緒に考えます。</span></p>
                            <p>また遺品を買い取り、料金の一部に充てることもでき、コストを抑えて頂くことも可能。最後には<span class="red">部屋の清掃</span>まで行います。<span class="bold-under-line">処分から買取り、清掃までしているのは遺品整理の専門業者だからこそ。</span>是非サービス面でもご比較ください。</p>

                        </div>
                        <h3 class="s-guide__title">
                            <span class="s-guide__txt01">5</span>
                            <span class="s-guide__txt02">遺品の仕分け作業が適切にできるか</span>
                        </h3>
                        <div class="s-guide__wrap p-first__txtwrap noborder">
                            <img class="s-guide__img alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/relics-sorting.png" alt="遺品の仕分け作業が適切にできるか">
                            <p>遺品整理や生前整理では、<span class="red">いらないものと貴重品をしっかりと見分けるスキル</span>が必要です。<span class="bold-under-line">必要に応じて、遺品の処分方法を家族に確認したり、適切な処分方法の提案をしなければなりません。</span></p>
                            <p>しかし業者によっては、大切な遺品をどんどん処分してしまう場合があります。遺品整理といっても、家族がよくわかっていないことも珍しくありません。だからこそ、<span class="bold-under-line">プロである遺品整理業者の適切なサポートが必須となります。</span></p>
                            <p>大切な遺品を間違って捨ててしまわないためにも、<span class="red">分別作業をしっかりと行ってくれる業者</span>を選ぶことが大切です。依頼の前には、<span class="bold-under-line">口コミサイトなどを参考にし、評判をチェックするのもよいでしょう。</span></p>
                        </div>
                        <div class="cp_arrows">
                            <div class="cp_arrow"></div>
                            <div class="cp_arrow"></div>
                            <div class="cp_arrow"></div>
                        </div>
                        <div class="s-guide__omakase">
                            <p class="guide2"><span class="bold-under-line">遺品整理・片付けのプロ<br class="__sp">【鶴の恩返し】に<br>全てお任せください！</span></p>
                            <img class="s-guide__img2" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/illust.png" alt="私たちが解決致します!">
                        </div>
                    </section>
                    <?php get_template_part('template-parts/saiyasu'); ?>

                    <section class="s-voice">
                      <a href="<?php echo esc_url(home_url('/voice/')); ?>"><img class="s-guide__img3" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/customer-voice-pc.jpg" alt="お客様の声"></a>
                    </section>
                    <section class="s-reason">
                        <h2 class="c-h2 c-mt40">鶴の恩返しが<br class="__sp">【お客様満足度97%超】の理由</h2>
                        <div class="p-first__txtwrap">
                            <p>鶴の恩返しは創業以来、<span class="bold-under-line">お客様に「依頼してよかった」と思われるようなサービスを追求し続けてきました。</span></p>
                            <p>お客様のご意見や要望を積極的に取り入れ、<span class="red">お客様満足度は脅威の97％越え。</span>なぜ当社がここまで支持されるのでしょうか。それには<span class="red">7つ理由</span>があるためです。<span class="bold-under-line">ここでは鶴の恩返しが選ばれる理由をご紹介します。</span></p>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no1">他社にはない</span>リーズナブルな料金設定</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/reasonable-pricing.png" alt="他社にはないリーズナブルな料金設定"></div>
                                    <p>遺品整理をするにあたり、<span class="red">「専門業者って高いのでは？」</span>といったイメージを持つ人も多いかもしれません。また逆に安すぎても、<span class="red">「大丈夫？」</span>と不安になりますよね。鶴の恩返しは業界最安値を実現しておりますが、<span class="bold-under-line">決して「安かろう悪かろう」ではありません。</span>安さには、きちんとした理由があるのです。</p>
                                    <p>鶴の恩返しでは、<span class="bold-under-line">過剰な広告費をかけず、無駄なコストは徹底的にカット！</span>またスタッフやトラックが効率的に動けるよう管理をしています。そのため<span class="bold-under-line">お客様にリーズナブルな価格で、サービスを提供することに成功いたしました。</span>また遺品買取も同時に行っており、買取金額を料金に充てて頂くことで、さらにお得にご利用いただけます。</p>
                                </div>
                                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="c-btn_yellow p-top_price-btn">料金プラン一覧を見る</a>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no2">わかりやすい明朗会計！</span>追加料金はいただきません</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/happy-accounting.png" alt="わかりやすい明朗会計！追加料金はいただきません"></div>
                                    <p>遺品整理や生前整理・ゴミ屋敷の清掃には様々な作業が必要です。いらないものの片付けだけでなく、<span class="red">遺品の仕分け・ゴミの処分…仕上げに掃除</span>もしなければなりません。<span class="bold-under-line">鶴の恩返しなら、最低限必要な作業は全て基本料金に含まれております。</span></p>
                                    <p>オプションサービスはエアコンの取り外し、ハウスクリーニング、リフォームなど、特別な技術が必要なもののみ！もちろん<span class="bold-under-line">オプションサービスが必要と判断した場合は、あらかじめご相談しますので、作業終了後に高額な請求が突然発生することはありません。</span></p>
                                    <p>当社はわかりやすい<span class="red">「明朗会計」</span>をモットーとしているため、プランはパック制です。そのため金額がお見積り時を変わることはありません。<span class="bold-under-line">前もって金額がわかるため、安心してご依頼いただけます。</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no3">急ぎの依頼もOK！</span>業界随一の対応スピードを実現</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/speed-correspondence.png" alt="急ぎの依頼もOK！業界随一の対応スピードを実現"></div>
                                    <p>鶴の恩返しの強みは、<span class="red">業界随一の対応の早さ</span>にあります。故人様が住んでいる家が賃貸物件であった場合などに、遺品整理をすぐにしなければならない場合があります。</p>
                                    <p>鶴の恩返しなら、<span class="bold-under-line">ご相談当日のお見積りや、最短日での作業も柔軟に対応します。</span>当社はこれまで<span class="red">「自分ではどうしようもない」「とにかく早く作業してほしい」</span>といった多くのお客様の悩みを解決してきました。</p>
                                    <p>お客様の不安を少しでも和らげたい…そんな思いから<span class="red">最短1日という他社にはない対応スピードを実現</span>しています。もちろん遺品整理だけでなく、「生前整理をすぐにやりたい」「ゴミ屋敷になってしまって近所からクレームが来た！」といった急を要するご相談もお気軽にご連絡ください。</p>
                                </div>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no4">豊富なサービス内容から</span>必要なものを選べる</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/service-choose.png" alt="豊富なサービス内容から必要なものを選べる"></div>
                                    <p>鶴の恩返しでは、遺品整理はもちろんのこと、<span class="bold-under-line">生前整理やゴミ屋敷の片付け（清掃）・遺品買取まで幅広くサービスを展開しています。</span>単独でのご依頼も可能ですが、おすすめは<span class="red">2つ以上のサービスを併せてご利用いただく方法</span>です。</p>
                                    <p>例えば遺品買取と遺品整理と同時にご依頼頂く方法。<span class="bold-under-line">遺品買取でお売りいただいたお品物の代金を、遺品整理の料金に充てていただくことも可能</span>です。</p>
                                    <p>それにより、遺品整理の料金を大幅に抑え、お得にご利用いただけます。同じようなイメージで、<span class="red">生前整理×買取・ゴミ屋敷の片付け（清掃）×買取</span>もご利用可能。</p>
                                    <p>当社では<span class="bold-under-line">経験豊富な鑑定士が在籍しており、お客様の大切な遺品の価値を見極めます。</span>どのよりも高く買取る自信がありますので、是非合わせ技をご検討ください。</p>
                                </div>
                                <div class="s-reason__servicewrap">
                                    <div class="s-reason__serviceleft">
                                        <h3 class="title-border">鶴の恩返しのサービス一覧</h3>
                                        <ul class="s-reason__servicelist">
                                            <li class="s-reason__servicelistitem">
                                                <a href="<?php echo esc_url(home_url('/service/ihin-seiri/')); ?>">遺品整理</a></li>
                                            <li class="s-reason__servicelistitem">
                                                <a href="<?php echo esc_url(home_url('/service/seizen-seiri/')); ?>">生前整理</a></li>
                                            <li class="s-reason__servicelistitem">
                                                <a href="<?php echo esc_url(home_url('/service/gomiyashiki/')); ?>">ゴミ屋敷の片付け</a></li>
                                            <li class="s-reason__servicelistitem">
                                                <a href="<?php echo esc_url(home_url('/service/kaitori/')); ?>">遺品買取</a></li>
                                        </ul>
                                    </div>
                                    <img class="s-reason__serviceright" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/correspondence-area.png" alt="鶴の恩返しの対応エリア">
                                </div>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no5">お客様の要望に</span>しっかりとお応えします</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/meet-your-request.png" alt="お客様の要望にしっかりとお応えします"></div>
                                    <p>鶴の恩返しでは遺品の仕分けや回収以外にも、専任スタッフがアドバイザーとして<span class="red">お客様のご要望</span>にきめ細かくお応えします。<span class="bold-under-line">「貴重品を探して欲しい」「大切な書類を見つけて欲しい」</span>など、気になることがあれば、なんなりとお申し付けください。</p>
                                    <p>当社は創業20年。お客様から頂いた多くの要望をもとに、改善に改善を繰り返してきました。頂いたご意見を参考にしながら、<span class="bold-under-line">「もっとお客様に喜んでいただくにはどうすればいいか？」を考え、真摯に向き合っております。</span></p>
                                    <p>鶴の恩返しのサービスは、<span class="red">当社スタッフはもちろんのこと、お客様の力をお借りして作り上げてきたもの</span>です。作業はお客様の許可を頂いた上で行いますので、分からないことがあれば、お気軽にお聞きください。</p>
                                </div>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no6">作業は全て担当スタッフにお任せを!</span>お客様のお手伝いは不要です。</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/staff-please-leave-it-to-me.png" alt="作業は全て担当スタッフにお任せ下さい!お客様のお手伝いは不要です。"></div>
                                    <p>遺品整理を行うにあたり、<span class="bold-under-line">お客様がお手伝いいただく必要はありません。</span>必要な作業は全てスタッフが行いますのでご安心ください。</p>
                                    <p>家をまるごとお掃除される場合、重たい家具や家電を動かす必要が出てきます。それらは全てスタッフが搬出から引き揚げまで行います。</p>
                                    <p>また<span class="red">「遠くに住んでいるから作業に立ちえない」「忙しいから全部やって欲しい」</span>といった場合もおかませください。<span class="bold-under-line">当社スタッフが責任をもって丁寧に作業いたします。</span>作業内容については<span class="red">ご依頼時に双方同意のもと行う</span>ので安心です。</p>
                                    <p>最近では<span class="bold-under-line">お体が不自由な方や、ご高齢で力作業が難しい方からのご依頼も増えています。</span>お客様の都合に合わせたプランをご提案いたしますので、些細なことでもご相談ください。</p>
                                </div>
                            </div>
                        </div>
                        <div class="s-reason__box">
                            <div class="s-reason__txtwrap">
                                <h4><mark><span class="no7">遺品や不用品を買取で</span>現金化していただけます</mark></h4>
                                <div class="p-first__txtwrap">
                                    <div class="s-reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/unused-items-cashing.png" alt="不用品を売って現金化していただけます"></div>
                                    <p>遺品整理やゴミ屋敷清掃などでは、たくさんのいらないものが発見されます。鶴の恩返しなら、<span class="bold-under-line">骨董品や美術品をはじめ、ブランド食器や家具・家電・人形・おもちゃに至るまで幅広いジャンルで買取り可能</span>です。</p>
                                    <p>お客様が捨てようと思っていたモノに、思わぬ価値がつくことも珍しくありません。当社には創業以来、<span class="red">150,000件以上の買取り実績</span>がございます。</p>
                                    <p>プロの鑑定士が丁寧に査定しますので、気になるものがあればお気軽にお尋ねください。<span class="bold-under-line">買取り代金は遺品整理の料金に充てていただくことも可能</span>です。過去には作業料金を上回る高額買取をさせていただき、<span class="red">費用が実質0円になった例</span>もございます。</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php get_template_part('template-parts/saiyasu'); ?>
                    <section class="s-omakase c-mt80">
                      <h2 class="c-h2">遺品整理・お片付けの<br class="__sp">各エキスパートが対応</h2>
                        <div class="team">
                            <div class="inner">
                                <h3>鶴の恩返しは専任スタッフ制なので安心してお任せを</h3>
                                <div class="p-first__txtwrap">
                                    <div class="s-omakase__photo"><img class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/full-time-staff-system-pc.jpg" alt="他社にはないリーズナブルな料金設定"></div>
                                    <p>鶴の恩返しには、<span class="red">当社研修をクリアした優秀なスタッフ</span>が多数在籍。遺品整理や生前整理・ゴミ屋敷の清掃の技術はもちろん、<span class="bold-under-line">挨拶や礼儀などコミュニケーション能力についても一定の基準をパスした者のみ、</span>現場へ送り出しております。</p>
                                    <p>遺品整理はただいらないものを整理・処分して終わりではありません。お客様ひとりひとりに事情があり、全てのお品物に故人様の思いが詰まっています。鶴の恩返しは、<span class="bold-under-line">ただ荷物を片付け・処分して終わりという単純な作業は行っていません。</span></p>
                                    <p>お客様の事情を丁寧に汲み取り、<span class="red">一件一件、丁寧な作業</span>を心がけています。作業だけでなく、<span class="bold-under-line">お客様とのコミュニケーションなど、見えない部分にも気を配っております</span>ので、何なりとお申し付けください。</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="s-promise">
                        <h2 class="c-h2">鶴の恩返しから【3つのお約束】</h2>
                        <div class="p-first__txtwrap">
                            <p>現在の日本では、高齢化社会を迎えつつあり、遺品整理や生前整理の需要が高まっています。しかし遺品整理を依頼しようにも、<span class="bold-under-line">「会社がたくさんあってどれを選べばいいの？」と悩みますよね。</span>実際悪徳な業者もないわけではなく、見分けが難しくなっています。<br>鶴の恩返しでは、みなさまに安心してご依頼いただけるよう<span class="red"> “3つのお約束” </span>を掲げております。</p>
                        </div>
                        <div class="sec02__col-wrap">
                            <div class="sec02__col-left">
                                <div class="sec02__rs-pic left">
                                    <picture class="picture">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/no-additional-charge.png" alt="追加費用一切なし">
                                    </picture>
                                </div>
                            </div>
                            <div class="sec02__col-right">
                                <div class="sec02__rs-wrap right">
                                    <h3 class="sec02__rs-tit">
                                        <span class="sec02__rs-num">01</span>
                                        <span class="sec02__rs-line"><br class="__sp">
                                            <span class="sec02__rs-tit--b">追加費用</span>一切なし
                                        </span>
                                    </h3>
                                    <p class="sec02__rs-txt">鶴の恩返しでは、<span class="bold-under-line">見積後に追加料金はいただいておりません。</span>また作業終了後に高額なオプションを上乗せして請求することもございません。</p>
                                    <p class="sec02__rs-txt">やむを得ず追加料金が発生する場合は、<span class="red">内訳や理由をご納得いただけるまで説明した上</span>で、お見積りに記載いたします。遺品整理は人生で何度も行うものではありません。そのため、<span class="bold-under-line">料金について不安になるのは当然</span>です。わからないことがあれば、些細なことでもお尋ねください。</p>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="sec02__col-wrap">
                            <div class="sec02__col-left order2">
                                <div class="sec02__rs-wrap left">
                                    <h3 class="sec02__rs-tit">
                                        <span class="sec02__rs-num">02</span>
                                        <span class="sec02__rs-line">他社より1円でも高い場合､<br>
                                            <span class="sec02__rs-tit--b">更にお値引き可</span>
                                        </span>
                                    </h3>
                                    <p class="sec02__rs-txt">当社は業界最安値を実現しておりますが、<span class="bold-under-line">万が一見積りが他社より1円でも高ければ遠慮なくお申し付けください。</span></p>
                                    <p class="sec02__rs-txt">さらにお値引きをさせていただきます。その際には、相見積もりを取られた他社様の見積書を是非ご提示ください。鶴の恩返しでは、<span class="red">初回限定割引（1,000円引き）</span>や<span class="red">アンケート割（2,000円引き）</span>などの割引サービスを行っており、<span class="bold-under-line">価格には自信がございます。</span>どうぞご納得いただけるまで、相場とご比較ください</p>
                                </div>
                            </div>
                            <div class="sec02__col-right order1">
                                <div class="sec02__rs-pic right">
                                    <picture class="picture">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/discount.png" alt="他社より1円でも高い場合、更にお値引き可">
                                        
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="sec02__col-wrap">
                            <div class="sec02__col-left">
                                <div class="sec02__rs-pic left">
                                    <picture class="picture">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/low-cost-polite.png" alt="低コスト×丁寧×最短即日対応">
                                    </picture>
                                </div>
                            </div>
                            <div class="sec02__col-right">
                                <div class="sec02__rs-wrap right">
                                    <h3 class="sec02__rs-tit">
                                        <span class="sec02__rs-num">03</span>
                                        <span class="sec02__rs-line">低コスト×丁寧×<br class="__sp">
                                            <span class="sec02__rs-tit--b">最短即日対応</span>
                                        </span>
                                    </h3>
                                    <p class="sec02__rs-txt">鶴の恩返しは<span class="red">1Kのお部屋で遺品整理が22,000円～</span>と業界最安値を実現しています。しかし「ただ安ければいい」とは考えておりません。故人様が亡くなった後、家族には様々な手続きが降りかかります。</p>
                                    <p class="sec02__rs-txt">葬式費用や相続手続き…出費が重なり、さらに遺品整理の費用までとなると骨が折れてしまいますよね。当社は<span class="bold-under-line">お客様から頂いたご意見を参考に当社独自の料金システムを採用。</span>低コストでありながら<span class="bold-under-line">優しさや真心、即日対応などのサービスを詰め込んだ良心的な価格設定</span>をしております。</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php get_template_part('template-parts/saiyasu'); ?>
                    <section class="s-reuse c-mt80">
                        <h2 class="c-h2">大切な遺品を真心込めて<br class="__sp">リサイクル・リユース</h2>
                        <div class="p-first__txtwrap">
                            <p>鶴の恩返しでは、<span class="bold-under-line">お客様からお売りいただいた大切な遺品や不用品を役に立てたいという思いがあります。</span></p>
                            <p>そのためリサイクル・リユースを行い、政府が掲げる<span class="red">SDGs（エスディージーズ）</span>を実現しています。セカンドホストの元へ行くもの、資源として生まれ変わるものなど様々ですが、<span class="bold-under-line">遺品や不用品にとってベストな活用方法を考えておりますのでご安心ください。</span></p>
                        </div>
                        <div class="s-reuse__box">
                            <div class="s-reuse__txtwrap">
                                <h3><span>ゴミにしない・させない</span></h3>
                                <p>鶴の恩返しでは、<span class="bold-under-line">リサイクル・リユースを行い、環境への負荷や処理費用の削減を目指します。</span>当社は、国内外に<span class="red">独自の販売ルート</span>をたくさんもっているのが強みです。引き取ったものは1つも無駄にすることなく、幅広くリサイクル・リユースを行い、徹底的な再利用を行っております。</p>
                                <p>そのため<span class="red">「遺品を売ったけれど、どんな扱いをされるのか不安…」</span>といった心配はご無用です。お売りいただいた商品を必要をされている方はきっといます。<span class="bold-under-line">大切なお品物を引き取り、セカンドホストに受け継ぐことも、私たちの使命</span>と考え、責任を持って丁寧に取り扱うのでご安心ください。お客様に安心を、環境には優しさを、それが鶴の恩返しの目指す<span class="red">遺品整理の姿</span>です。</p>
                            </div>
                            <div class="s-reuse__photo"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/dont-trash.png" alt="ゴミにしない・させない"></div>
                        </div>
                        <div class="s-reuse__box">
                            <div class="s-reuse__txtwrap">
                                <h3><span>環境に優しい遺品整理・お片付け</span></h3>
                                <p>「遺品整理・生前整理やお片付けをしていたらいらないものがたくさん出てきた」と遺品や不用品の処分に困るケースは少なくありません。しかし<span class="bold-under-line">故人様やお客様の荷物をそのまま“ゴミ”として捨ててしまうのは気が引けますよね。</span></p>
                                <p>鶴の恩返しではいらないものを買い取りし、必要な方へと繋ぐお手伝いをいたします。<span class="red">「いらないけど捨てにくい」「思い出の品だけど手元に置くには大きすぎる」</span>、そんな思い出の品もリユースによって、心と一緒に受け継ぐことが可能です。</p>
                                <p>大切な遺品や不用品は、<span class="bold-under-line">当社鑑定士が丁寧に査定し、高価買取いたします。</span>ゴミを減らし、新しい価値を生み出す「遺品整理」・「生前整理」・「お片付け」が私たちの願いです。遺品や不用品を手放すことは、<span class="red">心の整理</span>にも役立ちます。悩んだらお気軽にご相談ください。</p>
                            </div>
                            <div class="s-reuse__photo"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/environment-wallet.png" alt="環境と財布に優しい遺品整理"></div>
                        </div>
                        <div class="s-reuse__box">
                            <div class="s-reuse__txtwrap">
                                <h3><span>｢つくる責任 つかう責任｣を<br class="__sp">考えた遺品整理</span></h3>
                                <p>政府が掲げる<span class="red">SDGs（エスディージーズ）</span>の<span class="red">目標12「つくる責任　つかう責任」</span>は持続可能な生産消費形態の確保を目的としています。これは<span class="bold-under-line">「少ない資源でありながら、より良質なものを求める」ことを指します。</span></p><p>目標を達成するためには、余分な生産をしないことや消費者のリサイクル・リユースの心がけが必須です。<span class="bold-under-line">当社ではいらないものを買取り、国内をはじめ海外のルートで販売しています。</span></p><p>販売先を国内に限らず、<span class="bold-under-line">海外に広げることでより多くのお品物をリサイクル・リユースすることに成功</span>いたしました。そのまま捨てればゴミとなるものも、誰かの手に渡れば<span class="red">「資源」</span>に変わります。当社はモノだけでなく、<span class="bold-under-line">心を繋ぐお手伝いもしているのです。</span></p>
                            </div>
                            <div class="s-reuse__photo"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/first/responsibility-to-make.png" alt="「つくる責任　つかう責任」を考えた遺品整理"></div>
                        </div>
                    </section>
                    <?php get_template_part('template-parts/saiyasu'); ?>
                    <?php get_template_part('template-parts/reasonable-first'); ?>
                    <?php get_template_part('template-parts/gomimeyasu'); ?>
                    <?php get_template_part('template-parts/saiyasu'); ?>
                    <?php get_template_part('template-parts/flow'); ?>
                    <?php get_template_part('template-parts/payment'); ?>
                    <?php get_template_part('template-parts/faq'); ?>
                    <?php get_template_part('template-parts/saiyasu'); ?>
                    <?php get_template_part('template-parts/voice'); ?>
                    <?php get_template_part('template-parts/taioharea'); ?>
                    <?php get_template_part('template-parts/list-service'); ?>


                </div>
                <?php get_sidebar(); ?>

            </div>
        </main>
       
        <?php get_footer(); ?>