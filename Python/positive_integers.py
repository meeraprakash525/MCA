list1=[]
print("Enter the elements of list")
l1=(input("Enter no space seperated"))
l2=l1.split(",")
print(l2)
l2=list(map(int,l2))
print("list is", l2)
for i in  l2:
   if(i>=0):
          print("positive  elements of list is")
          print(i)