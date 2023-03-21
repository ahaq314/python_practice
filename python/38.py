#In last lesson if error in certain part we coded it in such a way that further code runs
#as usual and it specifies what error occured by user

#Here if executor does some error then we(coder) forcefully stops the further execution

n=int(input('Enter a number between 2 and 8:'))
if (n<2 or n>8):
    raise ValueError('Value should be b/w 2 and 8 ')
else:
    print('Succesful')


    #RAISING CUSTOM ERROR(study)
