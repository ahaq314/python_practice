country={'India','America','Australia','Bangladesh'}
print(type(country))

harry={}  #Don't use thise for empty set b/c it is dictionary
print(type(harry))   

sam=()    #TUPLE
print(type(sam))   

ram=set()   #Use this for empty set
print(type(ram))

#like tuple cannot be changed
#cannot duplicate have same value twice
#while printing set we donot get any particular order hene index has no meaning.

#no repeated element in set 
#cannot be modified
#Does't mantian order
 
for value in country:
    print (value)