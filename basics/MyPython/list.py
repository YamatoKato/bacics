aka=["kato","yama","case"]


print(aka[0])  #リストakaの１個目を取り出した
print(aka[1])
print(aka[2])
print(aka)

naka=["ro-ba","jibu"],["okutan","revu"]     #リストの中にリスト
print(naka[0][0])
print(naka[0][1])
print(naka[1][0])
print(naka[1][1])


#for文と組み合わせて使う
nakanaka=["小","中","高","大"]
for i in range(len(nakanaka)):    #len()とは()の中に書いてあるリスト(今回はnakanaka)の長さを自動取得(index番号を取得)できる
    print(nakanaka[i])        #これまでのリストの取り出し方と同じ
 
   
#index番号を取得せずにリストの中身を全部出す
sin=["java","python","ruby"]
for i in enumerate(sin): #enumerateを使うとindex番号もリストの中身全部も表示
    print(i)