num=int(input("Enter number "))
match num:
    case 1:
        print("One")
    case 2:
        print("Two")    
    case 3:
        print("Three")
    case _:
        print("Above Three")