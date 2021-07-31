<?php get_header(); ?>
<?php
$datas = [
  1  => ["088xF9gYoK8","Akishima - 昭島 -","noeul (ノウル)","生まれてからこれまでずっと私が育ってきたまち。気づけば周りの色々なものがあって当たり前になってしまっていました。\n私のまちの魅力？そんな大したものないだろうな、と思っていましたが、今回構成を考え、撮影し、そして編集していく中で自分が住んでいるこの昭島にこんなにも良いところがあるし、こんなにも歴史があるんだということを改めて知ることが出来ました。\nそんな昭島の魅力を私が感じる部分だけでなく、周りの人にも聞いてみながら制作しました。\nほんの一部でも昭島の魅力が伝われば幸いです。"],
  2  => ["FT0DaIBVX04","宮崎県日南市","Minegami naoya","宮崎県日南市（にちなんし）の動画です。\n日南市の良さを３つのテーマを軸に動画作成しました。\n一つ目は日南市が誇る海。\nサーファーが一目置くほど日南の海は波がよく人気で、とても綺麗です。日南の海の素晴らしさが少しでも伝わればいいなと思っています。\n二つ目に歴史ある飫肥（おび）城下町。\n裸の大将というドラマが撮影された町でもあり今でもたくさんの観光客がきていて、日南市の魅力の一つです。\n三つ目に日南市で働く人達。\n日南市の人々は家族もちが多く、若くして子供をもつパパママがたくさんいます。そういった働くパパ、ママを少しでもPRできたらいいなと思い動画をつくりました。"],
  3  => ["66nsoBVIStg","ときがわ町","tia","ときがわ町の自然の美しさと、地元の方々による努力で四季折々の綺麗な花々を楽しむことが出来るスポットが多く、また自然が美しいからこそ美味しい食べ物も豊富です。今回は、旅館業を営みながら年に数回しかオープンしないカフェで知り合った、町田屋旅館さんをご紹介です。建物と歴史を見守ってきた百日紅（さるすべり）を中心とした素敵なお庭、何よりお会いすれば町田さんご夫婦の人柄に惹かれるはずです。"],
  4  => ["9Kva9bIDA3A","神戸は楽しみ方自由！！","ふじくん","私は神戸に住んでいます。今回、自分の住んでいる街の魅力を考えたところ神戸は楽しめる施設や環境に恵まれていることに改めて気づきました。その気づきと共に、楽しめる施設や環境があるからこそ一人一人違った神戸の楽しみ方があるはずだと思いました。そこでこの動画では私が神戸の行きたいところを自分勝手に巡りました。この動画を見て「私だったらここに行くかな」「ここ行ってみたいな」と思ってもらえると嬉しいです。"],
  5  => ["noDBIR5ChL0","レッツゴー！蒲郡！","49WORKS","愛知県の三河湾に面した蒲郡市は、県内最大の温泉観光地です。国の天然記念物・竹島、竹島水族館、ラグーナテンボスなどの観光スポットや、名物の深海魚、蒲郡みかん、海産物などグルメにも自信あり！"],
  6  => ["Vq9mg_uo_so","彩たま ~SAITAMA~","NO's","みなさん埼玉と言ったら何を思い浮かべますか？そう、ダサいたまですよね。いつも魅力度ランキングでは最下位常連。埼玉って何もない県と思われているはずです。\nでも、埼玉は魅力で溢れているんです！次の新一万円札の肖像画に決まった渋沢栄一さんもなんと埼玉県出身。絶賛大河ドラマもやっています。ダサいたまと言われがちですが、埼玉はなんでもそろっている”たさいたま”なんです。そんな彩りあふれる埼玉に少しでも来たいと思ってもらえたら嬉しいです！！"],
  7  => ["QzyoZ1DEMXw","「おさんぽまっぷ」で街歩き　雑貨とカフェの街　東林間","さがみ女子","小田急線「東林間」駅から「小田急相模原」駅にかけてのエリアにはすてきな雑貨屋さんやカフェが集まっています。それらのお店を紹介した「おさんぽマップ」。\nコロナ禍で遠出が規制される中、地元の素敵スポットを探した際に見つけました。友達とお散歩マップを巡る中で町の良さに気づき、1人でも訪れたり、他の友達にも紹介したりするほど、大好きになりました。\nその中の一つの雑貨屋さんにインタビューしてみました！"],
  8  => ["g_KyrcLpnKM","中町の、家族でお世話になっているお気に入りスポット","うしえ","世田谷区中町の紹介動画です。家族でよく行く場所、お気に入りのお店を紹介しています。コロナの影響で電車での移動がなくなった分、歩ける距離でお気に入りになるお店がたくさんできました。お世話になったお店や人との出会いを振り返りました。"],
  9  => ["Dr0sSUnBpmc","扉","湊 祐太朗"," 神奈川県小田原市のPR動画。BGMは、私が卒業した相洋高校の和太鼓部が演奏する日本の童謡である「お猿のかごや」を使用。この「お猿のかごや」の１番の歌詞は小田原市とゆかりがある。映像も音楽も全てMade in Odawara。\n小田原は歴史ある町なので、靴→わらじになって小田原城やお祭りなど由緒正しい小田原を紹介したり、今私たちの高校で人気のある小田原の家系ラーメンや、小田原の名物である干物、交通の便の良さ、景色をアピールした動画になっている。ドアを開けたら小田原の街だったり、画面を切り替えたりするのを工夫した。"],
  10 => ["74_R2UskahM","Light of Roppongi","iwapt","会社帰りに六本木の夜の光に癒されてきました。私が見てきたその景色を映像で人々に伝え、コロナが終息したらまた綺麗な夜景や桜を皆様に見てもらいたいです。"],
  11 => ["7_IiFf0rlWw","うちらの堺の魅力","さかいーず"," 今回は堺の様々な魅力を動画にしました。\n有名な堺の地名はもちろん、私たちが知るdeepな堺を紹介してるので、ぜひみて遊びに来てくださいね！"],
  12 => ["hULHdmDg_Ls","大須観音と大須商店街（愛知県名古屋市）","一誠","名古屋の観光名所「大須商店街」。食べ歩きを楽しめる観光スポットとして、休日は多くの人で賑わいます。今回は、大須商店街で買える、おすすめの食べ歩きグルメをご紹介！フォトジェニックなSNS映えスイーツや、手軽に味わえる名古屋めしなども楽しめます！"],
  13 => ["P-kGLS73T6E","【栃木県大田原市】南方という地域と人々","大田原市移住定住交流サロン","魅力度ランキング最下位を取得した ”栃木県”\nその中でもさらにマイナーな【大田原市南方】という地域にお邪魔した時の映像です。\n観光地とは言えない地域でも自然が豊かで素敵な人々に出会えました。"],
  14 => ["zhT9oPIfbGo","大好き、私達の八百屋さん","ヘリオトロープ","日頃お世話になっている地元の八百屋さん。本当に家族のような温かい関係をたくさんの方と作られています。人だけでなく動物にも愛される八百屋さんです。"],
  15 => ["Zv5-2xqh3Tk","カルガモの親子と憩いの場〜かながわサイエンスパーク〜　","にっしー","かながわサイエンスパークは、神奈川県川崎市にある施設です。\n外縁には市民の憩いの緑地があり、穏やかな池があります。\nその池に泳いでいたカルガモの親子の親子愛に触発されて作った作品です。\nカルガモのお母さんが子供を見守るように、街の人たちもカルガモ親子を見守る。ゆっくりとした時間が流れる場所でした。"],
];
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= MOVIE_RESULT_IMG; ?>" alt="Image" class="img-fluid w-100 h-100">
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
                      <h4 class="font-weight-bold text-cyan text-center ml-3 mr-3">ムービーコンテスト！<br>総合グランプリ発表！</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「My Favorite Town」をテーマに、町の魅力を収めたショートムービーの数々が寄せられました。全○作品の中から、総合グランプリが決定しました！</p>
                </div>
              </div>
            </div>
