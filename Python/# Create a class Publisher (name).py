# Create a class Publisher (name). Derive class Book from Publisher with attributes title and 
# author. Derive class Python from Book with attributes price and no_of_pages. Write a
# program that displays information about a Python book. Use base class constructor invocation and
# method overriding.


class Publisher:
    def __init__(self,title,author):
        self.title=title
        self.author=author
    def display(self):
        print("title is",self.title)
        print(f"author is :{self.author}")


class Book(Publisher):
    def __init__(self,title,author,phone):
        super().__init__(title,author)
        self.phone=phone
    def display(self):
        print(f"Phone no is:{self.phone}")
        super().display()


class Python(Book):
    def __init__(self,phone,price,pageno,title,author):
        super().__init__(phone,title,author)
        self.price=price
        self.pageno=pageno
    def display(self):
        print(f"Price is:{self.price}")
        print(f"Page no is:{self.pageno}")
        super().display()

title=input("Enter the title:")
author=input("Enter the author:")
phone=int(input("Enter the phoneno:"))
price=int(input("Enter the price:"))
pageno=int(input("Enter the page no:"))

ob=Python(title,author,phone,price,pageno)
ob.display()


       
