class Student:
    def info(self):
        print(f'{self.name} scored {self.marks}')

    def info1(self1):
        print(f'{self1.name} wears {self1.brand}')



s1=Student()
s2=Student()

s1.name='Yusuful'
s1.marks='67'
s1.brand='Reebok'


s2.name='Rahul'
s2.marks='54'
s2.brand='Nike'

print(Student)


s1.info()
s1.info1()

s2.info()
s2.info1()