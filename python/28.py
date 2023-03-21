                                       #Fstring 

letter='My name is {} and I am from {}'
name='Rahul'
country='India'
print(letter.format(name,country))   #No problem if placed in correct order

letter='My name is {1} and I am from {0}'
name='Rahul'
country='India'
print(letter.format(country,name))    #if not in order then we place index of call(format) in variable where string is palced


#CONCEPT OF Fstring
print(f"'My name is {name} and I am from {country}'")

#Printing numbers upto two or three digits of decimal
txt = "For only {price:.2f} dollars!"
print(txt.format(price=49))

text = "Mercedes costs only {price:.3f} dollars"
print(text.format(price=45937.5923048))

#Using fstring
price = 3744.728374
text = (f"Mercedes costs only {price:.3f} dollars")     #colon dot 3f
print('My name is {name} and I am from {country}')
#OR
#Retaining f string as f string
print(f'My name is {{name}} and I am from {{country}}')   #if fstring is used then use double curly brackets


print(2*30)
print(type(2*30))

print(f'{2*30}')
print(type(f'{2*30}'))