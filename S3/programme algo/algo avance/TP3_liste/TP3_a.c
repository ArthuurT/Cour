#include<stdio.h>
#include<stdlib.h>
#include "liste.h"

int saisir_nombre(int *valeur){
	printf("veuillez saisir un entier\n");
	printf("entier = ");
	scanf("%i",valeur);
}
/* Fonctions de manipulation de la liste */

void afficher(void)
/* Affiche les valeurs de la liste */
{
	int elem;

	if(liste_vide())
		printf("La liste est vide\n");
	else
	{
		printf("\nLa liste contient : ");
		en_tete();
		while(!hors_liste())
		{
			valeur_elt(&elem);
			printf("%i ",elem);
			suivant();
		}
		printf("\n");
	}
}

void inserer(void)
/* Insere un �l�ment dans la liste */
{
	int valeur;
	int element;
	int elt_placer = 0;
	
	saisir_nombre(&valeur);
	en_tete();
	while(!hors_liste() && elt_placer==0){
		valeur_elt(&element);
		if(valeur<=element){
			ajout_gauche(valeur);
			elt_placer = 1;
		}
		suivant();
	}
	if(elt_placer == 0){
		en_queue();
		ajout_droit(valeur);
	}
}

void supprimer(void)
/* Supprime toutes les occurrences d'un entier lu au clavier */
{
	int valeur;
	int element;

	if(liste_vide()){
		printf("la liste est vide\n");
	}else{
		saisir_nombre(&valeur);
		en_tete();
		while(!hors_liste()){
			valeur_elt(&element);
			if(element == valeur){
				oter_elt();
				if(hors_liste()){
					en_tete();
				}
			}
			suivant();
		}
	}
}

void afficher_multiples(void)
/* Affiche tous les multiples d'une valeur lue au clavier */
{	
	int valeur;
	int element;

	saisir_nombre(&valeur);

	if(liste_vide()){
		printf("la liste est vide\n");
	}else{
		en_tete();
		printf("les multiples de %i sont : ",valeur);
		while(!hors_liste()){
			valeur_elt(&element);
			if(element%valeur == 0){
				printf("%i ",element);
			}
			suivant();
		}
		printf("\n");
	}
}

void remplacer(){

	int nb1;
	int nb2;
	int element;

	printf("veuillez saisir le nombre a remplacer\n");
	printf("nombre 1 = ");
	scanf("%i",&nb1);
	printf("veuillez saisir le nombre qui va remplacer\n");
	printf("nombre 2 = ");
	scanf("%i",&nb2);
	
	if(liste_vide()){
		printf("la liste est deja vide\n");
	}else{
		en_tete();
		while(!hors_liste()){
			valeur_elt(&element);
			if(element == nb1){
				modif_elt(nb2);
			}
			suivant();
		}
	}
}

void rechercher(){
	int rang;
	int sens;
	int trouver = 0;
	int recherche = 0;
	int valeur_chercher;
	

	printf("veuillez saisir le rang de la valeur a chercher\n");
	printf("rang = ");
	scanf("%i",&rang);
	printf("veuillez saisir le sens de la valeur a chercher\n");
	printf("sens = ");
	scanf("%i",&sens);

	if(sens == 1){
		en_tete();
		while(!hors_liste() || recherche != rang){
			
			if(recherche==rang){
				trouver = 1;
			}else{
				recherche++;
				suivant();
			}
		}
		if(trouver == 1){
			valeur_elt(&valeur_chercher);
		}
	}else{
		en_queue();
		while(!hors_liste() || recherche != rang){
			
			if(recherche==rang){
				trouver = 1;
			}else{
				recherche++;
				precedent();
			}
		}
		if(trouver == 1){
			valeur_elt(&valeur_chercher);
		}
	}
	printf("la valeur chercher est %i\n");
}

void trier_liste(){
	
}
void vider_liste(void)
/* Supprime tous les �l�ments de la liste */
{
	if(liste_vide()){
		printf("la liste est deja vide\n");
	}else{
		en_queue();
		while(!hors_liste()){
			oter_elt();
		}
	}
}

/*	Programme principal */
int main(void)
{	int choix;

/* Initialisation de la liste d'entiers */
	init_liste();

	do
/* Affichage du menu et saisie du choix */
	{	printf("\nMenu :\n");
		printf(" 1 - Afficher la liste\n");
		printf(" 2 - Inserer une valeur\n");
		printf(" 3 - Supprimer une valeur\n");
		printf(" 4 - Afficher les multiples\n");
		printf(" 5 - remplacer un nombre par un autre\n");
		printf(" 6 - trier la liste\n");
		printf(" 7 - Vider la liste\n");
		printf(" 8 - Quitter\n");
		printf("Votre choix : ");
		scanf("%d",&choix);

/* Traitement du choix de l'utilisateur */
		switch(choix)
		{	case 1: afficher(); break;
			case 2: inserer();  afficher(); break;
			case 3: supprimer(); afficher(); break;
			case 4: afficher_multiples(); afficher(); break;
			case 5: remplacer(); afficher(); break;
			case 6: trier_liste(); break;
			case 7: vider_liste(); afficher(); break;
			case 8: break;
			default: printf("Erreur: votre choix doit �tre compris entre 1 et 5\n");
		}
	}
	while(choix!=6);

	printf("Au revoir !\n");
	return EXIT_SUCCESS;
}
