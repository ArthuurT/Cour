#include <stdlib.h>
#include <stdio.h>
#include <string.h>


int main () {

    char nom_fichier[20];
    int nb_caractere = 0;
    int nb_mot = 1;
    int nb_ligne = 1;
    int valeur_enlever = 0;
    char valeur;

    printf("veuillez saisir le nom du fichier\n");
    scanf("%s",nom_fichier);
    FILE *fic1;

    fic1 = fopen(nom_fichier,"r");

    while(fic1 == 0){
        printf("erreur le fichier n'existe pas\nveuillez recommencer la saisie\n");
        scanf("%s",nom_fichier);
        fic1 = fopen(nom_fichier,"r");
    }
    while(!feof(fic1)){
        fscanf(fic1,"%c",&valeur);
        if(valeur != '\n'){
            nb_caractere++;
        }
        if(valeur == ' '){
        	nb_mot++;
	        valeur_enlever++;
	}
        if(valeur == '\n'){
            nb_ligne++;
	    valeur_enlever++;
        }
	
	
    }
    nb_caractere = nb_caractere - valeur_enlever;
    fclose(fic1);
    printf("il y a %i caractere\nil y a %i mot\net %i ligne\n",nb_caractere,nb_mot,nb_ligne);
}