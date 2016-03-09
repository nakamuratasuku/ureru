<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header('ureru'); ?>

<body id="top"><a id="pagetop"></a>

<?php get_template_part('nav'); ?>

<div id="contents">
<article>
<div class="block-full">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_mainvisual-sp.jpg" alt=""  class="top-imgblock">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_laugh01.jpg" class="top-imgblock"  alt="笑って査定アップ">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_laugh02.jpg" class="top-imgblock" alt="その笑い買います">
    <div id="whyup"><p>ナゼ、笑うと査定がアップするの？</p></div>

</div>
</article>

<div class="block-full">
    <div id="important">
        <h2 class="no-style"> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/title_important.png" class="widefull" alt="ウレルが大事にしてること"></h2>
        <p>ブランド・貴金属店に売りに来るお客様は遺品整理だったり、恋人との別れなど、色々な事情がありますが、弊社はそのようなお客様に「笑」で元気をあげられる空間にしたいと思ってます。私たちの買取店はお笑い重視であり、お客様が帰りに笑いながら「あそこのお店はウケるわ！また気楽にいきたいし、値段も頑張ってくれて嬉しい！」をモットーにしています。</p>
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_important.png" class="img_center">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/txt_important.png" alt="日本で一番お客様の笑顔が多い買取販売店を目指しています" class="widefull">
    </div>
</div>

<div class="block-full">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_laugh03.jpg" class="top-imgblock"  alt="笑って査定アップ">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_laugh04.jpg" class="top-imgblock mgB20" alt="その笑い買います">
     <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_event.jpg" class="top-imgblock mgB20" alt="その笑い買います">
</div>

<div id="staff" class="block-full clearfix">
    <div class="section_title">
    <h2>スタッフ紹介</h2>
    <p>私たちがウレルでお待ちしています！</p>
    </div>
    <section>
    <div class="staff-detail" id="staff-tencyo">
    <div class="photo">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/photo_tencyo.png" alt="ウレル大宮店 店長 宮下 忠昌 リユース営業士 資格取得" class="widefull">
    </div>
    <div class="staff-txt">
        <h3>■お客様へのメッセージ</h3>
        <p>ウレルをご覧の皆様へ<br><br>
            最近笑ってますか？<br>
            突然ですが、実は世界で一番ストレスが多い国は日本とも言われているんです。<br>
            そこでウレルは「買取」にプラスして「笑い」を提供致します。<br>
            笑いにはストレス発散効果があると言われております。私たちはその「笑い」を通してお客様のストレス軽減のお手伝いをさせて頂きたいと思っております！ご来店の際はお腹が痛くなるまで一緒に笑いましょう！</p>
    </div>
    <div class="staff-txt">
        <h3>■趣味</h3>
        <p>私の趣味はアウトドア、冒険、パズル、手品など様々な事です。ご来店した際には色んな趣味のお話しでできれば幸いです。<br>
        私はカナダ生まれ、カナダ育ちの帰国子女です。カナダと言えば風邪薬代わりに飲むほんわりした朝のメープルシロップTEAや冬にしか飲まないエッグノッグです。<br>
        これからウレルは全国どこに行っても気軽に御来店出来るお笑いを重視した買取店をどんどん出店致します。</p>
    </div>
    </div>
    </section><!-- ▲店長 -->

    <section>
        <div class="staff-detail" id="staff-nakagawa">
            <div class="photo">
                <img src="<?php echo get_template_directory_uri() ?>/common/images/top/photo_nakagawa.png" alt="ウレル大宮店 バイヤー 中川 典洋">
            </div>
            <div class="staff-txt">
                <h3>■お客様へのメッセージ</h3>
                <p>家で眠ってしまっていたり処分に困っている物はございませんか？<br>
                    当店ではウレル（売れる）＝（笑い）をテーマとしております。
                    また、店内はお客様がリラックス出来る空間作りに力を入れています。
                    目標としましてはお客様満足度100%を目指しますのでこのウレルに清き一票お願い致します。<br>
                    是非、ご来店お待ちしております。</p>
            </div>
            <div class="staff-txt">
                <h3>■趣味</h3>
                <p>多趣味でして、トレーニングで体を動かしたり映画や旅行で色々な国や地方に出掛けたりします。<br>
                    私のモットーは人生一度なので色んな事にチャレンジします。<br>
                    そんな趣味でお客様とお話し出来たらと思いますので気兼ねなくお声掛けください。</p>
            </div>
        </div>
    </section><!-- ▲中川さん -->

    <section>
        <div class="staff-detail" id="staff-aoki">
            <div class="photo">
                 <img src="<?php echo get_template_directory_uri() ?>/common/images/top/photo_aoki.png" alt="ウレル大宮店 鑑定士 青木 拓弥">
            </div>
            <div class="staff-txt">
                <h3>■お客様へのメッセージ</h3>
                <p>当店はお客様に楽しんでお買取をしていただく事をコンセプトにしています。リラックスできる空間でバイヤーとのトークを是非お楽しみください！</p>
            </div>
            <div class="staff-txt">
                <h3>■趣味</h3>
                <p>ファッション誌やファッション情報サイトを見ること。店頭でお会いした際には洋服について語りましょう！</p>
            </div>
        </div>
    </section><!-- ▲青木さん -->

    <section>
        <div class="staff-detail" id="staff-kotsubo">
            <div class="photo">
                 <img src="<?php echo get_template_directory_uri() ?>/common/images/top/photo_kotsu.png" alt="ウレル大宮店 スタッフ 小坪 均">
            </div>
            <div class="staff-txt">
                <h3>■お客様へのメッセージ</h3>
                <p>ウレルでは「笑い」をテーマとし、来ていただいたお客様にできるかぎりの「楽しさ」を提供できるよう心がけています。<br>査定にも対応にも満足していただけたらとても嬉しいです。ぜひ気軽に当店へ足をお運びください。</p>
            </div>
            <div class="staff-txt">
                <h3>■趣味</h3>
                <p>趣味はずばり「靴」です。前職が靴修理人だったのですが、革でできた紳士靴やブーツが大好きで、足になじんだりアジが出てくるところが特に大好きです。</p>
            </div>
        </div>
    </section><!-- ▲小坪さん -->
