import os
folders=os.listdir('content')
#print(folders)

for folder in folders:
    print(folder)
    print(os.listdir(f'content/{folder}')) 

print(os.getcwd())
# os.chdir('/Users')