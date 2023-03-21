tup=(1,2,3,4,5,6,)
tuk=[1,2,3]
tum=(1)    
tub=(1,)     #comma is must for it to be classed as tuple.
print(type(tub))
print(type(tuk))
print(type(tum))
print(type(tup))
print(tup)

# #list can be changed but tuple cannot be changed.

#tup[0]=23    #tuple value ,length etc cannot be changed
tuk[0]=23
print(tup)
print(tuk)
#tuples can also have other data types also
mut=(9,16,17,"Rahul",True)
print(mut[3])
# #Slicing can be done
# # [:9] implies initial 0
# # [3:]  implies endwith length of tuple


if 16 in mut:
  print("16 is present in mut")

#   #Slicing can be done in tuple and new tuple is formed but original tuple doesnot get changed.

#   #tuple,strings are immutable.
#   #lists are mutable.
tun=tup[0:4]   #Slicing
print(tun)


  
