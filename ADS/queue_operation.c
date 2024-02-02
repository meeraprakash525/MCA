#include<stdio.h>
# define n 20
#include<stdlib.h>
void enqueue();
void dequeue();
void display();
int a[n],f=-1,r=-1;
void main()
{
    int ch;
    while(1)
    {
        printf("Select your Choice:\n");
        printf("1.ENQUEUE\n2.DEQUEUE\n3.DISPLAY\n4.EXIT\n");
        printf("Enter your choice:");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1:
            enqueue();
            break;
            case 2:
            dequeue();
            break;
            case 3:
            display();
            break;
            case 4:printf("Exit prgm");
            exit(0);
            default:printf("Invalid choice");
           
        }
    }
}
   void enqueue()
   {
       int item;
       if(r==n)
       printf("Queue Overflow");
       else
       {
           if(f==-1)
           f=0;
           printf("Enter the item to be inserted:");
           scanf("%d",&item);
           r=r+1;
           a[r]=item;
       }
   }
    void dequeue()
    {
        if((f==-1 )|| (f>r))
        {
            printf("Queue Underflow");
        }
        else
        {
            printf("Item to be deleted is %d\n",a[f]);
            f=f+1;
        
    }
    }
    void display()
    {
         if((f==-1) || (f>r))
        {
            printf("Queue Underflow");
        }
        else
        {
            printf("Queue Elements are:");
            for(int i=f;i<=r;i++)
            printf("%d\n",a[i]);
            printf("\n");
        }
        
    }
