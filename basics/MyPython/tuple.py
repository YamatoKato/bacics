t=(1,2,3)

print(t)
print(type(t))    #タプル  リストと違い要素の変更追加編集できない

one,two,three=t   #このように変数を使い要素を取り出す
print(one,two,three)

#----------------------------------------------------------------------
#t1=(1,2)とt2=(3,4)があったとき　t1=t1+t2   の結果はどうなる？  ...タプルは追加とかできないよ...

t1=(1,2)
t2=(3,4)

t1+=t2
print(t1)
#あれ追加してね？
#実は以下コードと同義である(新しいタプルを作成してるだけ)
t=(1,2,3,4)
print(t)