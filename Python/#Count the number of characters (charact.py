#Count the number of characters (character frequency) in a string.

string=input("Enter the string")
c=0
for i in range(0,len(string)):
    c=c+1
print(c)