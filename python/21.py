#index starts from 0 but length is from 1
lst=[12,32,11,31,45,34,23]
print(len(lst))
print(lst[2])    #data at index 2

#Negative indexing
#print(lst[-3]) means print(lst[len(lst)-3])

print(lst[-3])
#print(lst[len(lst)-3])
print(len(lst))

if 32 in lst:
    print('Yes')
else:
    print('No')


if 'arry' in 'Harry':
    print("Yes")
else:
    print("No")