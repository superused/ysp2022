<?php get_header(); ?>
<?php
$datas = [
  11 => ['コロナ禍で 学ぶ人の輪 支えあい（愛）','50代/男性','松風'],
  12 => ['再会は 接種会場 突然に','50代/男性','しおこしょう'],
  13 => ['五輪より 親の願いは 運動会','50代/男性','たかちゃん'],
  14 => ['母からの 手作りマスク 宝物','18‐23歳/女性','豆ナス'],
  15 => ['対コロナ 絆に勝る 武器は無し','50代/男性','つぶ焼きイモー'],
  16 => ['何気ない一期一会に大感謝','30代/女性','さきみち'],
  17 => ['キュウショクが 妻と娘に 必要だ','40代/男性','健吉'],
  18 => ['こんなにも 聞けて無かった 妻の愚痴','40代/男性','たぬき先生'],
  19 => ['妻がする名もなき家事のありがたさ','50代/男性','風まかせ'],
  20 => ['手料理の レパートリー増え 父笑顔','50代/女性','ちーちゃん'],
  21 => ['風邪ひけばまわりは僕を村八分','50代/男性','ハーモニー'],
  22 => ['iPhoneを 両手打ちする 80歳','50代/女性','おでめ'],
  23 => ['テレワーク 働く父の 背が広い','50代/男性','ぴーす'],
  24 => ['出張で 君の大事さ 教えられ','20代/男性','ぽんちょ'],
  25 => ['在宅で 悟った家事の 果てしなさ','30代/男性','ミッドフィルダー'],
  26 => ['テレワーク 互いの仕事 認め合う','50代/女性','茶の花'],
  27 => ['こんなにもやること多い家事育児','50代/女性','ガイア'],
  28 => ['陰性と 分かるまで横 いてくれた','50代/男性','ピアノカフェ'],
  29 => ['好きだから 爺ちゃんち（家）へは 行かないよ','50代/男性','けろね'],
  30 => ['離れても 心はひとつ 温ライン','40代/女性','にじのいろ'],
  31 => ['三密に なっていいのは 夫婦だね','50代/男性','ヒロ'],
  32 => ['幸せは いつも近くに あるものか','40代/女性','まややん'],
  33 => ['食卓に 笑顔溢れる ありがたさ','20代/女性','けんちゃん'],
  34 => ['父は家事 母は仕事の 苦労知る','20代/女性','けんちゃん'],
  35 => ['気をつけて 妻の言葉が 予防策','30代/男性','33歳6ヶ月'],
  36 => ['情報は 牛のようにと 噛みしめる','50代/男性','フーマー'],
  37 => ['パパ今日も いるねと弾ける 子の笑顔','30代/男性','さごじょう'],
  38 => ['テレワーク 気付く夫の 仕事ぶり','30代/女性','松田少納言'],
  39 => ['つながりを 買っていたんだ 個人店','50代/男性','ウシごん'],
  40 => ['テレワーク 親の背を見て 子は育つ','50代/男性','としちゃん'],
  41 => ['アルバムを 囲む家族の 笑顔の輪','40代/女性','弥生'],
  42 => ['在宅で 名もなき家事に 気づかされ','40代/男性','コタラフ'],
  43 => ['安倍マスク 給食当番 思い出す','‐18歳/男性','チョココロナ'],
  44 => ['巣ごもりで 妻の偉大さ 噛みしめる','30代/男性','こうちゃん'],
  45 => ['孫恋し LINEに写メを 猛勉強','50代/男性','八尾のひらりん'],
  46 => ['ただ会えて 話せた日々が なつかしい','50代/男性','夢彦'],
  47 => ['画面越し 伝わる親の 愛と老い','40代/男性','前園日記'],
  48 => ['スマホデビュー 動画で孫と 会うために','20代/女性','えびみく'],
  49 => ['テレワーク 我が子の成長 めざましく','30代/男性','うめまろ'],
  50 => ['人と会う それが元気の 第一歩','30代/男性','ペースかめ'],
  51 => ['No密で 濃密な時 リモ飲みで','30代/女性','ともせんこ'],
  52 => ['ウェブ会議 私喜び 犬怒る','18‐23歳/男性','コウ'],
  53 => ['人権と 呼ばれ始めた 白い布','18‐23歳/男性','だうち'],
  54 => ['勝負服 コロナ太りで お蔵入り','50代/男性','かばくんのかば'],
  55 => ['欲しいのは 接種券より 握手券','40代/女性','ベルル'],
  56 => ['子の夢をじっくり聞けた自粛中','40代/女性','宮のふみ'],
  57 => ['離れれば 離れるほどに 慕わしい','18‐23歳/女性','たまごちゃん'],
  58 => ['途絶えない LINEで気づく 無二の友','50代/女性','なぼりん'],
  59 => ['マスクすりゃ ナンパをされる 率上がり','18‐23歳/女性','くずれ荘管理人'],
  60 => ['マスクなく 色んな国から 届く愛','30代/女性','ひなママ'],
  61 => ['詰めあって 隣に座れる 温かさ','18‐23歳/女性','くるみぱん'],
  62 => ['引きこもり ステイホームに 格上がり','50代/男性','森川慶'],
  63 => ['感染症の 時代を生きる カタツムリ','50代/男性','雲がくれ'],
  64 => ['サングラス マスクの女 妻だった','50代/男性','角 奈緒也'],
  65 => ['飲み会で こんなに散財 してたんだ','40代/男性','たぬき先生'],
  66 => ['孫の顔 見たくてスマホ デビューする','40代/男性','ほり・たん'],
  67 => ['コロナ禍で 子との連絡 密になる','50代/女性','島根のぽん太'],
  68 => ['化粧する 時間と費用 うくマスク','50代/女性','ピコタン'],
  69 => ['妻と子ら 会いたい欲求 第四波','30代/男性','じゅらん'],
  70 => ['式なくて 面識ないまま 親戚に','50代/女性','のりのり'],
  71 => ['オンライン コロナ前より 密になる','50代/男性','山崎三毛'],
  72 => ['離れても 心は傍に 温ライン','30代/女性','ＨＫぼすさん'],
  73 => ['コロナ禍も 妻とはいつもの ディスタンス','50代/男性','減点パパ'],
  74 => ['手取り減り 会話が増えた 自粛中','50代/男性','おーさん'],
  75 => ['素っぴんよ どうせマスクで 隠す顔','50代/男性','落穂'],
  76 => ['アップした 他人に配慮 する力','50代/女性','茶の花'],
  77 => ['夫婦愛 変異株でも 不変です','50代/男性','かばくんのかば'],
  78 => ['化粧変え 機材揃えて ズーム映え','50代/女性','ふわりねこ'],
  79 => ['なに食べる？ 増えた会話と レパートリー','30代/女性','シゲコ'],
  80 => ['味が変 期限切れ食べ コロナかな','30代/女性','さそまり'],
  81 => ['わが素顔 知っているのは 家族だけ','40代/男性','せちい'],
  82 => ['帰れない 親子を繋ぐ 恩ライン','50代/男性','まご命'],
  83 => ['大好きだ だから会わない 愛もある','30代/女性','毛並みもふこ'],
  84 => ['ふれあいは 触れ合うことが すべてじゃない','50代/女性','だんべいぱぱ'],
  85 => ['ゲームから 家事へと移る 子の興味','40代/女性','弥生'],
  86 => ['会えなくて 繋がり大事と 気づく日々','50代/女性','瀬戸ゆうこ'],
  87 => ['人という 漢字の意味を 今気づく','50代/男性','染乃助'],
  88 => ['マスクした 顔しか知らない 新入生','50代/女性','ひだまりのねこ'],
  89 => ['テレワーク 出来ない職種 世のかなめ','50代/女性','いちに'],
  90 => ['デビューした ペイ支払で おやつ増え','50代/男性','ロック丸川柳人'],
  91 => ['マスク越し 目と目で会話 繋がるアイ','20代/男性','えってぃ'],
  92 => ['歩き旅 人と話せる ありがたさ','18‐23歳/男性','ぽぽ'],
  93 => ['見る角度 変われば見える 物の価値','50代/男性','だんべいぱぱ'],
  94 => ['子の夢を 今更知った うち時間','50代/男性','ぴーす'],
  95 => ['ガマンには 「愛」が大事と 気づかされ','50代/男性','松風'],
  96 => ['そばにいる ただそれでいい 日々の幸','50代/女性','ゆずママ'],
  97 => ['「ただいま」に ホッと気持ちが こもる日々','30代/男性','ミッドフィルダー'],
  98 => ['自粛中 実家の仕送り 身に染みる','18‐23歳/男性','若林凌駕'],
  99 => ['なつかしい 通勤電車の 「わたし時間」','30代/男性','さすらいのピースデザイナー'],
  100 => ['褒め上手 妻に乗せられ 家事こなし','50代/男性','森川慶'],
];
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= SENRYU_RESULT_100_IMG; ?>" alt="Image" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="site-section pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-auto">
                      <h4 class="font-weight-bold text-cyan text-center ml-3 mr-3">ご応募いただいた皆さま<br>ありがとうございました！</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「コロナ禍で気づいたこと」をテーマに五・七・五の川柳を募集しました！改めて気づいた家族や大切な人との繋がり、実際に経験したことなど、素敵な作品がたくさん寄せられました！<br>それでは11位～100位、一気に見ていきましょう！</p>
                </div>
              </div>
            </div>
            <div class="site-section p-0" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center mb-3 w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold">その他作品</h4>
                    <div class="contents-border mt-1 mb-2"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row result-list">
                  <div class="senryu-100-data col-12 result-winner row justify-content-center mx-0 my-3 my-md-2 p-0 d-none">
                    <div class="col-12 text-left box-title pt-2 pb-1">
                      <h3 class="text-cyan font-weight-bold font-family-none mb-0"><span class="small text-body font-weight-bold mr-1">第</span><span class="ranking"><?=$i ?></span><span class="small text-body font-weight-bold ml-1">位</span></h3>
                    </div>
                    <div class="col-12 box-body bg-white w-100 p-3">
                      <div class="row px-0 mx-auto">
                        <p class="senryu font-weight-bold m-0 p-0 rem1-2"></p>
                        <div class="text-right text-md-left p-0 w-100 ml-auto">
                          <div class="senryu-name mt-2 rem1-1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="add-ranking" class="ranking text-center col-12 mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
                  <div href="#" class="arrow down circle" ontouchstart=""></div>
                </div>
              </div>
            </div>

<?php $viewSenryu = false; ?>
<?php include 'parts/other-contest.php'; ?>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
    <div class="json-data d-none"><?=json_encode($datas); ?></div>
<?php get_footer(); ?>
