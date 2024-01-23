# Create a Bank account with members account number, name, type of account and balance.
# Write constructor and methods to deposit at the bank and withdraw an amount from the bank.

class Account:
    def __init__(self,acc_no,name,type):
        self.acc_no=acc_no
        self.name=name
        self.type=type
        self.balance=0

    def deposite(self,amount):
      self.balance=self.balance+amount
      print(amount,"DEPOSITED \n BALANCE:",self.balance)

    def withdraw(self,amount):
       if(amount>self.balance):
          print("NOT SUFFICIENT AMOUNT")
       else:
          self.balance=amount
          print(amount,"DEPOSITED \n BALANCE:",self.balance)
    def details(self):
     print("ACCOUNT NO:",self.acc_no)
     print("ACCOUNT NAME:",self.name)
     print("ACCOUNT TYPE",self.type)
     print("BALANCE:",self.balance)

acc_no=int(input("Enter the account no"))
name=input("Enter name")
type=input("Enter type")
b=Account(acc_no,name,type)
ch=int(input("----------------\n1: Account Details\n2:Withdraw\n3:Deposit\n4:Exit\n----------------\nEnter your choice: "))
while(ch<4):
   if(ch==1):
           b.details()
   elif(ch==2):
           b.deposite(int(input("Enter moneny to deposit:")))
   elif(ch==3):
       b.withdraw(int(input("Enter money to withdraw:")))
        



