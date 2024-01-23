# Program to count the number of vowels, consonants, digits and special characters. 

def count(str):
    vowel=0
    con=0
    digit=0
    s=0
    vowels=['a','e','i','o','u']
    for i in str:
        if(i.isalpha()):
            if(i in vowels):
                vowel+=1
            else:
                con+=1
        elif(i.isnumeric()):
            digit+=1
        else:
            s+=1
    print("Vowels are",vowel)
    print("Consonants are",con)
    print("digits are",digit)
    print("symbols",s)
str=input("Enter the string:")
count(str.replace(" ", " ").casefold())
        
        
