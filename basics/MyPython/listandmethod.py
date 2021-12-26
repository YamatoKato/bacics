l=[]   #空のリストを作成

for i in range(6):
    l.append(i)   #lというリストに0~5までの数を追加する

print(l)

m=["小","中","大"]
m.insert(2,"高")  #index番号2番目に 高　というリストを追加
print(m)

l1=[1,2,3]
l2=[4,5,6]
l1.extend(l2)   #l1リストにl2リストを追加
print(l1)

#リストの要素を削除
ll=[1,2,3,4]
ll.remove(3) #リストの3が消える
print(ll)

lll=[1,10,2,3,10]
lll.remove(10)  #最初にヒットした10が消される
print(lll)