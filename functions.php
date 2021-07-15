<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';

define('GOODS_SHOP_URL', 'https://peace-designer.stores.jp/'); // グッズショップ外部サイト
define('QUESTIONNAIRE_URL', '#'); // アンケートURL

// URL群
define('HOME_URL', esc_url(home_url('/')));
define('SENRYU_RESULT_LIST_URL', esc_url(home_url('/senryu-result-list/')));

define('UNION_URL', 'https://www.yahoo.co.jp');
define('UNION_ACTIVITY_FREQUENCY', '月2回');
define('UNION_ACTIVITY_PLACE', '東京都世田谷区');
define('UNION_MAIL', 'mail@mail.com');

class Util {
  public $wpdb;
  public $contestId = [];

  public function __construct($wpdb) {
    $this->wpdb = $wpdb;
  }

  /**
   * アンケートデータを取得する
   */
  public function getContestDatas($type) {
    $wpdb = $this->wpdb;

    $poll_id = $this->getContestId($type);
    // SQL文
    $query = "SELECT * FROM $wpdb->pollsa where polla_qid = %s";
    // 結果を連想配列で取得
    $results = $wpdb->get_results($wpdb->prepare($query, $poll_id), "ARRAY_A");
    foreach ($results as $key => $result) {
      if (isset($result['polla_datas']) && $datas = json_decode($result['polla_datas'], true)) {
        $results[$key]['polla_datas'] = $datas;
      }
    }

    return $results;
  }
  public function getContestId($type) {
    if (isset($this->contestId[$type])) {
      return $this->contestId[$type];
    } else {
      $wpdb = $this->wpdb;
      $contestData = $wpdb->get_results($wpdb->prepare( "SELECT * FROM $wpdb->pollsa WHERE polla_type = %s order by polla_aid desc limit 1;", $type));
      if (isset($contestData[0]->polla_qid)) {
        $result = $contestData[0]->polla_qid;
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
}
$util = new Util($wpdb);
