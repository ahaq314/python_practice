# The __str__() function controls what should be returned when the class object is represented as a string.

# If the __str__() function is not set, the string representation of the object is returned:

#__str__ always return something.

#only __init__ returns(execute) nothing if print(p1) command  used but if __str__ used

#Try to keep only all property(parameter) and not method under __init__ command 

class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

p1 = Person("John", 36)

print(p1)




class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

  def __str__(self):
    return f"{self.name}({self.age})"

p1 = Person("John", 36)

print(p1)

#OBJECT METHOD
#Objects can also contain methods. Methods in objects are functions that belong to the object.

# The self Parameter
# The self parameter is a reference to the current instance of the class, and is used to access variables that belongs to the class.

# It does not have to be named self , you can call it whatever you like, but it has to be the first parameter of any function in the class:

class Person:
  def __init__(mysillyobject, name, age):
    mysillyobject.name = name
    mysillyobject.age = age

  def myfunc(abc):
    print("Hello my name is " + abc.name+" and aged "+abc.age)

p1 = Person("John", "36")
p1.myfunc()


#MODIFY OBJECT PROPERTY

p1.age="12"
p1.myfunc()


# DELETE OBJECT PROPERTY
del p1.age
p1.myfunc()


#DELETE OBJECT
del p1
p1.myfunc()


# The pass Statement
# class definitions cannot be empty, but if you for some reason have a class definition with no content, put in the pass statement to avoid getting an error.

class Person:
  pass