#include<stdio.h>
# define n 20
int s[n],top=0,item;

int isEmpty()
{
    if (top==0)
    return 1;
    else
    return 0;
}
int isFull()
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
    int index=-1;
    if(isEmpty())
    printf("Stack underflow");
    else
    {    
    top=top-1;
    index=top;
    }
    return index;
}
void display()
{
    if(isEmpty())
    printf("Stack underflow");
    else{
        printf("Stack elements are:");
        for(int i=top-1;i>=0;i--)
        printf("%d\n",s[i]);
        printf("\n");
    }
}
int peek()
{
    int index=-1;
    if(isEmpty())
    printf("Stack underflow");
    else
    index=top-1;
    return index;
}
void main()
{
    int ch,val,p;
    do{
        printf("Select your choice:\n");
        printf("1.PUSH\n2.POP\n3.DISPLAY\n4.PEEK\n5.EXIT\n");
        printf("Enter your choice:");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1: 
            if(isFull())
            printf("Stack Overflow");
            else
            printf("Enter item to be pushed:");
            scanf("%d",&item);
            push(item);
            break;

            case 2:
            val=pop();
            if (val!=-1)
            printf("The popped value is %d\n",s[val]);
            break;

            case 3:
            display();
            break;

            case 4:
            p=peek();
            if(p!=-1)
            printf("\nThe top item is %d\n",s[p]);
            break;


            default: printf("Invalid choice");
        }
    }
        while(ch!=5);
    }
