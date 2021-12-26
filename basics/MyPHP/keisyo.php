<?php
//クラスを継承
class Box{
    public $myItem;

    public function __construct(){
        $this->myItem = "新しいアイテム";
    }

    public function open(){
        echo "宝箱を開いた.".$this->myItem."を手に入れた."."\n";
    }
}



class JewelryBox extends Box{
    public function look(){
        echo "宝箱はキラキラ輝いている。"."\n";

    }

}


$box = new Box();
$box -> open();
echo "\n";
$JewelryBox = new JewelryBox();
$JewelryBox -> look();
$JewelryBox -> open();