</div>


<div id="itemlist">
    <h2>買取アイテム一覧</h2>
    <ul class="item-box clearfix">
        <li id="item_brandirui">ブランド衣類</li>
        <li id="item_brandbag">ブランドバッグ</li>
        <li id="item_kikinzoku">貴金属</li>
        <li id="item_tokei">時計</li>
        <li id="item_kottohin">骨董品</li>
        <li id="item_brandshokki">ブランド食器</li>
        <li id="item_kinzoku">金属</li>
        <li id="item_hoseki">宝石</li>
        <li id="item_barndjewelry">ブランド<br>ジュエリー</li>
    </ul>
</div>


<div id="itemlist-kyouka">
    <div class="section_title">
    <h2>買取強化中アイテム</h2>
    <p> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/txt_kyoka.png" class="widefull"></p>
    </div>
    <ul class="item-box clearfix">
        <li id="item_rolex">ロレックス</li>
        <li id="item_diamond">ダイヤ</li>
        <li id="item_kihei">喜平のネックレス</li>
        <li id="item_apparel">アパレル</li>
        <li id="item_vuitton">ヴィトン</li>
        <li id="item_hublot">ウブロ</li>
        <li id="item_gucci">グッチ</li>
        <li id="item_chromehearts">クロムハーツ</li>
        <li id="item_chanel">シャネル</li>
        <li id="item_tiffany">ティファニー</li>
        <li id="item_prada">プラダ</li>
        <li id="item_bulgari">ブルガリ</li>
    </ul>
</div>



<div id="soba">
    <h2>買取相場</h2>
    <ul class="soba-box">
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba01.jpg" class="thum"><h3>ダイヤ</h3>
            <p class="price01"><span>30</span>万〜<span>35</span>万</p>
            <p class="price02">¥<span>400,000</span></p>
        </li><!-- ▲1 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba02.jpg" class="thum"><h3>エメラルドダイヤリング</h3>
            <p class="price01">￥<span>15,000</span></p>
            <p class="price02">¥<span>20,000</span></p>
        </li><!-- ▲2 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba03.jpg" class="thum"><h3 class="line2">ブルガリB-zero1 <br>ネックレス</h3>
            <p class="price01"><span>6</span>万〜<span>8</span>万</p>
            <p class="price02">¥<span>90,000</span></p>
        </li><!-- ▲3 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba04.jpg" class="thum"><h3>カルティエ　ラブブレス</h3>
            <p class="price01"><span>20</span>万〜<span>24</span>万</p>
            <p class="price02">¥<span>260,000</span></p>
        </li><!-- ▲4 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba05.jpg" class="thum"><h3>ロレックス　デイトナ</h3>
            <p class="price01"><span>80</span>万〜<span>90</span>万</p>
            <p class="price02">¥<span>950,000</span></p>
        </li><!-- ▲5 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba06.jpg" class="thum"><h3 class="line2">シャネル J12 ダイヤ入り QZ</h3>
            <p class="price01"><span>25</span>万〜<span>28</span>万</p>
            <p class="price02">¥<span>300,000</span></p>
        </li><!-- ▲6 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba07.jpg" class="thum"><h3 class="line2">ジェイコブス<br>ファイブタイムゾーン</h3>
            <p class="price01"><span>30</span>万〜<span>35</span>万</p>
            <p class="price02">¥<span>400,000</span></p>
        </li><!-- ▲7 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba08.jpg" class="thum"><h3>EX2</h3>
            <p class="price01"><span>30</span>万〜<span>35</span>万</p>
            <p class="price02">¥<span>370,000</span></p>
        </li><!-- ▲8 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba09.jpg" class="thum"><h3 class="line2">シャネル マトラッセ<br>チェーンショルダーバッグ</h3>
            <p class="price01"><span>15</span>万〜<span>20</span>万</p>
            <p class="price02">¥<span>220,000</span></p>
        </li><!-- ▲9 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba10.jpg" class="thum"><h3>プラダ　カナパトート</h3>
            <p class="price01"><span>3</span>万〜<span>4.5</span>万</p>
            <p class="price02">¥<span>50,000</span></p>
        </li><!-- ▲10 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba11.jpg" class="thum"><h3 class="line2">ベルルッティ<br>カリグラフィ 長財布</h3>
            <p class="price01"><span>3</span>万〜<span>7</span>万</p>
            <p class="price02">¥<span>80,000</span></p>
        </li><!-- ▲11 -->
        <li> <img src="<?php echo get_template_directory_uri() ?>/common/images/top/thum_soba12.jpg" class="thum"><h3 class="line2">クリスチャンルブタン<br>長財布</h3>
            <p class="price01"><span>4</span>万〜<span>6</span>万</p>
            <p class="price02">¥<span>70,000</span></p>
        </li><!-- ▲12 -->
    </ul>
    <div id="plus500" class="block-fix">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_campaign_laugh.jpg" class="widefull">
        <p>ブランド品の相場は、どこのお店もだいたい一緒。だからウレルはお客様に笑って帰っていただくために笑顔になっていただいたお客様にはほんの気持ちばかりですが査定金額に500円プラスしています。<span>※金属類は対象外</span></p></div>
