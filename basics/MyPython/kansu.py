#helloworldしか表示できない関数
def say_hello():   #関数を定義した　これも(空欄)という引数
    print("helloworld")
say_hello()   #定義した関数の中身を実行する文<=>say_helloという関数の引数(今回は空欄)に4行目のカッコ(今回は空欄)を渡し関数内の処理を実行
say_hello() 

#引数を用いて指定したものを表示する関数
def say_goodmorning(hikisu):  #➁ ➀から貰った文字列をsay_goodmorning(関数)の引数(hikisu)がここで受け取る
    print(hikisu)  #➂受け取った引数をprint関数で表示させる

say_goodmorning("goodmorningworld") #➀関数に文字列を渡す
say_goodmorning("aaasssaaa") #➀

#引数
def say_goodafternoon(insu):
    print(insu)
a=say_goodafternoon   #関数を変数に代入
a("goodafternoon")
