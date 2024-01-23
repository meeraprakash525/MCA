# Create a class Time with private attributes hour, minute and second. Overload ‘+’ operator to
# find sum of 2 time.

class Time:
    def __init__(self,h,m,s):
        self.h=h
        self.m=m
        self.s=s
    def __add__(self,other):
        c=Time(0,0,0)
        c.h=self.h+other.h
        c.m=self.m+other.m
        c.s=self.s+other.s
        if(c.s>=60):
            c.s=c.s-60
            c.m=c.m+1
        if(c.m>=60):
            c.m=c.m-60
            c.h=c.h+1
        return c
    def display(self):
        print("Time:",self.h,":",self.m,":",self.s)
x,y,z=map(int,input("Enter the time 1 in(hh:mm:ss)").split(":"))
a=Time(x,y,z)
x,y,z=map(int,input("Enter the time 2 in(hh:mm:ss)").split(":"))
b=Time(x,y,z)
print("Time 1 + Time 2 Is")
Time.display(a+b)
