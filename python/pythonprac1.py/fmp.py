n=[1,2,8,4,5]

print(list(map(lambda n:n**3,n)))   #Map and filter are higher order function bcz it 
                                    #takes argument as function 



def num(a):   
    return a>2
num=lambda a:a>2
print(list(filter(num,n)))

#Reduce used to perform operation on list elements combinedly

from functools import reduce

print(reduce(lambda x,y:x*y,n))

print(reduce(lambda x,y:x if x>y else y,n))