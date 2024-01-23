class Bank:
    def __init__(self,an,name,type):
        self.an=an
        self.name=name
        self.type=type
        self.balance=0

    def deposit(self,amount):
            self.balance=self.balance+amount
            return(self.balance,amount)

    def withdraw(self,amount):
            if(amount>self.balance):
                  print("Insuffient balance")
            else:
                  self.balance=self.balance-amount
                  return(self.balance,amount)

    
    def details(self):
          print("ACCOUNT NO:",self.an)
          print("ACCOUNT NAME:",self.name)
          print("ACCOUNT TYPE",self.type)
          print("BALANCE:",self.balance)

an=int(input("Enter the acnt no:"))
name=input("Enter the name:")
type=input("Enter the type:")
ob=Bank(an,name,type,amount)
ch=int(input("Enter the choice:"))
while(ch<4):
  if(ch==1):
            print("Enter amount to be deposited:")
            ob.deposit(amount)
  elif(ch==2):
            ob.withdraw()
            print("Balance amount is:")
  elif(ch==3):
            ob.details()
            print("Details are:")
      







          
          

    
    

        

