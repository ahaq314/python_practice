l=[23,13,42,16,89,63,13,68,13]
print(l.count(13))   #counts number of occurences of a particular data.

l.append(56)         #adds 56 to the list at last
print(l)

print(l.index(56))

l[0]=12    #adding 12 at index 0 in list l
print(l)

# l.insert(index,data to be entered)   INSERT METHOD
l.insert(2,765)
print(l)