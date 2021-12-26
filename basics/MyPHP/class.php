<?php
class Student{

    public $name; //プロパティー(class内変数)

    public function __construct($name){
        $this->name = $name;
    }




    function avg ($math,$english){
        echo (($math + $english)/2)."\n";
    }
}

$a001 = new Student("sato");
//$a001->avg(80,70);
echo $a001->name."\n";

$a002 = new Student("tanaka");
echo $a002->name."\n";