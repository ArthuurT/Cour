#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<ctype.h>
#include "pile.h"


int convertir(char c){
	return c-'0';
}

int main () {
	
	char valeur = 0;
	int compo1;
	int compo2;
	int res = 0; 
	initpile();
	printf("veuillez saisir l'expression a calculer\noperation = ");

	while(valeur != '\n'){

		scanf("%c",&valeur);
	
		if(isdigit(valeur)){
			valeur = convertir(valeur);
			empiler(valeur);
		}
		else if(valeur == '+'){
			depiler(&compo2);
			depiler(&compo1);
			res = compo1 + compo2;
			empiler(res);
		}
		else if(valeur == '-'){
			depiler(&compo2);
			depiler(&compo1);
			res = compo1 - compo2;
			empiler(res);
		}
		else if(valeur == '*'){
			depiler(&compo2);
			depiler(&compo1);
			res = compo1 * compo2;
			empiler(res);
		}
		else if(valeur == '/'){
			depiler(&compo2);
			depiler(&compo1);
			res = compo1 / compo2;
			empiler(res);
		}
	}
	depiler(&res);
	printf("le resultat est %i\n",res);
}