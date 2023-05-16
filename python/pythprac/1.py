class Employee():
    def info(self):
        print(f'{self.name} lives at {self.city} and is payed {self.pay}')

employee1=Employee()
employee2=Employee()
employee3=Employee()

employee1.name="Ravi Taneja"
employee1.city="Gaya"
employee1.pay=50000

employee2.name="Tim Cook"
employee2.city="Canada"
employee2.pay=12000

print(Employee)

employee1.info()
employee2.info()
