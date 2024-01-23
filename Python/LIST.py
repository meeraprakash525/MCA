l1=[1,2,3,4,5,6]
l2=[7,8,9,1,2,3]
if(len(l1)==len(l2)):
    print("same length")
else:
    print("Not same")

s1=s2=0
for i in l1:
    s1=s1+i
for i in l2:
    s2=s2+i
if(s1==s2):
    print("SAME")
else:
    print("NOT SAME")

s1=set(l1)
s2=set(l2)
s3=s1.intersection(s2)
if len(s3)>0:
    print(s3)
else:
    print("No common values")