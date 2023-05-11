# def cube(num):
#     return(num**3)
# cube(3)

# def cube(num):
#     return(num**3)
# print(cube(3))


cube=lambda a:a**3
print(cube(2))


def myfunc(n):
  return lambda a : a * n

mydoubler = myfunc(2)
mytripler = myfunc(3)

print(mydoubler(11))
print(mytripler(11))



def prod(num1):
  return lambda num2:num1*num2

prod1=prod(2)
print(prod1(7))