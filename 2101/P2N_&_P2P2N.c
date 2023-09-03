#include <stdlib.h>

typedef struct node{
  char elem;
  struct node* link;
} *List;

int main() {
  List L = (struct node*)malloc(sizeof(struct node));
  L->elem = 'H';
  L->link = (struct node*)malloc(sizeof(struct node));
  L->link->elem = 'O';
  L->link->link = (struct node*)malloc(sizeof(struct node));
  L->link->link->elem = 'P';
  L->link->link->link = NULL;
  
  findElem(&L, 'X');
  return 0;
}

void findElem(List *A, int find){
  // Another way to declare pointer to pointer to node and pointer to node
  // List *p = &A; //P2N
  // List q = *A;  //P2P2N
  List *p;
  List q;
  
  p = A;  // P2N
  q = *A; // P2P2N

  printf("char %c\n", find);  
  printf("char %c", q->elem);
  


  printf("char %c", (*p)->elem);
  
  q = q->link;
  p = &(*p)->link;
  
}
