#Lecture 49                 File IO(Manipulating file)

# f=open('docc.txt','w')
# text=f.write ()
# print(text)
# f.close()

# r(read)    By default if this is not mentioned then read 
# w(write)   opens file for reading only and creates new file if it doesnot exist
# a(append)  
# x(create)
# t(text)
# b(for image pdf etc)


f=open('name','w')
f.write("Hello Yusuf")
f.close()                       #Must

with open('myfile.txt','a') as f:
    f.write('My name is Khan')

f=open('noice','w')
f.write("Hello SRK")
f.close()  