<?php $count = 0; ?>
<?php foreach ($datas as $key => $data): ?>
<?php     $count++; ?>
<?php     if ($count == 1 || $count == 2): ?>
<?php         if ($count == 1): ?>
            <div class="photo_button site-section bg-gold p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100" data-type="content-block">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_g.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">最優秀賞</div>
                    </div>
                  </div>
<?php         else: ?>
            <div class="photo_button site-section bg-silver p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100" data-type="content-block">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_s.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">優秀賞</div>
                    </div>
                  </div>
<?php         endif; ?>
                  <div class="col-12 text-center mx-auto">
                    <div class="photo_title font-weight-bold px-0 rem1-2"><?= $data[1]; ?></div>
                  </div>
                  <div class="px-3 pb-4 pt-2 mx-auto">
                    <div class="width-fixmax">
                      <div class="youtube">
                        <iframe src="https://www.youtube.com/embed/<?= $data[0]; ?>" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                      </div>
                      <div class="photo_episode mt-3"><?= nl2br(esc_html($data[3])); ?></div>
                      <div class="photo_name mt-2"><?= $data[2]; ?> さん</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     else: ?>
<?php         if ($count == 3): ?>
            <div class="photo_button site-section bg-bronze p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 justify-content-center trophy-box row text-center mx-auto mt-5 mb-4 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_b.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">佳作</div>
                    </div>
                  </div>
                </div>
                <div class="row">
<?php         endif; ?>
                  <div class="col-12 col-lg-6 p-0" data-type="content-block">
                    <div class="m-3 mt-4 mt-lg-3">
                      <div class="photo_title float-left font-weight-bold px-0 rem1-2"><?= $data[1]; ?></div>
                      <div class="width-fixmax">
                        <div class="youtube">
                          <iframe src="https://www.youtube.com/embed/<?= $data[0]; ?>" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="photo_episode mt-3"><?= nl2br(esc_html($data[3])); ?></div>
                        <div class="photo_name mt-2"><?= $data[2]; ?></div>
                      </div>
                    </div>
                  </div>
<?php         if ($count == count($datas)): ?>
                </div>
              </div>
            </div>
<?php         endif; ?>
<?php     endif; ?>
<?php endforeach; ?>
<?php $viewPhoto = false; ?>
<?php include 'parts/other-contest.php'; ?>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>

    <div id="fixed-menu-move"></div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
      <div class="modal-dialog text-white text-center" role="document">
        <h4 class="photo_title font-weight-bold mb-3"></h4>
        <div class="m-0 mb-4">
          <img src="" class="photo_image w-100">
        </div>
        <div class="text-left mb-1 w-100"><span class="mr-3">ペンネーム</span><span class="photo_name"></span></div>
        <div class="photo_episode text-left mb-3 w-100"></div>
      </div>
    </div>
<?php get_footer(); ?>
