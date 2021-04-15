<div class="p-sidebar">
    <?php if (is_post_type_archive('voice') || (is_singular('voice') || is_tax('voice_category'))) {
    ?>
        <div class="catVoice p-sidebar-voicecategory mb50">
            <h3>カテゴリー一覧</h3>
            <ul>
                <?php 
                    $terms = get_terms('voice_category');
                    foreach ( $terms as $term ){
                        echo '<li class="'.$term->slug.'"><a href="'.get_term_link($term->slug, 'voice_category').'">'.$term->name.'</a></li>';
                    }
                ?>
                </li>
            </ul>
        </div>
    <?php 
    } ?>
    <div class="p-sidebar-banner_wrap">
        <a href="/contact/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/contact@2x_pc.png" alt="まずはご相談ください" />
        </a>
    </div>
    <div class="p-sidebar-service l-sidebar">
        <h3>サービス内容</h3>
        <ul>
            <li>
                <a href="/service/ihin-seiri">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img1_pc.png"
                        alt="遺品整理"
                    />
                    <p>遺品整理</p>
                </a>
            </li>
            <li>
                <a href="/service/seizen-seiri"
                    ><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img2_pc.png"
                        alt="生前整理"
                    />
                    <p>生前整理</p></a
                >
            </li>
            <li>
                <a href="/service/kaitori"
                    ><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img3_pc.png"
                        alt="遺品買取"
                    />
                    <p>遺品買取</p></a
                >
            </li>
            <li>
                <a href="/service/gomiyashiki"
                    ><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidebar/img4_pc.png"
                        alt="ゴミ屋敷の片付け"
                    />
                    <p>
                        ゴミ屋敷の<br />
                        片付け
                    </p></a
                >
            </li>
        </ul>
    </div>

    <div class="p-sidebar-menu l-sidebar">
        <h3>メニュー</h3>
        <ul>
            <li><a href="/">トップページ</a></li>
            <li><a href="/service/">サービス</a></li>
            <li><a href="/price">料金のご案内</a></li>
            <li><a href="/reason">選ばれる理由</a></li>
            <li><a href="/voice/">お客様の声</a></li>
            <li><a href="/flow/">ご利用の流れ</a></li>
            <li><a href="/faq">よくある質問</a></li>
            <li><a href="/estimate">無料LINEお見積り</a></li>
            <li><a href="/area/">対応エリア</a></li>
            <li><a href="/company">会社案内 </a></li>
            <li><a href="/contact/">無料お見積り・ご相談</a></li>
            <li><a href="/column/">お役立ちコラム</a></li>
        </ul>
    </div>
</div>
