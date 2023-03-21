#generally ELSE clause is used with IF statement
#but it can also be used with 'FOR' loop and 'WHILE' loops

# for i in range(6):
#     print(i)
#     if i==4:
#         break

# else:
#         print("Sorry")

#if else part is executed it means that for loop is sucessfully finished and not "BREAK"
#if break occurs it means that "ELSE" part will also not be executed
#BREAK lgne ke baad ekdm bahaar aa jayega

i=0
while i<6:
     print(i)
     i=i+1
     if i==5:
          break

else:
     print("Sorry")