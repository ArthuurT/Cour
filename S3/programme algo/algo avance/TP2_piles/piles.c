#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#define tmax 20

int pile[tmax];
int sommet;

void initpile(){
	sommet = -1;
}

void empiler(int c){
	if(sommet<tmax-1){
		sommet++;
		pile[sommet]=c;
	}
}

void depiler(int *c){
	if(sommet>-1){
		*c = pile[sommet];
		sommet--;
	}
}
int pilevide(){
	return(sommet == -1);
}