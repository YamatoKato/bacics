<?php
class Student{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    function cal_avg($data){
        $sum = 0;
        for($i = 0;$i < count($data);$i++){
            $sum = $data[$i] + $sum;
        }
        $avg =  $sum/count($data);
        return $avg;

    }

    function judge($avg){
        $result;
        if (60 <= $avg){
            $result = "passed";

        } else {
            $result = "failed";
        }
        return $result;

    }

}
$a001 = new Student("kato");
$data = [70,60,50,90,45];
$avg = $a001->cal_avg($data);
$result = $a001->judge($avg);

echo count($data)."\n";
echo $a001->name."\n";
echo $avg."\n";
echo $result."\n";