list1=[12,23,42,10,11,19,17,10]
print(type(list1))
print(list1[2])   #tells at index 2 which data is stored 
print(list1)
print(list1.index(10))   #tells at which index 10 is stored
list1.sort()
print(list1)
list1.sort(reverse=True)
print(list1)
list1.sort(reverse=False)
print(list1)
print(list1.index(10))