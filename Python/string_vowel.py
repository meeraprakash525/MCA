string1=input("Enter the string:")
vowel=['a','e','i''o','u','A','E','I','O','U']
vowel_list=[]
for i in string1:
    if(i in vowel):
        vowel_list.append(i)
print("Vowel in the string",vowel_list)

