a="15"
b=12
c=12.23
print(int(a)+b)
print(b+c)
print(type(b+c))

a="15"   #string data type
b=12     #integer data type
c=12.54   #float data type
d="harry"  #string data type
#EXTERNAL TYPE CASTING
# print(a+b)      WRONG
print(int(a)+b)
# print(int(d)+c)
# print(a+c)
print(int(a)+c)
print(float(a)+c)
#IMPLICIT(SELF) TYPECASTING
print(b+c)
print(type(b+c))
