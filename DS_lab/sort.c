#include<stdio.h>
#include<stdlib.h>
void main()
{
    int n,i,j,temp,a[20];
    printf("Enter the size of array:");
    scanf("%d",&n);
    printf("Enter the elements of array:");
    for(i=0;i<n;i++)
    scanf("%d",&a[i]);
    printf("Array before sorting:\n");
    for(i=0;i<n;i++)
    printf("%d\n",a[i]);
    
    for(i=0;i<n-1;i++)
    {
        for(j=0;j<n-1-i;j++)
        {
            if(a[j]>a[j+1])
            {
                temp=a[j];
                a[j]=a[j+1];
                a[j+1]=temp;
                
            }
        }
    }
    printf("Elements after sorting:\n");
    for(i=0;i<n;i++)
    printf("%d\n",a[i]);
    
}