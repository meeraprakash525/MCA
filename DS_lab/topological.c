#include<stdio.h>
#include<stdlib.h>
int c=0;
void main()
{
    int n,i,j;
    printf("Enter the no of nodes:");
    scanf("%d",&n);
    int a[n][n],v[n];
    printf("Enter the adjacency matrix:");
    for(i=0;i<n;i++)
    {
        v[i]=0;
        {
            for(j=0;j<n;j++)
            scanf("%d",&a[i][j]);
            
        }
    }
    printf("Topological sorting");
    for(i=0;i<n;i++)
    {
    c=0;
    if(v[i]==0)
    {
        for(j=0;j<n;j++)
        {
            if(a[i][j!=0])
            {
                c=1;
                break;
            }
        }
        if(c==1)
        {
            v[i]=1;
            printf("%d",i);
            for(j=0;j<n;j++)
            a[j][i]=0;
            i=-1;
        }
    }
    }
    
}