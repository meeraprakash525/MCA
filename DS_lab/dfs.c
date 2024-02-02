#include<stdio.h>
#include<stdlib.h>
void dfs(int n,int si,int a[si][si],int v[])
{
    if(v[n]!=1)
    {
        printf("%d",n);
        v[n]=1;
        for(int i=0;i<si;i++)
        {
            if(a[n][i]==1 && v[i]==0)
            dfs(i,si,a,v);
        }
    }
}
void main()
{
    int n,start;
    printf("Enter the no of nodes: ");
    scanf("%d",&n);
    int a[n][n],v[n];
    printf("Enter the adjacency matrix:\n");
    for(int i=0;i<n;i++)
    {
        v[i]=0;
        for(int j=0;j<n;j++)
        scanf("%d",&a[i][j]);
        
    }
    printf("Enter the nodes from 0-%d:",(n-1));
    scanf("%d",&start);
    printf("\nDFS traversal is:");
    dfs(start,n,a,v);
}