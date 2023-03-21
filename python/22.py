#JUMP INDEX

marks=[23,43,25,54,21,65,34,24,78,97,46,74,27,18]
print(marks)

print(marks[1:3])
#last wla index print nhi hoga

print(marks[0:14:2])
print(marks[:])    #automatically 0 and len of marks adjusted
print(marks[:7])   #automatically 0 lga lega


#List Comprehension
lst=[i for i in range(4) if i%2==0]
print(lst)



