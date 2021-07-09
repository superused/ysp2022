<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';

class Util {
  public $wpdb;
  public $senryuId;

  public function __construct($wpdb) {
    $this->wpdb = $wpdb;
  }

  /**
   * アンケートデータを取得する
   */
  public function getSenryuDatas() {
    $wpdb = $this->wpdb;

    $poll_id = $this->getSenryuId();
    // SQL文
    $query = "SELECT * FROM wp_pollsa where polla_qid = %s";
    // 結果を連想配列で取得
    $results = $wpdb->get_results($wpdb->prepare($query, $poll_id), "ARRAY_A");
    foreach ($results as $key => $result) {
      if (isset($result['polla_datas']) && $datas = json_decode($result['polla_datas'], true)) {
        $results[$key]['polla_datas'] = $datas;
      }
    }

    return $results;
  }
  public function getSenryuId() {
    if (isset($this->senryuId)) {
      return $this->senryuId;
    } else {
      $wpdb = $this->wpdb;
      $senryuData = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->pollsa WHERE polla_type = 'senryu' order by polla_aid desc limit 1;"));
      if (isset($senryuData[0]->polla_qid)) {
        $result = $senryuData[0]->polla_qid;
        $this->senryuId = $result;
        return $result;
      }
      $this->senryuId = false;
      return false;
    }
  }

  /**
   * アンケートデータのJSONデータ部分を取得する
   */
  public function getSenryuViewDatas() {
    $senryu = $this->getSenryuDatas();
    return array_map(function($s) {
      return $s['polla_datas'];
    }, $senryu);
  }

  public function isSenryuOpen() {
    $wpdb = $this->wpdb;
    $poll_id = $this->getSenryuId();

    if (!$poll_id) return false;

    $query = "SELECT * FROM $wpdb->pollsq WHERE pollq_id = %s";
    $senryuData = $wpdb->get_results($wpdb->prepare($query, $poll_id));

    if (!$senryuData[0]) return false;

    return $senryuData[0]->pollq_active;
  }
}
$util = new Util($wpdb);
