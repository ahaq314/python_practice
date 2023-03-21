n=int(input("Enter a number "))
for i in range(12):
            print(n,"X",i+1,"=",n*(i+1))
            if (i==9):
             break
#Break statement tells loop ko chor kr nikal jao
#Continue statement mein ek iteration ko chor kr nikal jao

for i in range(12):
    if(i == 10):
        print("Skip the iteration")
        continue
    else:
         print("5 X", i, "=", 5 * i)
