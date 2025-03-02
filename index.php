<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <meta name="Description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">

  <?php include 'font_common.php'; ?>

  <!-- Lightbox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css">

  <meta name="robots" content="noindex, nofollow">
</head>

<body id="top">
  <div id="wrapper">
    <?php include 'header.php'; ?>

    <div id="slide-wrap">
      <div id="slideshow">
        <div class="mv_img">
          <img src="img/mv.png" loading="lazy" alt="想いをカタチに。沖本彩のポートフォリオ">
        </div>
      </div>
    </div>

    <div id="l-main">

      <a id="a01"></a>
      <section class="background-ashirai">
        <div class="section-container">
          <div class="content-box transparent">
            <h2 class="stitle_eng center"><span>Greeting</span><span class="line"></span></h2>
            <p class="mtext2 text-center chosei3">ごあいさつ</p>
            <div class="column2 w800" data-aos="fade" data-aos-delay="400" data-aos-duration="800">
              <div class="child03 text-center">
                <img src="img/greeting.jpg" loading="lazy" alt="沖本 彩" class="img-maru w_half_sp">
              </div>
              <div class="child04">
                <div class="txt textgroup">
                  <p>
                    はじめまして！<br>
                    お忙しい中、本ページをご覧いただきありがとうございます。<br>
                    Webデザイン・コーディングを専門にお仕事をしております<br class="pcbr">
                    <span class="bold">沖本 彩（おきもと あや）</span>と申します。
                  </p>
                  <p>
                    仕事をする上で、<span class="bold">お相手目線</span>を最も大切にしております。<br>
                    これまでの経験を活かし、お客様や一緒に働く仲間が、より安心して、<br class="pcbr">
                    快適にお仕事をお任せいただけるよう、取り組んでおります。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <a id="a02"></a>
      <section class="background-round">
        <div class="background-round__inner">
          <div class="section-container type1">
            <h2 class="title-image type2 text-center"><img src="img/title_works.png" loading="lazy" alt="実績一覧"></h2>
            <p class="b-m60 text-center_pc">
              本ページに掲載されているサイトは、ポートフォリオ用に作成したサンプルサイトです。<br>現在の職務における制作物については、守秘義務の観点から掲載は控えておりますため、<br
                class="pcbr">デザインやコーディングスキルをお伝えする目的で、実際のサイトに近い形で独自に作成したサンプルを掲載しています。
            </p>

            <div class="content-box transparent" data-aos="fade" data-aos-delay="400" data-aos-duration="800">
              <h2 class="stitle_eng center"><span>Works 01</span><span class="line"></span></h2>
              <h3 class="mtext2 text-center chosei3">A社様事例 人材育成支援サイト</h3>
              <div class="column2 column2-img chosei2">
                <div class="child01 child-img">
                  <div class="item-img">
                    <a href="img/works01.png" loading="lazy" rel="lightbox[photo]">
                      <img src="img/works01.png" loading="lazy" alt="A社様事例 人材育成支援サイト">
                      <p class="tcenter">※実際に制作したサイトを再現する形で<br>サンプルサイトを作成しました。</p>
                    </a>
                  </div>
                </div>
                <div class="child textgroup">
                  <p class="mtitle_small">概要</p>

                  <p class="js-marker">スタイリッシュさを引き立てるよう、ベースカラーの黒に、ブランディングカラーの赤をアクセントに入れて構成しました。</p>
                  <p class="js-marker"><span>目を引くデザイン</span>を意識しながら、ユーザーに負担をかけずに情報を伝えられるようにしつつ、適度なアニメーションを取り入れました。</p>
                </div>
              </div>
            </div>
            <div class="content-box3 type1 chosei2">
              <p class="text-center_pc mtext1">
                ※ 本サンプルサイトは、実際に制作したサイトを再現したものです。<br>
                以下の情報は、元となった実案件での詳細情報です。
              </p>
              <div class="column2 tp">
                <div class="child t-m20">
                  <p class="mtitle_box">お客様のニーズ</p>
                  <ul class="list_disc">
                    <li>自作の簡易Webサイトを運営していたが、人材育成支援事業のブランディングに合わせ、<span class="bold">スタイリッシュでプロフェッショナルなデザイン</span>へリニューアルしたい</li>
                    <li>自作サイト上での商材説明が難しいため、情報を整理して、コンテンツを掲載してほしい</li>
                    <li>ブランディングカラーの赤を使用したい</li>
                    <li>見る人の目に止まるような面白い動きが欲しい</li>
                  </ul>
                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">担当範囲</p>
                  <ul class="list_check2 type1 t-m20">
                    <li>お客様への取材</li>
                    <li>デザイン構想</li>
                    <li>コンテンツ作成</li>
                    <li>ライティング</li>
                    <li>コーディング</li>
                    <li>UX改善</li>
                    <li>サイトの公開対応</li>
                  </ul>
                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">ユーザー体験</p>
                  <ul class="list_disc">
                    <li>無形商材の特性上、抽象的な情報を分かりやすく整理し、視認性を向上</li>
                    <li>CTA（お問い合わせボタン）を目立たせ、CV向上を狙った配置に最適化</li>
                  </ul>
                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">成果と評価</p>
                  <ul class="list_disc">
                    <li>提案したデザインが採用され、A社様のブランド戦略とも一致し高評価を獲得</li>
                    <li>サイトリニューアル後、企業からの受注が2件発生</li>
                  </ul>
                </div>
              </div>

              <p class="mini color1 text-center">制作時間：29時間51分</p>
            </div>
            <ul class="list2 jc-center type_width_s">
              <li>
                <p class="button01"><a href="https://ver2025-sample01.ayaokimotoportfolio.com/?<?= time() ?>" target="_blank"
                    rel="nofollow noopener">サンプルサイトはこちら</a></p>
              </li>
              <li>
                <p class="button01"><a href="https://github.com/ao094/2025sample01" target="_blank"
                    rel="nofollow noopener">ソースコードはこちら</a></p>
              </li>
            </ul>

          </div>
          <i class="kiritori kiritori_mini"></i>
          <div class="section-container">
            <div class="content-box" data-aos="fade" data-aos-delay="400" data-aos-duration="800">
              <h2 class="stitle_eng center"><span>Works 02</span><span class="line"></span></h2>
              <h3 class="mtext2 text-center chosei3">一般社団法人B様事例 子ども食堂サイト</h3>
              <div class="column2 column2-img chosei2">
                <div class="child textgroup">
                  <p class="mtitle_small">概要</p>
                  <p>
                    クライアントは「温かみ」と「親しみやすさ」を重視したデザインを希望されておりました。</p>
                  <p><span class="bold">元気いっぱいの子どもを連想させるオレンジ</span>を基調とした柔らかいデザインにしつつ、<span class="bold">視覚的に楽しめるイラストを多用</span>し、大人にも子どもにも親しみやすいUIを構築しました。</p>
                  <p class="js-marker">「<span class="bold">誰でも簡単に情報を見つけられるサイト</span>」を目指しました。</p>

                </div>
                <div class="child child-img">
                  <div class="item-img">
                    <a href="img/works02.png" loading="lazy" rel="lightbox[photo]">
                      <img src="img/works02.png" loading="lazy" alt="一般社団法人B様事例 子ども食堂サイト">
                      <p class="tcenter">※実際のサイトを再現する形で<br>サンプルサイトを作成しました。</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="content-box3 type1 chosei2">
              <p class="text-center_pc mtext1">
                ※ 本サンプルサイトは、実際に制作したサイトを再現したものです。<br>
                以下の情報は、元となった実案件での詳細情報です。
              </p>
              <div class="column2 tp">
                <div class="child t-m20">
                  <p class="mtitle_box">お客様のニーズ</p>
                  <ul class="list_disc">
                    <li>子ども食堂の存在を周知するため、Webサイトを新規制作したい</li>
                    <li>子どもたちへの利用促進と支援者・ボランティアへの呼びかけを行いたい</li>
                    <li>温かみと親しみやすさを重視したデザインにしたい</li>
                  </ul>

                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">担当範囲</p>
                  <ul class="list_check2 type1 t-m20">
                    <li>デザイン構想</li>
                    <li>ライティング</li>
                    <li>コーディング</li>
                    <li>UX改善</li>
                    <li>サイトの公開対応</li>
                  </ul>
                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">デザインとユーザー体験</p>
                  <ul class="list_disc">
                    <li>子どもでも直感的に操作できるシンプルなUI設計</li>
                    <li>施設の情報や支援内容が一目で分かる<span class="bold">アイコン＋カード型レイアウト</span></li>
                    <li><span class="bold">「やさしさ」を意識した丸みのあるフォントやイラスト</span>を利用し、問い合わせへのハードルを低くするデザインを意識</li>
                  </ul>
                </div>
                <div class="child t-m20">
                  <p class="mtitle_box">成果と評価</p>
                  <ul class="list_disc">
                    <li>クライアントから「イメージ通りのデザイン！」と好評</li>
                    <li>サイト公開後、サイトを通じて支援者やボランティアスタッフからの問い合わせあり</li>
                  </ul>
                </div>
              </div>

              <p class="mini color1 text-center">制作時間：10時間</p>
            </div>

            <ul class="list2 jc-center type_width_s">
              <li>
                <p class="button01"><a href="https://ohisama-terrace.ayaokimotoportfolio.com/?<?= time() ?>"
                    target="_blank" rel="nofollow noopener">サンプルサイトはこちら</a></p>
              </li>
              <li>
                <p class="button01"><a href="https://github.com/ao094/2025sample02" target="_blank"
                    rel="nofollow noopener">ソースコードはこちら</a></p>
              </li>
            </ul>

          </div>
          <i class="kiritori kiritori_mini"></i>
          <div class="section-container" data-aos="fade" data-aos-delay="400" data-aos-duration="800">
            <h3 class="mtitle_balloon center"><span>その他、幅広いジャンルの<br class="spbr">サイト制作実績があります！<i></i></span></h3>
            <p class="mtext-top">これまでに<span>約100件</span>の<br class="spbr">コーポレートサイト<br class="spbr">制作実績がございます。</p>
            <div class="content-box3 type1 t-m20">
              <ul class="list-inline">
                <li>不動産</li>
                <li>建築</li>
                <li>土木建築</li>
                <li>建築設計事務所</li>
                <li>土木工業</li>
                <li>訪問看護ステーション</li>
                <li>介護事業</li>
                <li>デイサービス</li>
                <li>病院</li>
                <li>保育園</li>
                <li>イングリッシュスクール</li>
                <li>学習塾</li>
                <li>テニススクール</li>
                <li>シュミレーションゴルフ</li>
                <li>民宿</li>
                <li>ホテル</li>
                <li>レンタカー</li>
                <li>タクシー</li>
                <li>運輸</li>
                <li>流通</li>
                <li>コンサルティング</li>
                <li>特定技能外国人と企業の支援組合</li>
                <li>税理士法人</li>
                <li>小売</li>
                <li>結婚式場</li>
                <li>美容室</li>
                <li>整体</li>
                <li>スポーツジム</li>
                <li>飲食店</li>
                <li>農家</li>
                <li>子供食堂</li>
                <li>陶芸</li>
                <li>クリーニング</li>
                <li>牧場　など</li>
              </ul>

            </div>
          </div>
        </div>
      </section>

      <a id="a03"></a>
      <section>
        <div class="section-container">
          <h2 class="title-image type2 text-center"><img src="img/title_skills.png" loading="lazy" alt="スキル一覧"></h2>

          <div class="box1" data-aos="fade" data-aos-delay="400" data-aos-duration="800">
            <h2 class="stitle_eng"><span>Technique</span><span class="line"></span></h2>
            <h3 class="mtext2 chosei3">技術スキル</h3>
            <ul class="sub_box b-m40">
              <li>
                <p class="icon"><img src="img/icon01_2.png" loading="lazy" alt="HTML/CSS,Sass"></p>
                <p class="ttl">HTML/CSS,Sass</p>
                <p class="txt">セマンティックなマークアップ対応・レスポンシブ・アニメーション対応</p>
              </li>
              <li>
                <p class="icon"><img src="img/icon03.png" loading="lazy" alt=""></p>
                <p class="ttl">CSS設計</p>
                <p class="txt">簡潔さ、再利用性の高さを担保したコーディング・BEMやFLOCSSを用いたCSS設計</p>
              </li>
              <li>
                <p class="icon"><img src="img/icon04.png" loading="lazy" alt=""></p>
                <p class="ttl">UI/UXデザイン</p>
                <p class="txt">課題解決型のデザイン提案・PhotoshopやFigmaを用いた画面デザイン（ワイヤーフレーム）の作成</p>
              </li>
            </ul>
            <h3 class="mtext2">その他にも...</h3>
            <ul class="list-inline2 t-m15">
              <li>JavaScript</li>
              <li>jQuery</li>
              <li>PHP</li>
              <li>Gulp</li>
              <li>GSAP</li>
              <li>クロスブラウザ対応</li>
              <li>基本的SEO対策</li>
              <li>基本的サーバー管理</li>
              <li>他者制作Webサイトの更新・保守作業</li>
              <li>データ入力(Excel)</li>
              <li>文書作成(Word)</li>
            </ul>
            <i class="kiritori kiritori_mini"></i>
            <h2 class="stitle_eng"><span>Tools</span><span class="line"></span></h2>
            <h3 class="mtext2 chosei3">使用ツール</h3>
            <ul class="list_check2 type1">
              <li><span class="color1 bold mtext1">VSCode</span><br>日常的に使用、設定やショートカットに慣れている</li>
              <li><span class="color1 bold mtext1">Cursor</span><br>アシスト機能を活用し、効率的な作業が可能</li>
              <li><span class="color1 bold mtext1">Photoshop</span><br>基本的な編集とデザイン制作が可能</li>
              <li><span class="color1 bold mtext1">Illustrator</span><br>簡単なロゴや図形作成が可能</li>
              <li><span class="color1 bold mtext1">Figma,Miro,Notion</span><br>簡単なワイヤーフレームの作成や共同作業が可能</li>
              <li><span class="color1 bold mtext1">Git</span><br>コマンドラインでの操作、基本的なブランチ管理が可能</li>
            </ul>
            <i class="kiritori kiritori_mini"></i>
            <h2 class="stitle_eng"><span>Others</span><span class="line"></span></h2>
            <h3 class="mtext2 chosei3">その他スキル</h3>
            <ul class="list_check2 type1">
              <li>顧客対応（取材・対面・電話）</li>
              <li>クライアントからの要望ヒアリングと提案</li>
              <li>他部署との調整業務・社内連携</li>
              <li>基本的英会話（TOEIC880程度）</li>
              <li>簡単なロゴデザイン・バナー作成</li>
              <li>制作スケジュールの管理・進行</li>
              <li>後輩への技術指導</li>
              <li>チームマネジメント（5人程度のチームリーダー経験）</li>
              <li>プレゼンテーション</li>
            </ul>
            <!-- <div class="text-center t-m40">
              <img src="img/bnr_works.jpg" loading="lazy" alt="ロゴ・バナーの作成例はこちら" class="img-r">
            </div> -->
            <div class="content-box transparent">
              <h3 class="mtitle-bll">ロゴ・バナー作成例</h3>

              <div class="gallerybox">
                <ul class="slide_list type1">
                  <li><a href="gallery/001.png" rel="lightbox[photo]"><img src="gallery/001.png"></a></li>
                  <li><a href="gallery/002.png" rel="lightbox[photo]"><img src="gallery/002.png"></a></li>
                  <li><a href="gallery/003.jpg" rel="lightbox[photo]"><img src="gallery/003.jpg"></a></li>
                  <li><a href="gallery/004.png" rel="lightbox[photo]"><img src="gallery/004.png"></a></li>
                  <li><a href="gallery/005.png" rel="lightbox[photo]"><img src="gallery/005.png"></a></li>
                  <li><a href="gallery/006.jpg" rel="lightbox[photo]"><img src="gallery/006.jpg"></a></li>
                </ul>
                <ul class="slide_list2 type1">
                  <li><a href="gallery/007.jpg" rel="lightbox[photo]"><img src="gallery/007.jpg"></a></li>
                  <li><a href="gallery/008.jpg" rel="lightbox[photo]"><img src="gallery/008.jpg"></a></li>
                  <li><a href="gallery/009.jpg" rel="lightbox[photo]"><img src="gallery/009.jpg"></a></li>
                  <li><a href="gallery/010.jpg" rel="lightbox[photo]"><img src="gallery/010.jpg"></a></li>
                  <li><a href="gallery/011.png" rel="lightbox[photo]"><img src="gallery/011.png"></a></li>
                  <li><a href="gallery/012.png" rel="lightbox[photo]"><img src="gallery/012.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <a id="a04"></a>
      <section class="background-round">
        <div class="background-round__inner background-ashirai type2">
          <div class="section-container">
            <div class="content-box transparent">
              <h2 class="title-image type2 text-center"><img src="img/title_about.png" loading="lazy" alt="私について"></h2>
              <div class="cont01 content-box transparent animation slideup">
                <div class="cont01_img">
                  <p class="img-f img01"><img src="img/about01.webp" alt="沖縄の海を背景に笑う２匹のシーサー"></p>
                  <p class=" img-f img02"><img src="img/about02.webp" alt="パソコンを操作する女性の手"></p>
                </div>
                <div class="cont01_txt type2">
                  <div class="txt textgroup b-m40">
                    <p>
                      幼少期から高校卒業まで、自然豊かな沖縄で、のびのびと育ちました。
                    </p>
                    <p>
                      好奇心旺盛な性格と人とのコミュニケーションが大好きなことから、東京への進学や海外留学にも挑戦しました。
                    </p>
                    <p>
                      現在も、新しい物事への挑戦を楽しみながら日々成長を続けています。
                    </p>
                  </div>
                  <div class="txt textgroup b-m40">
                    <p class="mtitle_small t-m30">趣味・特技</p>
                    <ul class="list-inline t-m20">
                      <li>新しい技術スキルの習得</li>
                      <li>外国語の勉強</li>
                      <li>ダンス</li>
                      <li>旅行</li>
                      <li>初対面の人との雑談</li>
                      <li>読書</li>
                      <li>猫</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box shadow animation slideup">
              <h3 class="mtitle_box">経歴</h3>
              <dl class="history t-m30">
                <div class="history-inner">
                  <dt>
                    平成4年 <span>1992</span>〜平成28年<span>2016</span>
                  </dt>
                  <dd>
                    大学進学まで沖縄県那覇市に生まれ育つ。<br>明治大学政治経済学部に入学。<br>在学中にカナダとアメリカへ約1年間の留学を経験し、異文化理解とコミュニケーションスキルを磨く。
                  </dd>
                </div>
                <div class="history-inner">
                  <dt>
                    〜平成30年<span>2018</span>
                  </dt>
                  <dd>
                    新卒でジョンソン・エンド・ジョンソングループの医薬品部門、ヤンセンファーマ株式会社に入社。<br>
                    MR（医薬情報担当者）として勤務し、医師や医療従事者に対して自社医薬品の情報提供や提案を行い、専門的な知識と高い提案力を習得。
                  </dd>
                </div>
                <div class="history-inner">
                  <dt>
                    〜令和3年<span>2021</span>
                  </dt>
                  <dd>
                    転職し、インサイドセールスを1年間担当。<br>
                    顧客とのコミュニケーションを通じて課題を把握し、最適なソリューションを提案する営業スキルを磨く。<br>
                    その後、キャリアの幅を広げるため事務職へ転職し、企業の総務として多岐にわたる業務を経験。<br>
                   業務効率化のための仕組みづくりや、細やかな調整力を活かしたサポート業務を通じて、社内の潤滑油としての役割を果たす。
                  </dd>
                </div>

                <div class="history-inner">
                  <dt>
                    〜令和4年<span>2022</span>
                  </dt>
                  <dd>
                    Webデザインとコーディングに興味を持ち、独学および職業訓練を通じてスキルを習得。<br>UI/UXデザインにも関心を持ち、ユーザー視点を意識した設計を学ぶ。
                  </dd>
                </div>
                <div class="history-inner">
                  <dt>
                    〜現在
                  </dt>
                  <dd>
                    Web制作会社に2年以上勤務し、これまでに約100件のWebサイト制作を担当。<br>
                    新規サイト制作だけでなく、月に約200件のサイト保守・運用業務も手がけ、改善提案やSEO対策の実施など、Webサイトの継続的な価値向上に貢献している。
                  </dd>
                </div>
              </dl>

              <ul class="gallery t-m50">
                <li>
                  <a href="img/career01.jpg" data-lightbox="gallery">
                    <img src="img/career01.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a href="img/career02.jpg" data-lightbox="gallery">
                    <img src="img/career02.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a href="img/career03.jpg" data-lightbox="gallery">
                    <img src="img/career03.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a href="img/career04.jpg" data-lightbox="gallery">
                    <img src="img/career04.jpg" alt="">
                  </a>
                </li>
              </ul>

            </div>
            <div class="content-box shadow animation slideup t-m40">
              <h3 class="mtitle_maru type1"><span class="eng">Strength</span><span class="ja">私の強み</span></h3>
              <ol class="ol-list">
                <li>
                  <span class="mtext1 color1 bold">コミュニケーション力</span><br>
                  営業職と事務職で培ったヒアリングや調整能力により、ユーザーのニーズを正確に理解し、最適なデザインを提供できます。<br>また、チーム内外で円滑なコミュニケーションを心がけ、プロジェクトをスムーズに進行させる力があります。
                </li>
                <li>
                  <span class="mtext1 color1 bold">問題解決力</span><br>
                  多岐にわたる業務経験を通じて、課題に対して冷静にアプローチし、解決策を提案・実行してきました。<br>現在の職務では、お客様（ユーザー）のお悩みをもとに改善案を立て、UXの向上を実現しています。
                </li>
                <li>
                  <span class="mtext1 color1 bold">国際的な視野</span><br>
                  異文化理解を深め、多様な価値観を尊重することで、幅広い視点での提案やコミュニケーションができます。
                </li>
                <li>
                  <span class="mtext1 color1 bold">知的好奇心・向上心</span><br>
                  新しい技術や情報に常にアンテナを張り、自身の知識として吸収する好奇心があります。
                </li>
              </ol>
            </div>
            <p class="text-center t-m50 animation slideup">
              <img src="img/last_sentence.png" loading="lazy" alt="最後までお読みいただき、ありがとうございました。お会いできることを楽しみにしています！！">
            </p>
          </div>
        </div>
      </section>
      <a id="a05"></a>
      <section>
        <div class="section-container">
          <div class="content-box transparent animation slideup">
            <h2 class="title-image type2 text-center"><img src="img/title_contact.png" loading="lazy" alt="お問い合わせ"></h2>

            <div class="content-box">
              <p class="b-m40 text-center_pc">お問い合わせやご連絡は、電話またはメールにてお気軽にご連絡ください。</p>
              <ul class="telbnr">
                <li><a href="tel:<?php echo $telNo; ?>"><?php echo $telNo; ?></a></li>
                <li class="telbnr-mail"><a href="mailto:094aya.design@gmail.com" target="_blank"
                    rel="nofollow noopener">Mail</a></li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
    <?php include 'footer.php'; ?>

  </div>
  <script src=" https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <!-- Lightbox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>

  <!-- infiniteslide -->
  <script src="js/infiniteslide.js" type="text/javascript"></script>
  <script>
    $(function() {
      // infiniteslide
      $('.slide_list').infiniteslide({
        speed: 15,
        responsive: true,
        direction: 'right',
        pauseonhover: false
      });
    });

    $(function() {
      // infiniteslide
      $('.slide_list2').infiniteslide({
        speed: 15,
        responsive: true,
        direction: 'left',
        pauseonhover: false
      });
    });
  </script>
  <!-- aos -->
  <script src="aos/aos.js" type="text/javascript"></script>
  <script src="aos/aos_set.js" type="text/javascript"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>