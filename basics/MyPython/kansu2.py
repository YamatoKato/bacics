def add(num01,num02): #引数2つ使ってみる
    print(num01+num02)

add(6,2)   #引数num1に6、num2に2を渡す


def addd(num3,num4):
    return(num3+num4) #関数の結果をreturnで返すreturnより下の処理はなし
                      #呼び出し元に値を戻す(下のprint文が呼び出し元)

print(addd(10,3))


def adddd(num5,num6):
    return(num5+num6)

adddd_result=adddd(9,9)  #returnで返して変数で表示させる　adddd_resultという変数にadddd(関数)を代入
print(adddd_result) 

