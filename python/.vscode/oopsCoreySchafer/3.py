class Cars:
    def __init__(self,brand,model,topspeed,color,price):    #METHOD
        self.Brand=brand            
        self.Model=model            #ATTRIBUTE
        self.TopSpeed=topspeed
        self.Color=color
        self.Price=price

    def description(self):      #METHOD
        return (f'{self.Brand} has {self.Model} with {self.TopSpeed} and {self.Color} coloured costing at {self.Price}')
   
car_1=Cars('Ferrari','Spyder','300km/hr','Red','$5 Million')

print(car_1.description)

print(car_1.description())   #Method
print(car_1.Brand)           #Attribute

car_1.description()        #if self is given in description
print(Cars.description(car_1))    #if self is not given in description


#for accesing other methods in a class use ObjName.FunctionName 
# print(f'{car_1.Brand} has a model named {car_1.Model} with {car_1.TopSpeed} and {car_1.Color} costing at {car_1.Price}')

