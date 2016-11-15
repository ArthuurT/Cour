#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include"file.h"

int main() {
	int valeur;
	int a;
	
	do {
		printf("donnez un nombre : ");
		scanf("%i",&valeur);
		if(valeur != 0 && valeur != -1){
			ajouter(valeur);
		}
		else if(valeur == 0){
			printf("nombres lus : ");
			while(!filevide()){
				retirer(&a);
				printf("%i",a);
			}
			printf("\n");
		}
	}while(valeur != -1);
	printf("Au revoir !\n");
}