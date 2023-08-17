def greet():
    #print("Welcome to Python")
    return("Welcome to Python")

a=greet()
print(a)


def greet():
    print("Welcome to Python")
    #return("Welcome to Python")

a=greet()
del greet
a
greet()

# wel = welcome()     - is NOT a function copy, it is a function invocation
# wel = welcome        - creates a new reference to a function