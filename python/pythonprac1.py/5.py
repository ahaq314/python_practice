class Person:             
    name='Harry'                      #User defined Object
    occupation='Engineer'
    networth=10                     #3 property 1 method
    def info(self):                 #METHOD     
        print(f"{self.name} is {self.occupation}" )
    

a=Person()              #Creating first object of class
b=Person()

a.name='Shubham'             #self means wo object jiske liye method call hoga i.e
                             #called object will replace self 
a.occupation='Doctor'
a.info()

b.name='Rohan'
b.occupation='Laweyer'
b.info()



