#include<stdio.h>
#include<stdlib.h>
# define n 20
int s[n],top=0,item;

int IsEmpty()
{
    if(top==0)
    return 1;
    else
    return 0;
}
int IsFull()
{
    if(top==n)
    return 1;
    else
    return 0;
}
void push(int item)
{
    s[top]=item;
    top++;
}
int pop()
{
    int pos=-1;
    if(IsEmpty())
    printf("Stack Underflow");
    else
    {
    top=top-1;
    pos=top;
    }
return pos;
}
void display()
{
    if(IsEmpty())
    printf("Stack Underflow");
    else
    {
        printf("Stack contents are:\n");
        for(int i=top-1;i>=0;i--)
        printf("%d\n",s[i]);
    }
    
}
int peek()
{
    int pos=-1;
    if(IsEmpty())
    printf("Stack Underflow");
    else
    {
        pos=top-1;
        return pos;
    }
    
    
}
void main()
{
    int ch,p,val;
    do
    {
        printf("SELECT YOUR CHOICE:\n1.PUSH\n2.POP\n3.DISPLAY\n4.PEEK\n5.EXIT\n");
        printf("Enter your choice:");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1:
            if(IsFull())
            printf("Stack Overflow");
            else
            {
                printf("Enter the item to be pushed:");
                scanf("%d",&item);
                push(item);
            }
            break;
            
            case 2:
            val=pop();
            if(val!=-1)
            printf("Popped item is %d\n",s[val]);
            break;
            
            case 3:
            display();
            break;
            
            case 4:
            p=peek();
            if(p!=-1)
            printf("Peek item is %d",s[p]);
            break;
            
            case 5:printf("Exit program");exit(0);
            
            default:printf("Invalid choice");
        }
    }
    
        while(ch!=6);
}

