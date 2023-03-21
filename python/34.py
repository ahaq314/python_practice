# Dictionary used to map key value pair

ep1 = {122: 45, 123: 89, 567: 69, 670: 69}
ep2 = {222: 67, 566: 90}
ep3={}   #Empty dictionary

ep1.update({122:76})    #update dict ep1 value from 45 to 76 for key 122

# ep1.update(ep2)      >adds ep2 to ep1
# ep1.clear()          >clears ep1 (empty dictionary)
# ep1.pop(122)         >removes corresponding key value pair
# ep1.popitem()          >removes last key value pair
# del ep1                 >deletes complete dict
# del ep1[122]              >deletes corresponding key value pair
print(ep1) 