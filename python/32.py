s1={1,35,5,73,15,4}
s2={1,6,8,42,53}
print(s1.union (s2))
print(s1)
print(s2)
#In taking union original set remain unchanged 

s1.update(s2)   #s1 is updated with new set
print(s1,s2)

city1={"London","Kabul","Gaya","Delhi"}
city2={"Gaya","London","Patna","Dhaka"}
print(city1.union(city2))
print(city1.intersection(city2))

