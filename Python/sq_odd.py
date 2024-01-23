def sq(n):
    s=0;odd=1
    for i in range(0,n):
        print(s)
        s=s+odd
        odd=odd+2
n=int(input("Enter the number:"))
print(sq(n))