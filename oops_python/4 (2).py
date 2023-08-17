# Immutable-Integer float complex boolean string tuples are immutable
# Mutable-List dictionary set are mutable
#NOTE=For Immutable(which cannot be changed later) 'is' and '==' are same thing whereas
#it is different in case of Mutable objects


# immutable data are stored at same memory and different variables storing them comes there .Hence == & is same thing
# viceversa for Mutable objects

#Note-String and integer and float and complex are differnet from each other 


a=5
b=5

print(a==b)
print(a is b)

a=5
b='5'

print(a==b)
print(a is b)

c=(2,4,3,6,5)                      #TUPLE
d=(2,4,3,6,5)
print(c==d)
print(c is d)

e=[2,4,3,6,5]                      #LIST
f=[2,4,3,6,5]
print(e==f)
print(e is f)


# 'is'  checks exact location of object in memory


