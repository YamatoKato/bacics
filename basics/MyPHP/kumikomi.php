<?php
// 組み込みクラスを使ってみよう
$now = new DateTime();
$now->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo $now->format('Y-m-d H:i:s')."\n";

$now->modify('+100 days');
echo "変更後の時刻は、".$now->format('Y-m-d H:i:s')."です。";