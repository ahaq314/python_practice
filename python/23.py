l=[23,13,42,16,89,63,13,68,13]
print(l.count(13))   #counts number of occurences of a particular data.


#MODIFYING LIST
l[0]=12    #replaces 23 at index 0 with 12 at index 0
print(l)

#ADDING TO LIST
l.append(56)         #adds 56 to the list at last
print(l)

# l.insert(index,data to be entered)   INSERT METHOD
l.insert(2,765)
print(l)

#DELETING LIST ITEMS
del l[0]
print(l)




print(l.index(56))

