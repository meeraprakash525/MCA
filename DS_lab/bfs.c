#include<stdio.h>
#include<stdlib.h>
int MAX=10,r=-1,f=-1;
int a[10];

void enqueue(int n)
{
    int val;
    if(r==MAX-1)
    return;
    if(r==-1)
        f=0;
    r++;
    a[r]=n;
}

int dequeue()
{
    if(f==-1)
    return -1;
    int v=a[f];
    f++;
    return v;
}

void main()
{
    int n,start;
    printf("Enter the no of nodes:");
    scanf("%d",&n);
    int a[n][n],v[n];
    printf("Enter the adjacency matrix:");
    for(int i=0;i<n;i++)
    {
        v[i]=0;
        for(int j=0;j<n;j++)
          scanf("%d",&a[i][j]);
    }
    printf("Enter the starting node(0-%d): ",(n-1));
    scanf("%d",&start);
    printf("\nBFS traversal is :");
    enqueue(start);
    v[start]=1;
    while(f<=r)
    {
        start=dequeue();
        printf(" %d ",start);
        for(int i=0;i<n;i++)
        if(a[start][i]==1&&v[i]==0)
        {
            enqueue(i);
            v[i]=1;
        }
    }
}