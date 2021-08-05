<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';

// コンテスト締切
define('CONTEST_END_DATE', '2021-08-08 15:00:00');
define('CONTEST_ENDED', strtotime(date('Y-m-d H:i:s')) >= strtotime(CONTEST_END_DATE));

// 外部サイトURL
define('GOODS_SHOP_URL', 'https://peace-designer.stores.jp/'); // グッズショップ外部サイト
define('QUESTIONNAIRE_URL', 'https://forms.gle/Gn4N6tGe1cv3LFBq8'); // アンケート＆プレゼントURL

// SNS
define('SNS_INSTAGRAM_URL', 'https://instagram.com/peace_designer_fes');
define('SNS_LINE_URL', 'https://lin.ee/sAjXedp');
define('SNS_YOUTUBE_URL', 'https://www.youtube.com/channel/UC9_j943rPgN0a5R55id3V9A');

// URL群
define('HOME_URL', esc_url(home_url('/')));
define('NEWS_URL', esc_url(home_url('/news/')));
define('LIVE_URL', esc_url(home_url('/live/')));
define('LIVE_DETAIL_URL', esc_url(home_url('/live-detail/')));
define('PROJECT_URL', esc_url(home_url('/project/')));
define('PROJECT_REGION_URL', esc_url(home_url('/project-region/')));
define('PROJECT_ACTIVITY_URL', esc_url(home_url('/project-activity/')));
define('SENRYU_CONTEST_URL', esc_url(home_url('/senryu-contest/')));
define('SENRYU_RESULT_LIST_URL', esc_url(home_url('/senryu-result-list/')));
define('MOVIE_CONTEST_URL', esc_url(home_url('/movie-contest/')));
define('PHOTO_CONTEST_URL', esc_url(home_url('/photo-contest/')));
define('PHOTO_RESULT_LIST_URL', esc_url(home_url('/photo-result-list/')));
define('CONTACT_URL', esc_url(home_url('/contact/')));
define('CONCEPT_URL', esc_url(home_url('/concept/')));
define('LIVE_CONTENTS_URL', esc_url(home_url('/#live')));
define('PROJECT_CONTENTS_URL', esc_url(home_url('/#project')));
define('CONTEST_URL', esc_url(home_url('/#contest')));
define('CONTENTS_LIST_URL', esc_url(home_url('/#contents-list')));
define('SENRYU_URL', esc_url(home_url('/#senryu')));
define('PHOTO_URL', esc_url(home_url('/#photo')));
define('MOVIE_URL', esc_url(home_url('/#movie')));
define('FAVICON_URL', esc_url(home_url('favicon.ico')));

// 連合会情報
define('PROJECT_URL', 'https://www.yahoo.co.jp');
define('PROJECT_ACTIVITY_FREQUENCY', '月2回');
define('PROJECT_ACTIVITY_PLACE', '東京都世田谷区');
define('PROJECT_MAIL', 'mail@mail.com');

define('SITE_TITLE', 'PEACE DESIGNER FES｜2021.08.07~09 オンライン');

// ニュースサムネイル デフォルト画像
define('NO_IMAGE_URL', get_template_directory_uri() . '/images/noimage.png');

// 背景画像
define('SENRYU_IMG', get_template_directory_uri() . '/images/sidebar/senryu.jpg');
define('SENRYU_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/' . (CONTEST_ENDED ? 'senryu_result_s.jpg' : 'senryu_s.jpg'));
define('SENRYU_RESULT_IMG', get_template_directory_uri() . '/images/sidebar/senryu_result.jpg');
define('SENRYU_RESULT_100_IMG', get_template_directory_uri() . '/images/sidebar/senryu_result_100.jpg');
define('PHOTO_IMG', get_template_directory_uri() . '/images/sidebar/photo.jpg');
define('PHOTO_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/' . (CONTEST_ENDED ? 'photo_result_s.jpg' : 'photo_s.jpg'));
define('PHOTO_RESULT_IMG', get_template_directory_uri() . '/images/sidebar/photo_result.png');
define('PHOTO_RESULT_100_IMG', get_template_directory_uri() . '/images/sidebar/photo_result_100.png');
define('MOVIE_IMG', get_template_directory_uri() . '/images/sidebar/movie.jpg');
define('MOVIE_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/' . (CONTEST_ENDED ? 'movie_result_s.jpg' : 'movie_s.jpg'));
define('MOVIE_RESULT_IMG', get_template_directory_uri() . '/images/sidebar/movie_result.png');
define('PROJECT_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/union.jpg');
define('LIVE_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/live.jpg');
define('CONTEST_TITLE_IMG', get_template_directory_uri() . '/images/sidebar/contest.jpg');

