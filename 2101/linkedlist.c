/*
ADT LIST
TABANGI KO DI KO KAMAO ANI WAHAHAH
deleteList, lengthOfList
Author: Mandigma
Description:
It has functions:
insertAtPos, insertFirst, insertLast... MANA NI
deleteAtPos, deleteFirst, deleteLast... MANA NI
isMember, isEmpty, print
*/
#include <stdio.h>
#include <stdlib.h>
typedef struct node {
	int elem;
	struct node *next;
} *LIST;

//Insert at a given position
void insertAtPos(LIST *head, int index, int element);

//Insert first
void insertFirst(LIST *head, int element);

//Insert last
void insertLast(LIST *head, int element);

//Delete at a given position
void deleteAtPos(LIST *head, int index);

//Delete first
void deleteFirst(LIST *head);

//Delete last
void deleteLast(LIST *head);

//Is element a member?
void isMember(LIST head, int element);

//Check if list is empty
void isEmpty(LIST head);

//Delete the list
void deleteList(LIST *head);

//Give the length of the list
void lengthOfList(LIST head);

//Print all elements
void print(LIST head);

//Initialize list
void initialize(LIST *head);

int main(){
	LIST a;
	initialize(&a); //Initialize list
	insertLast(&a, 10); //Insert last node with element: 10
	insertFirst(&a, 5); //Insert at first node with element: 5
	insertFirst(&a, 4); //Insert at first node with element: 4
	print(a);
	insertFirst(&a, 3); //Insert at first node with element: 3
	insertLast(&a, 20); //Insert last node with element: 20
	print(a);
	insertAtPos(&a, 2, 55); //Insert element at a given position
	print(a);
	deleteFirst(&a); //Deleting first node of the lsit
	print(a);
	deleteLast(&a); //Deleting last node of the list
	print(a);
	deleteAtPos(&a, 2); //Deleting node at a given index
	print(a);
	isMember(a, 55); // Check if 55 is part of the list
	isEmpty(a); //Check if list is empty
}

//If list is empty, Initialize. Exit and notify if not
void initialize(LIST *head){
	*head = NULL;
	printf("List is initialized\n");
}

//Deleting node at a given index
void deleteAtPos(LIST *head, int index){
	LIST temp, temp1;
	int i;
	if(*head != NULL){
		if (index != 0){
			for(temp = *head, i = 0; i < index; temp = temp->next, i++ ){
				temp1 = temp;
			}
			temp1->next = temp->next;
			free(temp);		
		} else {
			temp = *head;
			*head = temp->next;
			free(temp);
		}
		printf("Deleted node at index %d\n", index);	
	}
}

//Deleting last node of the list
void deleteLast(LIST *head){
	LIST temp, temp1;
	if(*head != NULL){
		for(temp = *head; temp->next != NULL; temp = temp->next) {
			temp1 = temp;
		}
		free(temp);
		temp1->next = NULL;
		printf("Deleted last node\n");		
	}

}

//Deleting first node of the list
void deleteFirst(LIST *head){
	LIST temp;
	if(*head != NULL){
		temp = *head;
		*head = temp->next;
		free(temp);
		printf("Deleted first node\n");
	}
}

//Inserting in first...
void insertFirst(LIST *head, int element){
	LIST temp = NULL;
	if(*head != NULL){
		temp = (LIST) malloc (sizeof(struct node));
		temp->elem = element;	
		temp->next = *head;
		*head = temp;			
	}
	printf("Inserted element: %d at first node\n", element);
}

//Insert element at the given index
void insertAtPos(LIST *head, int index, int element){
	LIST temp, temp1, temp2;
	temp1 = (LIST) malloc (sizeof(struct node));
	int i;
	if(*head == NULL){
		*head = (LIST) malloc (sizeof(struct node));
		(*head)->elem = element;
		(*head)->next = NULL;
	} else if (index == 0){
		temp1->elem = element;
		temp1->next = *head;
		*head = temp1;
	} else {
		for(temp = *head, i = 0; i < index; temp = temp->next, i++){
			temp2 = temp;
		}
		temp1->elem = element;
		temp1->next = temp;
		temp2->next = temp1;
	}
	printf("Inserted element %d at index %d\n", element, index);
}

//Insert element at last
void insertLast(LIST *head, int element){
	LIST temp1, temp2;
	if(*head == NULL){
		*head = (LIST) malloc (sizeof(struct node));
		(*head)->elem = element;
		(*head)->next = NULL;
	} else {
		temp2 = (LIST) malloc (sizeof(struct node));
		for(temp1 = *head; temp1->next != NULL; temp1 = temp1->next){	}
		temp2->elem = element;
		temp2->next = NULL;
		temp1->next = temp2;
	}
	printf("Inserted element: %d last\n", element);
}

//Print all elements
void print(LIST head){
	printf("\nThe list is as follows:\n");
	for( ; head != NULL; head = head->next){
		printf("%d -> ", head->elem);
	}
	printf("NULL\n\n");
}

//Check if element is a member of the list
void isMember(LIST head, int element){
	int i, flag;
	if(head != NULL){
		for(i = 0; head != NULL ; head = head->next, i++){
			if (head->elem == element){
				flag = 1;
				printf("ELement %d is found at index %d\n", head->elem, i);
				break;
			}
		}
		if(!flag) printf("Element not found!\n");
		
	} else {
		printf("List is empty!\n");
	}

}

//Check if list is empty
void isEmpty(LIST head){
	if(head != NULL){
		printf("List is not empty!\n");
	} else {
		printf("List is empty!\n");
	}
}

