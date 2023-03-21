                        #TAKING INPUT FROM USER 
name=int(input("What is your age "))
print(name)

variable=input("message to be asked")

#Always input function returns value as a string.So Typecasting is required either at taking input or while print.

# a=input('Enter age:')
# print('The age is:',a)

# #GIVES ERROR BCZ INPUT TAKES IT AS STRING IF NOT MENTIONED
# a=input('Enter Name/First Number:')
# b=input('Enter Name/Second Number:')
# print('The sum is',a+b)


#CORRECT WAY OF TYPECASTING
a=int(input('Enter Name/First Number:'))
b=int(input('Enter Name/Second Number:'))
print('The sum is:',a+b)

