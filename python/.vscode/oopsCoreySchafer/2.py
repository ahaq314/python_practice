class Employee:
    #here init method takes 3 arguments
    def __init__(self,fname,lname,pay): #fname lname pay are arguments which contains specific value
        self.first=fname                #first last & payment are attributes 
        self.last=lname                
        self.payment =pay
        self.email=fname+'.'+lname+'@company.com'

# init method assigns the values of the arguments to the corresponding attributes of the object. 
#attributes store the first name last name and pay of employee.
#self & other arguments are replaced by specific unique date(unique arguments) given while creating object and it gets stored in attributes

emp_1=Employee('Corey','Schafer', '$50140' )    #emp_1 is an object of class Employee

print(f'{emp_1.first} {emp_1.last} has a pay of {emp_1.payment}')  

#While calling always use objname.attribute
# The init() function is called when an Employee object is created.