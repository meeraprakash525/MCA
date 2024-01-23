def test(n):
    x=n[0]
    y=n[1]
    t=y**0.5
    if(x==t*t*t):
        return True
    else:
        return False
num=input("enter the nos:")
n=num.split(",")
n=list(map(int,n))
print(n)
print(test(n))