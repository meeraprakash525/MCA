string=input("Enter the sentence:")
word=input("Enter the word:")
a=[]
count=1
a=string.split(",")
for i in range(0,len(a)):
    if (word==a[i]):
          count=count+1
print(count)