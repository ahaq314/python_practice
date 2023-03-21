tuple1 = (0, 1, 2, 3, 2, 31,3,4, 1, 3, 2, 3)
res = tuple1.count(3)
print(res)
res = tuple1.index(3)
print(res)
res = tuple1.index(3, 4, 8)
#It means index of 3 in slicing of 4 to 8 (index of 4 to 7)
print(res)
#res = len(tuple1)
res=len(tuple1)
print(res)

#Occurence of 3 in particular part of tuple
#firstly slice that part and then find occeurence


