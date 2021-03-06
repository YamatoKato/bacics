<?php
//連想配列(keyとvalueを入れ替えるリスト化できる)
$item = array(
    "ロングソード" => 2,
    "鉄の盾" => 1
);
$item["クリスタル"] = 6;
print_r($item);
$item["クリスタル"] = 3;
print_r($item);
unset($item["鉄の盾"]);
print_r($item);

echo "--------------------------------"."\n";
//配列のソート
$item2 = array("イージスシールド", "ウィンドスピア", "アースブレイカー");
print_r($item2);
sort($item2); //配列のvalueを小さい順（1,2,3,,や あ,い,う,, という順）に並び替えます。
 //配列のvalueを大きい順（3,2,1 や う,い,あ という順）に並び替えます



//連想配列のソート
// sort(配列);
// 配列のvalueを小さい順（1,2,3,,や あ,い,う,, という順）に並び替えます。
// 連想配列に対して実行するとキーが失われるので注意。

// asort(配列);
// 連想配列のvalueを小さい順（1,2,3,,や あ,い,う,, という順）に並び替えます。

// arsort(配列);
// 連想配列のvalueを大きい順（3,2,1 や う,い,あ という順）に並び替えます。

// ksort(配列);
// 連想配列のkeyを小さい順（1,2,3,,や あ,い,う,, という順）に並び替えます。

// krsort(配列);
// 連想配列のkeyを大きい順（3,2,1 や う,い,あ という順）に並び替えます。

echo "--------------------------------"."\n";



//foreachで配列の値(value)を取り出す。
$array = array("勇者" => 41,
    "魔法使い" => 15,
    "遊び人" => 23);
foreach($array as $value){
    echo $value."\n";
}
//keyとvalueまとめて取得
foreach($array as $key => $value){
    echo $key.$value."\n";
}