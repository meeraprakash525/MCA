#include<stdio.h>
#include<stdlib.h>
void insertion();
void deletion();
void search();
void display();
int n,i,ch,a[50];
void main()
{
    printf("Enter the size of array:");
    scanf("%d",&n);
    printf("Enter the elements of array:");
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
    }
    while(1)
    {
    printf("SELECT YOUR CHOICE:\n1.Insertion\n2.Deletion\n3.Search\n4.Display\n4.Exit");
    printf("Enter your choice:");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:insertion();break;
        case 2:deletion();break;
        case 3:search();break;
        case 4:display();break;
        case 5:printf("Exit program");exit(0);
        default:printf("Invalid choice");
    }
}
}
void insertion()
{
    int num,pos;
    printf("Enter the number to be inserted:");
    scanf("%d",&num);
    printf("Enter the position to be inserted:");
    scanf("%d",&pos);
    for(i=n-1;i>=pos-1;i--)
    {
        a[i]=a[i-1];
        a[pos-1]=num;
    }
    n++;
    
}
void deletion()
{
    int pos;
    printf("Enter the position to be deleted:");
    scanf("%d",&pos);
    for(i=pos-1;i<n-1;i++)
    {
        a[i]=a[i+1];
    }
    n--;
    
}
void search()
{
    int c=1,flag=1,num;
    printf("Enter the number to be search:");
    scanf("%d",&num);
    for(i=0;i<n;i++)
    {
    if(a[i]==num)
    {
        flag=1;
        break;
    }
    c++;
    }
    if(flag==1)
    {
        printf("%d is found at %d\n",num,flag);
    }
    else
    {
        printf("%d is not found at %d\n",num,flag);
    }
}
void display()
{
    printf("Array Elements are:");
    for(i=0;i<n;i++)
    {
    printf("%d\n",a[i]);
    }
}

