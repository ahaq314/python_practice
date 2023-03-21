#Dictionary
#basically a mapping

dic={'fruit':'apple','vegetable':'potato','animal':'cow'}
print(dic['fruit'])
print(dic.get('fruit'))

#Line 5 and 6 are same only difference is that in first if value is not found it throws error and is enclosed in square bracket
#Whereas in 'get' we get NONE if not found and also round bracket is used.

#dictionaries are ordered
dac={
344:"Harry",
376:"Yusuf",
786:"Mohan"
}

print(dac[376])
print(dac.keys())    #prints  initial word(keys)
print(dac.items())    #prints  initial word(keys)
print(dac.values())   #prints meanings


#Syntax of dictionary
for key in dic.keys():
    print(f"The value corresponding to the key {key} is {dic[key]}")

for key in dac.keys():
    print(f"The value corresponding to the key {key} is {dac[key]}")

print(dic.items())


print(dic.items())
for key, value in dic.items():
  print(f"The value corresponding to the key {key} is {value}") 
  