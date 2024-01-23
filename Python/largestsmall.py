def test(n):
    small=0
    large=9
    while (n):
        dig=n%10
        large=min(dig,large)
        small=max(dig,small)
        n=n//10
    return large,small
n=int(input("Enter the number:"))
print(test(n))