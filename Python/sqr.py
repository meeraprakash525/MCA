def sq(n):
    s=0;p=0
    for i in range(0,n):
        s=s+p+i
        print(s)
        p=i
n=int(input("Enter the no:"))
print(sq(n))