

class Rect():
    def __init__(self,l,b):
        self.l = l
        self.b = b

    def area(self):
        print(self.l*self.b)

    def peri(self):
        print(2*(self.l+self.b))


l=input("Enter length ")
blacky = Rect(l,b)

print(blacky.l)

blacky.peri()