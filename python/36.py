#READ BUILT-IN EXCEPTION

try:
    n=int(input("Enter Numerator:"))
    d=int(input("Enter Denominator:"))
except Exception as e:           #Note:If we don't know the type of error then we type "Exception" 
    print("Input Error")          #or type Nothing or specific error name and then command to be executed
else:
    print("Result is",n/d)
finally:
    print("Under this command will always execute wheter exception(error) occured or not")


#Single except block is not good to handle all errors

#FINALLY shows a difference when used in a function defining bcz there if code runs succesfully
#tbto finally mein rhe ya na rhe run krjayega hmesha baaqi code pr jb except mein chala gya 
#tb agr finally ke andr code nhi hoga tb code run nhi hoga aage ka  



# except:
# except Exception as e: 
# except ValueError:







    