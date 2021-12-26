<?php
$num1 = 123;
$num2 = 1.23;
$bool1 = ($num1>$num2);
$bool2 = ($num1<$num2);

echo gettype($num1)."\n";
echo gettype($num2)."\n"; //phpの仕様でdoubleと表示されてしまう
var_dump($num2); //型と変数の中身を表示


echo $bool1;//Trueではなく"1"が返される
echo $bool2;//Falseではなく何も返されない