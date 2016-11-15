#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#define tmax 20

void initfile(){
	nb_valeurs = 0;
	tete = 0;
	queue = tmax-1;
}

void ajouter(int v){
	if(nb_valeurs < tmax){
		if(queue == tmax-1){
			queue = 0;
		}
		else queue++;
		file[queue] = v;
		nb_valeurs++;
	}
}

void retirer(int *v){
	if(nb_valeurs > 0){
		*v = file[tete];
		nb_valeurs--;
		if(tete == tmax-1){
			tete = 0;
		}
		else tete++;
	}
}

int filevide(){
	return (nb_valeurs == 0);
}

int filepleine(){
	return (nb_valeurs == tmax);
}