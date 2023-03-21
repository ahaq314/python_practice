age=int(input("Enter age:"))
if (age>18 and age<60):
    print("Eligible to Drive")
elif(age<18 and age>15):
    print("Learning liscense")
else:
    exit
