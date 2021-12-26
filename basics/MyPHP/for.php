<?php
for($i = 0; $i <= 4; $i++){
    if($i==3){
        break;
    }
    echo $i."\n";
}

for($i = 0; $i <= 4; $i++){
    if($i==3){
        continue;
    }
    echo $i."\n";
}

echo ("------------------")."\n";
$arr = [2,4,6,8,10];

for($i = 0; $i<=4;$i++){
    $sum += $arr[$i];
}
echo $sum."\n";