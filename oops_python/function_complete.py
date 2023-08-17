# def average(num1,num2):
#     avg=(num1+num2)/2
#     print("The average of",num1,"and",num2,'is',avg)

# def name(fname,mname,lname):
#     namee="My name is "+fname+mname+lname
#     print(namee)

    

# average(2,4)
# name("Md ","Yusuful ","Haque")

#ARBITRARY ARGUMENT
def name(*names):
    print("Name is",names[1])

name("Rahul","Yusuf","Shyam","Firon","Azam")

#KEYWORD ARGUMENT

def country(country1,country2,country3):
    print("I live in ",country2,"but my friend lives in ",country1)

country(country3="India",country1="Brazil",country2="Mexico")

#ARB KEYWORD ARGUMENT **kwargs
def pmname(**pm):
    print("The first prime minister name is ",pm['fpm'])
pmname(fpm="Nehru",lpn="Modi")    

def foods(food):
    for x in food:
        print(x)
   
fruit=["Apple","Mango","Cherry","Papaya"]
foods(fruit)