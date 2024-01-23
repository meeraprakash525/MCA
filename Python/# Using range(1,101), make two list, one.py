# Using range(1,101), make two list, one containing all even numbers and other containingall oddnumbers.

even=[]
odd=[]
for i in range(1,101):
    if(i%2==0):
        even.append(i)
    else:
        odd.append(i)
print("Even numbers:",even)
print("Odd  numbers:",odd)