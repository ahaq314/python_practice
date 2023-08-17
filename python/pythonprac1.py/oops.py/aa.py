class Person:
    # fname=''
    # lname=''
    def __init__(self,fn='Rahul',ln='Mohan'):
        self.fname=fn
        self.lname=ln
        
    def getFullName(self):
        fullname=(f'{self.fname} {self.lname}')
        return fullname
    
# a=Person()
# b=Person("Shyam","Sundar")

# print(a.getFullName())
# print(b.getFullName())


class subclass(Person):
    super __init__(self)





