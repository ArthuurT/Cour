#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include "fic.h"
 
int main (){
	
	int resultat;
	int i;
	int j;
	
	printf("veuillez saisir i et j\ni = ");
	scanf("%i",&i);
	printf("j = ");
	scanf("%i",&j);
	resultat = f(i) * g(j);
	printf("le resultat est %i\n",resultat);
	
}