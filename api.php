<?php

// 日本のタイムゾーンに設定（作成１）
date_default_timezone_set('Asia/Tokyo');

// 返却するデータを作成（PHPの連想配列）
$data = [
    'message' => 'Ajax通信成功！',
    // 現在時刻を(〇時〇分〇秒)の形式で取得（作成２）し、連結
    'time' => '現在時刻：' . date('G時i分s秒')
];

// 連想配列をJSON形式の文字列に変換して出力（作成３）
echo json_encode($data);
exit;
