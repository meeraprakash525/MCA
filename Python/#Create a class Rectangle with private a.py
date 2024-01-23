#Create a class Rectangle with private attributes

class Rectangle:
  def __init__(self,l,b):
    self.l=l
    self.b=b

  def area(self):
    return(self.l*self.b)
  
  def peri(self):
    return 2*(self.l+self.b)
r1=Rectangle(int(input("Enter the length of rectangle1:")), int(input("Enter the breadth of rectangle1:")))

r2=Rectangle(int(input("Enter the length of rectangle2:")) ,int(input("Enter the breadth of rectangle2:")) )

if(r1.area()>r2.area()):
    print("Area of rectangle1 ",r1.area(),"> Area of retangle2",r2.area())
elif(r1.area()<r2.area()):
    print("Area of rectangle1 ",r1.area(),"< Area of retangle2",r2.area())
else:
     print("Area of rectangle1=Area of retangle2",r2.area())

if(r1.peri()>r2.peri()):
      print("Perimeter of rectangle 1: ",r1.peri(),"> Perimeter of rectangle 2: ",r2.peri())
elif(r1.peri()<r2.peri()):
      print("Perimeter of rectangle 1: ",r1.peri(),"< Perimeter of rectangle 2: ",r2.peri())
else:
      print("Perimeter of rectangle 1 = Perimeter of rectangle 2 = ",r2.peri())    

    