class Util {
  public $wpdb;
  public $post;
  public $contestId = [];

  public function __construct($wpdb, $post) {
    $this->wpdb = $wpdb;
    $this->post = $post;
  }

  /**
   * IE判定
   */
  public function is_IE() {
    $ua = mb_strtolower( $_SERVER['HTTP_USER_AGENT'] );  //すべて小文字にしてユーザーエージェントを取得
    if ( strpos( $ua,'msie' ) !== false || strpos( $ua, 'trident' ) !== false ) {
      return true;
    }
    return false;
  }

  public function getSiteTitle() {
    if (is_front_page()) {
      return SITE_TITLE;
    } else if (get_the_title()) {
      return SITE_TITLE . '｜' . get_the_title();
    }
    return SITE_TITLE;
  }

  /**
   * アンケートデータを取得する
   */
  public function getContestDatas($type) {
    $wpdb = $this->wpdb;

    $poll_id = $this->getContestId($type);
    // SQL文
    $query = "SELECT * FROM $wpdb->pollsa where polla_qid in (" . implode(",", $poll_id) . ")";
    // 結果を連想配列で取得
    $results = $wpdb->get_results($wpdb->prepare($query, $poll_id), "ARRAY_A");
    foreach ($results as $key => $result) {
      if (isset($result['polla_datas']) && $datas = json_decode($result['polla_datas'], true)) {
        $results[$key]['polla_datas'] = $datas;
      }
    }

    return $results;
  }
  /**
   * getContestDatasのラッパー
   * 投票数多い順でソートする
   */
  public function getContestDatasSort($type) {
    $datas = $this->getContestDatas($type);
    array_multisort(array_map(function($data) {
      return $data['polla_votes'];
    }, $datas), SORT_DESC, $datas);

    return $datas;
  }
  public function getContestId($type) {
    if (isset($this->contestId[$type])) {
      return $this->contestId[$type];
    } else {
      $wpdb = $this->wpdb;
      // $contestData = $wpdb->get_results($wpdb->prepare( "SELECT * FROM $wpdb->pollsa WHERE polla_qid in (select polla_qid from $wpdb->pollsa a inner join $wpdb->pollsq q on q.pollq_id = a.pollq_id where polla_type = %s order by pollq_timestamp desc limit 1) order by polla_aid desc limit 1;", $type));
      $contestData = $wpdb->get_results($wpdb->prepare("SELEcT * from $wpdb->pollsa a inner join $wpdb->pollsq q on q.pollq_id = a.polla_qid where polla_type = %s and pollq_active = 1;", $type));
      if (isset($contestData[0]->polla_qid)) {
        $result = [];
        foreach ($contestData as $d) {
          $result[] = $d->polla_qid;
        }
        $this->contestId[$type] = $result;
        return $result;
      }
      $this->contestId[$type] = false;
      return false;
    }
  }

  /**
   * アンケートデータのJSONデータ部分を取得する
   */
  public function getContestViewDatas($type) {
    $senryu = $this->getContestDatas($type);
    return array_map(function($s) {
      return $s['polla_datas'];
    }, $senryu);
  }

