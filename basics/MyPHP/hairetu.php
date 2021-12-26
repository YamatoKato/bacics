<?php
//arrayを使う方法
$name = array(3);
$name[0] = "sato";
$name[1] = "suzuki";
$name[2] ="takahashi";

echo ($name[0])."\n";
echo ($name[1])."\n";
echo ($name[2])."\n";

echo("---------------------------")."\n";
//[]を使う
$name2 = ["sato","tanaka","takahashi"];
echo ($name2[0])."\n";
echo ($name2[1])."\n";
echo ($name2[2])."\n";

echo("---------------------------")."\n";
//配列要素を変更
$name2[1] = "kato";
echo ($name2[1])."\n";

echo("---------------------------")."\n";
//2次元配列
$name3 = [["sato","suzuki"] , ["takahashi","tanaka"]];
echo ($name3[0][0])."\n";
echo ($name3[1][0])."\n";

echo("---------------------------")."\n";
//標準入力から値を取得しリストに格納する

$input = trim(fgets(STDIN));///fgets(STDIN) で標準入力で与えられたデータを1行取得する事が出来ます。
while ($input){
    $array[] = $input;
    $input = trim(fgets(STDIN));  
}
print_r($array);  //指定した配列、変数に関する情報を解りやすく出力する
