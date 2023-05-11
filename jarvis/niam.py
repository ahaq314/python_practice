import os
print(os.getcwd())                     #prints current working directory
os.chdir('/Users/hp/Desktop/')         #change dir(use '/' always)
print(os.getcwd())  

print(os.listdir())                    #By default working folder(else changed directory)
os.chdir('/Users/hp/Desktop/jarvis/')
print(os.getcwd())

#os.mkdir('intro')           #Makes single level folder (top level dir)
#os.makedirs('preface/introd')  #Tree level folder
#os.chdir('/Users/hp/Desktop/jarvis/preface/')
print(os.listdir())

#os.removedirs('preface/introd')
#print(os.listdir())
print(os.getcwd())
#os.rename('preface','content')

os.chdir('/Users/hp/Desktop/jarvis/intro')
print(os.getcwd())
#os.rename('intro','ryan')
os.chdir('/Users/hp/Desktop/jarvis/')
os.rename('main.py','niam.py')