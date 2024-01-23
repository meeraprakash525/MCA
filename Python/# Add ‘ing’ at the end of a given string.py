# Add ‘ing’ at the end of a given string. If it already ends with ‘ing’, then add ‘ly’

def str(string):
    length=len(string)
    if length>2:
       if (string[-3:]=='ing'):
           string=+'ly'
    else:
        string+='ing'
    return string
string=input("Enter the string:")
print(str(string))
