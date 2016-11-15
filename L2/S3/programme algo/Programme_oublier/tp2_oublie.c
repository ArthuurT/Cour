/* Menu du TP 2 - Base de donnees sur des personnes*/
#include<stdio.h>
#include<string.h>
#define N 50

/* Definition du type date (jour, mois, annee) */
typedef struct { int jour, mois, an; } t_date;

/* Definition du type sexe avec la convention INSEE */
typedef enum { homme = 1, femme } t_sexe;

/* Definition du type personne (prenom, sexe, date de naissance) */
typedef struct { char prenom[20] ; t_sexe sexe ; t_date naissance ; } t_personne ;

void afficher_base(t_personne* amis, int nb_amis)
{
	int i;
	
	for(i=0;i<nb_amis && i<N;i++){
		printf("prenom = %s\n",amis[i].prenom);
		if(amis[i].sexe == 1){
			printf("sexe = Homme\n");
		}
		if(amis[i].sexe == 2){
			printf("sexe = Femme\n");
		}
		printf("date de naissance = %i/%i/%i\n",amis[i].naissance.jour,amis[i].naissance.mois,amis[i].naissance.an);
	}
}

void afficher_nombre_fh(t_personne* amis, int nb_amis)
{	
	printf("Ce traitement n'est pas encore disponible\n");
}

void afficher_cadet(t_personne* amis, int nb_amis)
{
	printf("Ce traitement n'est pas encore disponible\n");
}

void afficher_anniv(t_personne* amis, int nb_amis)
{	
	printf("Ce traitement n'est pas encore disponible\n");
}	

void ajouter_personne(t_personne* amis, int* nb_amis)
{	
	printf("Ce traitement n'est pas encore disponible\n");
}

/* Programme principal */
int main()
{	

	/* Declaration de la base de donnees, de taille maximale 50 et de taille utile nb_amis */
	t_personne amis[N]={{"Elodie",femme,{30,5,1996}}, {"Julien",homme,{8,11,1996}},{"Camille",femme,{2,6,1995}}, {"Adrien",homme,{20,11,1996}},{"Camille",homme,{12,5,1994}}, {"Lise",femme,{5,10,1995}}} ;
	int nb_amis = 6 ;

	int choix;	/* Choix de l'utilisateur */

	do
	{	/* Affichage du menu */
		printf("\nMenu :\n");
		printf(" 1 - Afficher le contenu de la base\n");
		printf(" 2 - Afficher le nombre d'hommes et de femmes\n");
		printf(" 3 - Afficher le prenom de la personne la plus jeune\n");
		printf(" 4 - Afficher les anniversaires d'un prenom\n");
		printf(" 5 - Ajouter une personne\n");
		printf(" 6 - Quitter\n");
		printf("Votre choix : ");
		scanf("%i",&choix);

		/* Traitement du choix de l'utilisateur */
		switch(choix)
		{	case 1 : afficher_base(amis,nb_amis); break;
			case 2:  afficher_nombre_fh(amis,nb_amis); break;
			case 3:  afficher_cadet(amis,nb_amis); break;
			case 4:  afficher_anniv(amis,nb_amis); break;
			case 5:  ajouter_personne(amis,&nb_amis); break;
			case 6:  break;
			default: printf("Erreur: votre choix doit etre compris entre 1 et 6\n");
		}
	}
	while(choix!=6);
	printf("Au revoir !\n");
	return 0;
}
