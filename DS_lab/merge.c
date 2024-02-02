#include<stdio.h>
#include<stdlib.h>
void main()
{
    int n1,n2,n3,i;
    int a[10],b[10],c[20];
    printf("Enter the size of first array:\n");
    scanf("%d",&n1);
    printf("Enter the array elements:");
    for(i=0;i<n1;i++)
    scanf("%d",&a[i]);
    printf("Enter the size of second array:\n");
    scanf("%d",&n2);
    printf("Enter the array elements:\n");
    scanf("%d",&a[i]);
    for(i=0;i<n1;i++)
    c[i]=a[i];
    for(i=0;i<n2;i++)
    c[i+n1]=b[i];
    
    printf("Merged array is:\n");
    for(i=0;i<n3;i++)
    printf("%d\n",c[i]);
}