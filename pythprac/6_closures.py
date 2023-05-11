def main_function():
   msg='Hello Everyone'
   def sub_function():
       print('Assalam')
       print(msg)
       print('Bye')
   sub_function()
       

main_function()


def main_function(msg):
   def sub_function():
       print('Assalam')
       print(msg)
       print('Bye')
   sub_function()
       
print("            ")

main_function("How are you going")

# NOTE


# Sub Functions can use all the variable and parameter defined for Main(Parent) Function

# At last it is necessary to call or return Sub function under(in) Main Function