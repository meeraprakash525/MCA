print("Leap year between two years")
print("Enter the startyear:")
startyear=int(input())
print("Enter the endyear:")
endyear=int(input())
print("List of leap year:")
for year in range(startyear,endyear):
   if (0==year%4) and (0!=year%100) or (0==year%400):
     print(year)
