#Display the given pyramid with step number accepted from user.

def pyr(n):
    for i in range(1,n+1):
        for j in range(1,i+1):
            print(i*j,end=" ")
        print("\n")
n=int(input("Enter the no:"))
pyr(n)