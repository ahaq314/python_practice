class Person:
    def __init__(self, n, a,c):
        self.name = n
        self.age = a
        self.country=c
        print(f'{n} plays Under {self.age} cricket')

    def origin(self):
        print(f'{self.name} lives in {self.country}')
  
p1 = Person("John", 36,'Canada')

#p1.origin()

