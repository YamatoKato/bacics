<?php
//関数
function say_hello(){
    echo "Hello World"."\n";
}

say_hello();

//無名関数
$say_hello = function(){
    echo "Good Morning"."\n";
};   //ここにもセミコロンが必要
$say_hello();

//引数
function hello($greeting){
    echo $greeting."\n";
};

hello("Good Mor!!!");

//return
function cal($x,$y){
    return ($x / $y);
};
$result = cal(6,3);
echo $result."\n";