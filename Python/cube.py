def test(n):
    count=0
    while n>=3:
        n=n**(1./3.)
        count+=1
    return "Not a posiitve no" if n<0 else count
n=int(input("Enter the number:"))
print((test(n)))