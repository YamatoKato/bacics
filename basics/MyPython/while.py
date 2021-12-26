i=0
while i<100:
    i+=1
    print(i)
print(i)


j=0
while j<100:
    j+=1
    if j==60:
        break
    print(j)

k=0
for k in range(100):
    if k%3==0:     #3の倍数ならスキップ
        continue  
    print(k)




