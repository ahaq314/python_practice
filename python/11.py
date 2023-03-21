a=int(input("Enter a number "))
match a:
    case a if a%2==0:
        print("Even")
    case a if a!=0:
        print("Odd")



