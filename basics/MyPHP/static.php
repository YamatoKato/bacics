<?php
// staticを理解しよう
class Item {
    public static $tax = 1.08; //共通して使いたいからstatic
     public $price;
     public $quantity;

     public function __construct($newPrice, $newQuantity){
         $this->price = $newPrice;
         $this->quantity = $newQuantity;
     }

    public static function getTotalAmount($price, $quantity) { //staticはオブジェクトなしで使用可能
        return round($price * $quantity * self::$tax); //コロン２つの後に変数名、メソッド名,selfはclass内
        //round関数は小数四捨五入
    }
}
$total = Item::getTotalAmount(120, 15);
echo "合計金額は" . $total . "円です。"."\n";