  public function isContestOpen($type) {
    $wpdb = $this->wpdb;
    $poll_id = $this->getContestId($type);

    if (!$poll_id) return false;

    $query = "SELECT * FROM $wpdb->pollsq WHERE pollq_id = %s";
    $contestData = $wpdb->get_results($wpdb->prepare($query, $poll_id));

    if (!$contestData[0]) return false;

    return $contestData[0]->pollq_active;
  }

  public function getNews() {
    $posts = get_posts([
      'posts_per_page' => 20,
      'offset' => 0,
      'orderby' => 'date',
      'order' => 'desc',
      'post_type' => 'news',
    ]);
    return $posts;
  }

  public function getLiveDetail() {
    if (!$this->liveDetail) {
      $wpdb = $this->wpdb;
      $query = 'SELECT * FROM ' . $wpdb->live_details;

      $datas = $wpdb->get_results($wpdb->prepare($query));
      if (!isset($datas[0])) return false;

      $result = [];
      foreach ($datas as $data) {
        if ($data->data) $data->data = json_decode($data->data, true);
        $result[$data->post_name] = $data;
      }

      $this->liveDetail = $result;
    }
    return $this->liveDetail;
  }

  public function getProjectDetail() {
    if (!$this->projectDetail) {
      $wpdb = $this->wpdb;
      $query = 'SELECT * FROM ' . $wpdb->projects;

      $datas = $wpdb->get_results($wpdb->prepare($query));
      if (!isset($datas[0])) return false;

      $result = [];
      foreach ($datas as $data) {
        if ($data->sns_json) {
          $data->sns_json = json_decode($data->sns_json, true);
        } else {
          $data->sns_json = [];
        }
        if ($data->data) $data->data = json_decode($data->data, true);
        $result[$data->post_name] = $data;
      }

      $this->projectDetail = $result;
    }
    return $this->projectDetail;
  }

  /**
   * 検索して最後にヒットした文字列を置換する
   */
  public function replaceLastMatch($str, $search, $replace) {
    $pattern = sprintf("~%s(?!.*%1$s)~", $search);
    return preg_replace($pattern, $replace, $str, 1);
  }

  public function checkAfterDate($date) {
    return date('YmdHis') >= date('YmdHis', strtotime($date));
  }

  public function getProjectImages($name) {
    $dir = 'wp-content/themes/peacedesigner/images/project/' . $name . '/';
    $images = [];
    if (is_dir($dir) && $dh = opendir($dir)) {
      while (($file = readdir($dh)) !== false) {
        if (filetype($dir . $file) == 'file' && $file != 'top.jpg') {
          $images[] = $file;
        }
      }
      closedir($dh);
    }
    return $images;
  }

  public static function getYoubi($date) {
    $youbi = ['日', '月', '火', '水', '木', '金', '土'];
    $date = date('w', strtotime($date));
    if (isset($youbi[$date])) {
      return $youbi[$date];
    }
    return false;
  }

  public function viewProjectTopImage($postName) {
    $path = '/images/project/' . $postName . '/top.jpg';
    return $this->viewImage($path);
  }
  public function viewLiveTopImage($postName) {
    $path = '/images/live/' . $postName . '/top.jpg';
    return $this->viewImage($path);
  }
  /**
   * 画像の存在確認を行い、存在すればその画像パス、存在しなければデフォルト画像のパスを返す
   */
  public function viewImage($path) {
    if (file_exists(get_template_directory() . $path)) {
      return get_template_directory_uri() . $path;
    } else {
      return NO_IMAGE_URL;
    }
  }

  public function getTimetableHeight($postName) {
    $liveDetail = $this->getLiveDetail();
    if (!isset($liveDetail[$postName])) return false;
    $data = $liveDetail[$postName];
    // 5分で1目盛り、1目盛り辺り2rem
    return (strtotime($data->end_date) - strtotime($data->start_date)) / 60 / 5 * 2.5;
  }
}
$util = new Util($wpdb, $post);

add_theme_support('post-thumbnails');
