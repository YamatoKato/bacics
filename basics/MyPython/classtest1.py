class MyClass :

    user_name = ""  # インスタン変数の宣言
    age = ""     # インスタンス変数の宣言
    def say ( self ) :
        print ( "名前：{0},年齢：{1}" . format ( self.user_name , self.age ) ) #formatの中身はuser1.user_nameでもいいがuser2も表示したいから、インスタント変数が定義されたself(引数)を使ってる

# １つめのインスタンス
user1 = MyClass ( )    #インスタンス化 #クラスのメソッドを呼び出す場合は、クラスをインスタンス化したものを格納した変数から、クラスのメソッドを呼び出します。
user1 . user_name = " 山田 "  #アトリビュート(class内の変数)　山田を代入
user1.age = 20

# 2つめのインスタンス
user2 = MyClass ( )
user2.user_name = " 鈴木 " #アトリビュート
user2 . age = 40
user1 . say ( ) #ここではuser1が"say"というメソッドの中の処理を実行させてる
user2 . say ( ) #以上同文