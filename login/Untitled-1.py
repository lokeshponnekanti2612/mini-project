def prime(a):
    flag=0
    for i in range(2,a):
        if(a%i==0):
            flag=1
            break
        else:
            flag=0
    return flag

x=prime(31)
if(x==0):
    print("prime")
else:
    print("not")