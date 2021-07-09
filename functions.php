<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';

class Util {
  public $wpdb;

  public function __construct($wpdb) {
    $this->wpdb = $wpdb;
  }

  /**
   * アンケートデータを取得する
   */
  public function getSenryuDatas() {
    $wpdb = $this->wpdb;
    $senryuData = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->pollsa WHERE polla_type = 'senryu' order by polla_aid desc limit 1;"));
    $poll_id = $senryuData[0]->polla_qid;
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

  /**
   * アンケートデータのJSONデータ部分を取得する
   */
  public function getSenryuViewDatas() {
    $senryu = $this->getSenryuDatas();
    return array_map(function($s) {
      return $s['polla_datas'];
    }, $senryu);
  }
}
$util = new Util($wpdb);
