#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int compter_occurences(char car,int taille,char *mot);

int compter_voyelles(int taille,char *mot);

int main(){

	char mot[50];
	char caractere;
	int occurences;
	int occurences_voyelle; 
	int taille;
	
	printf("veuillez saisir un mot\nmot = ");
	scanf("%s",mot);
	printf("veuiller saisir le caratere a donner le nombre d'occurences\ncaractere = ");
	scanf("%s",&caractere);
	taille = strlen(mot);
	
	occurences = compter_occurences(caractere,taille,mot);
	occurences_voyelle = compter_voyelles(taille,mot);
	printf("il y a %i fois le caractere %c dans le mot %s\nil y a %i voyelle dans ce mot\n",occurences,caractere,mot,occurences_voyelle);
}

