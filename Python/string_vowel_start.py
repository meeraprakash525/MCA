
l1=input("Enter the list of string seperated by comma")
l2=l1.split(",")
print(l2)
re=[]
vowel=['aeiou']
for i in l1:
    if i[0] in vowel:
        re.append(i)
        print("The extracted words : " + str(re))

