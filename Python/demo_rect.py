# Create a class Rectangle with private attributes length and width. Overload ‘<’ operator to
# compare the area of 2 rectangles.

class Rectangle:
    def __init__(self,l,b):
        self.l=l
        self.b=b

    def area(self):
        return(self.l*self.b)

l=int(input("Enter the length:"))
b=int(input("Enter the breadth:"))
ob1=Rectangle(l,b)
print("Area of Rectangle1 is:")
ob1.area()
#print("Area of Rectangle2 is :")
#ob2.area()
