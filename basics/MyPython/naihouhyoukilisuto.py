#内包表記リストについて(python特有)

l=[i for i in range(6)]
print(l)


                   #早い

#処理の速さが違う！？

l_v1=[]
for i in range(6):
    l_v1.append(i)
print(l_v1)        #遅い

#こんなことも

ll=[i for i in range(5) if i%2==0]
print(ll)

