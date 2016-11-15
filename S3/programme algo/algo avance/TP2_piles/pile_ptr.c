#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<stdlib.h>

typedef struct element{int valeur;struct element *suivant;}t_element;
t_element *pile;

void initpile(){
	pile = NULL;
}

int pilevide(){
	return (pile == NULL);
}

void empiler(int c){
	t_element *temp;
	temp = malloc(sizeof(t_element));
	temp->valeur = c;
	temp->suivant = pile;
	pile = temp;
}

void depiler(int *c){
	t_element *sommet;
	if(pile != NULL){
		*c = pile->valeur;
		sommet = pile;
		pile = sommet->suivant;
		free(sommet);
	}
}

void sommetpile(int *c){
	if(pile!=NULL){
		*c = pile->valeur;
	}
}