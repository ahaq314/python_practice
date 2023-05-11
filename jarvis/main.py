import os
print(os.getcwd())
from datetime import datetime
time=os.stat('niam.py')
print(time)         #gives stats about file

date_time=os.stat('niam.py').st_mtime
print(datetime.fromtimestamp(date_time))

for dirpath,dirnames, filenames in os.walk('/Users/hp/Desktop/jarvis/'):
    print('Current dirPath:',dirpath)
    print('Current dirName:',dirpath)
    print('Current Filenames:',dirpath)