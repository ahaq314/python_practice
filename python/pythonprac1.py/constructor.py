class Person:
    def __init__(self,n,o):    #if only self(no argument) used then DEFAULT constructor else Parametrized constructor
        # print(f"Hello {self.name}")
        self.name=n
        self.occ=o
        print(f"Hello {self.name}")

    def info(self):
        print(f"{self.name} is {self.occ}")   
    
a= Person("Harry","Devloper") 
# a.__init__()     
a.info()
        

# class Person:
#     def __init__(self, n, o):
#         self.name = n
#         self.occ = o

#     def info(self):
#         print(f"{self.name} is {self.occ}")

# a = Person("Harry", "Developer")
# a.info()
