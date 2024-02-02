#include<stdio.h>
#include<stdlib.h>
void ins();
void del();
void ser();
void dis();
int i,n,ch,arr[50];
void main()
{
    printf("Enter the limit:");
    scanf("%d",&n);
    printf("Enter the elements of array:");
    for(i=0;i<n;i++)
    scanf("%d",&arr[i]);
    while(1)
    {
        printf("Select your choice:\n1.Insertion\n2.Deletion\n3.Search\n4.Display\n4.Exit");
        printf("Enter your choice:");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1: ins();
            break;
            case 2: del();
            break;
            case 3: ser();
            break;
            case 4: dis();
            break;
            case 5: printf("Exit prgm");
            exit(0);
            default:printf("Invalid choice");
            
        }
    }
    }
    void ins()
    {
        int num,pos,i;
        printf("Enter the number:");
        scanf("%d",&num);
        printf("Enter the pos:");
        scanf("%d",&pos);
        for(i=n-1;i>=pos-1;i--)
        {
        arr[i+1]=arr[i];
        }
        arr[pos-1]=num;
        n++;
    }
    void del()
    {
        int pos;
        printf("Enter the pos to be deleted:");
        scanf("%d", &pos);
        for(i=pos-1;i<n-1;i++)
        {
            arr[i]=arr[i+1];
        }
        n--;
    }
    void ser()
    {
        int num,flag=0,count=1,i;
        printf("Enter the num to be search:");
        scanf("%d",&num);
        for(i=0;i<n;i++)
        {
            if(num==arr[i])
            {
                flag=1;
                break;
            }
            count++;
        }
        if(flag==1)
        printf("Element found at loc %d",flag);
        else
        printf("Element not found");
    }
    void dis()
    {
        printf("Elements are:\n");
        for(i=0;i<n;i++)
        printf("%d\n",arr[i]);
    }