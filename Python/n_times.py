def test(n):
    r=[]
    for i in range(n):
        r.append([n]*n)
    return r
n=int(input("Enter the no:"))
print(test(n))