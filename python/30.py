def fam(n):
  if (n==0):
    return 0
  elif(n==1):
    return 1
  else:
    return fam(n-1)+fam(n-2)

print(fam(6))
  
