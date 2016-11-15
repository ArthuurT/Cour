#include <stdio.h>
#include <stdlib.h>
#include "couleurs.h"
// avec des couleurs et nettoyage ecran

int main(int argc, char *argv[])
{
	int age = 0; // On initialise la variable à 0
     clrscr();
    couleur ("35");
    printf("\033[%sm","35");
	printf("Quel age avez-vous ? ");
	scanf("%d", &age); // On demande d'entrer l'âge avec scanf
    couleur ("0");
    printf("\033[%sm","0");
	printf("Ah ! Vous avez donc %d ans !\n\n", age);
       
	return 0; 
}		
