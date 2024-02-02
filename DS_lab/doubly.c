#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next,*last;
} *head,*tail,*prev,*curr,*temp;
 int c=-1;

struct node *addnode()
{
    int d;
    struct node *newnode=(struct node*)malloc(sizeof(struct nodde()));
    printf("Enter the data:");
    scanf("%d",&d);
    newnode->data=d;
    newnode->next=head;
    newnode->last=tail;
    return newnode;
}

void insertbegin()
{
    struct node *new=addnode();
    if(head==NULL)
    {
        head=new;
        tail=new;
    }
    else
    {
        new->next=head;
        head->last=new;
        head=new;
        tail=head;
        printf("Node inserted!\n");
    }
    c++;
    
}

void insertend()
{
    struct node *new=addnode();
    if(head==NULL)
    {
        head=new;
        tail=new;
    }
    else
    {
        temp=head;
        while(temp->next!=NULL)
        {
            temp=temp->next;
        }
        tail->next=new;
        new->last=tail;
        tail=new;
        printf("Node inserted!\n");
    }
    c++;
   
}

void insertpos()
{
    struct node *new=addnode();
    int pos;
    printf("Enter position:");
    scanf("%d",&pos);
    if(pos==0&&head!=NULL)
    {
        new->next=head;
        head->last=new;
        head=new;
        tail=head;
    }
    else if(pos>c)
    {
        printf("Invalid position");
    }
    else if(head==NULL)
    {
        head=new;
        tail=new;
        
    }
    else
    {
        temp=head;
        pos--;
        for(int i=0;i<pos;i++)
        {
            temp=temp->next;
        }
        new->next=temp->next;
        temp->next=new;
        new->last=temp;
        new->next->last=new;
        if(new->next==NULL)
        tail=new;
    }
    c++;
}

void deletebeg()
{
    if(head==NULL)
    {
        printf("List Empty");
        return;
    }
    else
    {
        temp=head;
       head=head->next;
       head->last=NULL;
      printf("%d is deleted\n",temp->data);
      free(temp);
    }
    c--;
}
void deleteend()
{
      if(head==NULL)
    {
        printf("List Empty");
        return;
    }
    else
    {
        temp=tail;
        tail=tail->last;
        tail->next=NULL;
         printf("%d is deleted\n",temp->data);
         free(temp);
    }
    c--;
}
void deletepos()
{
    if(head==NULL)
    {
        printf("List Empty");
        return;
    }
    else
    {
        temp=head;
        int k=0,pos;
        printf("Enter position:");
        scanf("%d",&pos);
        if(pos==0)
        {
            deletebeg();
        }
        else if(pos==c)
        {
            deleteend();
        }
        else if(pos>c)
        {
            printf("Invalid position");
        }
        else
        {
            while(k!=pos)
            {
                temp=temp->next;
                k++;
            }
            temp->last->next=temp->next;
            temp->next->last=temp->last;
             printf("%d is deleted\n",temp->data);
             free(temp);
            
        }
    }
    c--;
}

void insertion()
{
    int ch;
    printf("SELECT YOUR CHOICE:\n1.INSERT_BEGIN\n2.INSERT_END\n3.INSERT_POS\n");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:insertbegin();
        break;
         case 2:insertend();
        break;
        case 3:insertpos();
        break;
        
    }
}

void deletion()
{
    int ch;
    printf("SELECT YOUR CHOICE:\n1.DELETE_BEGIN\n2.DELETE_END\n3.DELETE_POS\n");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:deletebeg();
        break;
         case 2:deleteend();
        break;
        case 3:deletepos();
        break;
        
    }
}
void main()
{
    while(1)
    {
        int choice;
        printf("Enter your choice:");
        scanf("%d",&choice);
        switch(choice)
        {
            case 1:insertion();
            break;
            case 2:deletion();
            break;
        }
        
    }
}