/* TP 4 serie statistique */

#include<stdio.h>
#include<stdlib.h>
#include "liste.h"

#define TRUE 1
#define FALSE 0

void afficher()
{
	int nb_occurence = 0;
	t_doublet element;

	en_tete();
	printf("la serie est : ");
	while (!hors_liste()) {
		valeur_elt(&element);
		while(nb_occurence < element.nb_occ){
			printf("%i ",element.valeur);
			nb_occurence++;
		}
		nb_occurence = 0;
		suivant();
	}
}

void ajout()
{
	t_doublet a_ajouter;
	t_doublet element;
	int ajout = 0;

	do{ // test de valeur valide
		printf("veuillez saisir une valeur egale a un age a entrer dans la liste\n");
		printf("valeur = ");
		scanf("%i",&a_ajouter.valeur);
		if(a_ajouter.valeur<0 || a_ajouter.valeur>100){
			printf("la valeur saisie n'est pas valide veuillez recommencer\n");
		}
	}while(a_ajouter.valeur<0 || a_ajouter.valeur>100);
	a_ajouter.nb_occ = 1;
	en_tete();
	if(liste_vide()){ // test liste vide
		ajout_droit(a_ajouter);
	}else{
		while(!hors_liste() && ajout==0) {
			valeur_elt(&element);
			if(element.valeur == a_ajouter.valeur){ // si valeur existe deja juste incrémenter le nombre d'occurence
				element.nb_occ = element.nb_occ + 1;
				ajout=1;
			}
			suivant();
		}
		if(ajout==0){ // si la valeur n'existe pas encore
			en_tete();
			valeur_elt(&element);
			while(a_ajouter.valeur>element.valeur && !hors_liste()){ // pour trier la liste a l'insertion des valeurs
				valeur_elt(&element);
				suivant();
			}
			if(hors_liste()){ // si c'est la valeur la plus grande
				en_queue();
				ajout_droit(a_ajouter);
			}
			ajout_gauche(a_ajouter); // si il y a une valeur plus grande deja
		}
	}
}

void moyenne()
{
	float moy;
	t_doublet element;
	float nb_element = 0;
	float somme = 0;

	en_tete();
	if(liste_vide()){ // test liste vide
		printf("votre liste vide donc impossible de calculer la moyenne\n");
	}else{
		en_tete();
		while (!hors_liste()) {
			valeur_elt(&element);
			somme = somme + element.valeur*element.nb_occ; // calcule de la somme de toute les valeurs en fonction de leurs occurences
			nb_element++;
			suivant();
		}
		moy = somme / nb_element; // calcule de la myoenne en fonction du nombre de valeur totale et de la sommet de celle-ci
		printf("la moyenne des valeurs de la serie est\n");
		printf("moyenne = ");
		printf("%.2f\n",moy);
	}
}

void rang_n()
{
	int nb_rang;
	int rang;
	t_doublet element;

	if(liste_vide()){  // teste liste vide
		printf("votre liste vide donc impossible de donner le rang d'une valeur\n");
	}else{
		printf("veuillez saisir le rang de la valeur a chercher\n");
		printf("rang = ");
		scanf("%i",&rang);
		en_tete();
		for(nb_rang=0;nb_rang!=rang && !hors_liste();nb_rang++){ //test pour savoir si le rang saisie existe dans la liste
			valeur_elt(&element);
			nb_rang = nb_rang + element.nb_occ;
			suivant();
		}
		if(hors_liste()){ // si il n'existe pas
			printf("le rang saisie n'est pas valide\n");
		}else{ // si il existe
			valeur_elt(&element);
			printf("l element au rang %i est %i\n",rang,element.valeur);
		}
	}
}

void vider()
{
	if(liste_vide()){ // test liste vide
		printf("votre liste est deja vide\n");
	}else{ // se mettre en bout de liste et oter les element repeter jusqu'a ce qu'il n'y est plus de valeur
		en_queue();
		while (!hors_liste()) {
				oter_elt();
		}
		printf("la liste vient d'etre vider\n");
	}
}

/*	Programme principal */
int main(void)
{	int choix;

/* Initialisation de la liste */
	init_liste();

/* Affichage du menu et saisie du choix */
	do
	{	printf("\nMenu :\n");
		printf(" 0 - afficher les valeurs\n");
		printf(" 1 - Ajouter une valeur\n");
		printf(" 2 - Calculer la moyenne\n");
		printf(" 3 - Valeur de rang n\n");
		printf(" 4 - Vider la liste\n");
		printf(" 5 - Quitter\n");
		printf("Votre choix : ");
		scanf("%d",&choix);

/* Traitement du choix de l'utilisateur */
		switch(choix)
		{	case 0: afficher(); break;
			case 1: ajout();		afficher(); break;
			case 2: moyenne();	afficher(); break;
			case 3: rang_n();	afficher(); break;
			case 4: vider();		afficher(); break;
			case 5: break;
			default: printf("Erreur: votre choix doit etre compris entre 1 et 5\n");
		}
	}
	while(choix!=5);
	printf("Au revoir !\n");
	return EXIT_SUCCESS;
}
