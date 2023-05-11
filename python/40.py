#Local and Global Variable

# x=5
# def hello():
#     x=12
#     y=23
#     print(f'Value of local variable is {x} ')
#     print('Bye Function')

# hello()
# print(f'The value of global variable is {x}')
#print(y)    #cant be printed 


#Local variable gets destroyed as soon as function exits i.e return something
#(cant be accesed outside function )
#Global variable can be changed outside function



a=46
b=43
def name():
    global a,b
    a=897
    b=887
    print(f'Value of a {a}')
    print(f'Value of a {b}')
    print('Hello World')

name()
print(a)
print(b)


#BUT HOW TO CHANGE IT INSIDE FUNCTION

