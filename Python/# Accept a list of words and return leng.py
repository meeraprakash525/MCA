# Accept a list of words and return length of longest word.

def long(str):
    return max(str,key=len)
str=input("Enter the string:").split()
print("Longest word is")
print(long(str))