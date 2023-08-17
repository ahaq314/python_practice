class Phone:
    # model="s11"
    # brand="Nokia"
    def Mobile(self,model,brand):
        self.model=model
        self.brand=brand
        print(f'{self.model} belongs to {self.brand} brand.')

m1=Phone()
m2=Phone()

m1.model="iPhone14"
m1.brand='Apple'


m2.model="Pixel 7A"
m2.brand='Google'

m2.Mobile()
m1.Mobile()





