import os
#print(os.getcwd())
os.chdir('/Users/hp/Desktop/jarvis/content/introd/')
#print(os.getcwd())

#if(os.path.exists('data')):
#os.makedirs('data')


for i in range (2,101):
    #os.makedirs(f'data/Day{i}')           #Always use makedirs
    os.rename(f'data/Day{i}',f'data/Tutorial{i}')




