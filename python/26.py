
#Modiyfing Tuple
#Tuple cannot be modified(changed)


#In this method data to be added in the tuple is added without changing the original tuple
tup1=("Ram","Shyam","Mohan")
tup2=("Deep","Sam")
tup3=tup1+tup2
print(tup1)
print(tup2)
print(tup3)
print(tup1.count('Shyam'))    #counts number of occurences of shyam


#Original tuple is changed in this method
tup5=('India','Pakistan','USA','Sweden')
print(type(tup5))
lst=list(tup5)
print(type(lst))
lst.append('Canada')    #adds 'Canada' at last
#lst.insert(1,'Canada')  #adds 'Canada' at index 1
tup5=tuple(lst)
print(tup5)