</div>



<div id="brandlist">
    <h2>買取ブランド一覧 </h2>
    <ul class="block-fix">
        <div>
        <li>HERMES</li>
        <li>CHANNEL</li>
        <li>LOUIS VUITTON</li>
        </div>
        <div>
        <li>GUCCI</li>
        <li>CARTIER</li>
        <li>PATEK PHILIPPE</li>
        </div>
        <div>
        <li>ROLEX</li>
        <li>FRANK MULLER</li>
        <li>HARRY WINSTON</li>
        </div>
        <div>
        <li>BVLGARI</li>
        <li>TIFFANY</li>
        <li>VANCLEEF<br>&amp;<br>ARPELS</li>
        </div>
    </ul>
</div>


<div id="episode">
    <h2>お客様の笑えたエピソード</h2>
</div>

<div id="shop">
    <h2>買取は店頭で！</h2>
    <div id="shop-wrap" class="clearfix">
    <div id="shop-photo">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/photo_shop.png">
        <div>ブランド品・宝石・ブランド腕時計の高価買取<br>
         <img src="<?php echo get_template_directory_uri() ?>/common/images/common/img_logo.png">
        <h3>ウレル大宮店</h3>
        </div>
    </div>
    <div id="shop-detail">
        <div class="shop-detail-box"><h3>住所 <a href="https://www.google.com/maps/place/%E6%97%A5%E6%9C%AC,+%E3%80%92330-0854+%E5%9F%BC%E7%8E%89%E7%9C%8C%E3%81%95%E3%81%84%E3%81%9F%E3%81%BE%E5%B8%82%E5%A4%A7%E5%AE%AE%E5%8C%BA%E6%A1%9C%E6%9C%A8%E7%94%BA%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%91%E2%88%92%EF%BC%95/@35.905689,139.623994,17z/data=!4m2!3m1!1s0x6018c1430714214b:0x52e905e85089c8a8?hl=ja" target="_blank";><img src="<?php echo get_template_directory_uri() ?>/common/images/top/bt_map.png" width="40"></a></h3><p>■埼玉県さいたま市大宮区桜木町1-1-5-4F</p></div>
        <div class="shop-detail-box"><h3>アクセス</h3><p>■大宮駅西口（２F）を出て歩道橋の中央の階段を下るとファーストキッチンがあります。少し進むとその並びに不動産のマストがあります。そのビルの4階がウレルです。</p>
        <p>■お車でお越しの方は近くのコインパーキングをご利用ください。</p></div>
    </div>
    <div id="telnum">
        <h3>お問い合わせ</h3>
        <p><span>048-762-7710</span><br>
            受付時間：10:00〜18:00<br>どんなことでもお気軽に！</p>
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_contact.png">
    </div>
        <div id="shop-txtB">5,000円以上の買取成立で<br>パーキング代として<br>500円査定金額にプラスします。</div>
    <div id="track">
        <h3>お売りになる荷物が多い方へ</h3>
        <p>郵送で送ってからのご来店も可能です。<br>
            送料は当店が負担いたします。<br>
            まずはお電話ください。</p>
    </div>
    </div>

</div>



<article>
    <div class="block-full">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_rainyday.jpg" class="top-imgblock"  alt="雨の日はタクシー代当店で負担します！※金属類は対象外">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/img_syuccyo.jpg" class="top-imgblock" alt="完全無 料全国対応! 出張買取やってます！ まずはお電話ください">
    </div>
    <div class="block-full" id="widthyou">
         <img src="<?php echo get_template_directory_uri() ?>/common/images/top/txt_btm_widthyou.png" alt="あなたもウレルで笑っていってください！">
    </div>
</article>

</div><!-- ▲contents -->

<?php get_footer('ureru'); ?>