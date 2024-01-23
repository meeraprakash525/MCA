def digit(nums):
    dict={}
    for i in nums:
        if i in dict:
            dict[i]=dict[i]+1
        else:
            dict[i]=1
    return dict
num1=input("Enter the numbers:")
nums=num1.split(",")
nums=map(int,nums)
# for i in nums:
#     print(i)
print(nums)
print(digit(nums))
