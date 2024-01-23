def demo(string,vowel):
    string=string.casefold()
    count={}.fromkeys(vowel,0)
    for i in string:
        if i in count:
            count[i]+=1
            return count
vowel='aeiou'
string=input("Enter the string")
print(demo(string,vowel))
