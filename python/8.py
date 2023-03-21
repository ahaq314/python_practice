a='HarXry23@!HXarry'
print(a.upper())
print(a.lower())
print(a)
print(a.rstrip("2@!"))
print(a.replace('Harry','John'))
print(a.split('X'))
#Instead of X for splitting we can have space or any other character
print(a.capitalize())
print(a.endswith("3@",2,9))
b='My name is Md Yusuful Haque233'
print(b.find("Md"))     #Counting of string starts from 0 and not 1
#returns -1 if no occurence in the sentence
print(b.find("hgf"))
#Index & find is almost same only differnce is that it if part of string not found the Index returns "ValueError" whereas find returns "-1"
print(b.index("Md")) 
#print(b.index("hgf")) 
c="rohan is good boy56"
print(c.isalnum())
print(c.isalpha())



print(c.islower())

g='My Name Is Khan'
print(g.istitle())

h="my name is Yusuf"
print(h.capitalize())












