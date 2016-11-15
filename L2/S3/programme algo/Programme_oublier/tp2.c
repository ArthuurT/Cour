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
	int nb_f;
	int nb_h;
	int i;
	
	for(i=0;i<nb_amis && i<N;i++){
		if(amis[i].sexe == 1){
			nb_h = nb_h + 1;
		}
		if(amis[i].sexe == 2){
			nb_f = nb_f + 1;
		}
	}
	printf("il y a %i Femmes et %i Hommes",nb_f,nb_h);
}

void afficher_cadet(t_personne* amis, int nb_amis)
{
	int cadet = 0;
	int i;
	
	for(i=1;i<nb_amis && i<N;i++){
		if(amis[i].naissance.an>amis[cadet].naissance.an){
			cadet = i;
		}
		if(amis[i].naissance.an == amis[cadet].naissance.an){
			if(amis[i].naissance.mois>amis[cadet].naissance.mois){
				cadet = i;
			}
			if(amis[i].naissance.mois == amis[cadet].naissance.mois){
				if(amis[i].naissance.jour>amis[cadet].naissance.jour){
					cadet = i;
				}
			}
		}
	}
	printf("le cadet de la base est %s\navec une date de naissance = %i/%i/%i",amis[cadet].prenom,amis[cadet].naissance.jour,amis[cadet].naissance.mois,amis[cadet].naissance.an);		
}

void afficher_anniv(t_personne* amis, int nb_amis)
{	
	int i;
	int j;
	int nb = 0;
	
	char prenom[20];
	
	printf("veuillez saisir le prenom de la ou les personne a afficher la date de naissance\n");
	scanf("%s",prenom);
	
	for(i=0;i<nb_amis && i<N;i++){
		nb = 1;
		for(j=0;prenom[j]!='\0';j++){
			if(amis[i].prenom[j] == prenom[j]){
				nb = 1;
			}else{
				nb = 0;
			}
		}
		if(nb == 1){
			printf("la date de naissance est %i/%i/%i\n",amis[i].naissance.jour,amis[i].naissance.mois,amis[i].naissance.an);
		}
	}
}	

void ajouter_personne(t_personne* amis, int* nb_amis)
{	
	int i;
	char prenom[N];
	int jour;
	int mois;
	int an;
	int sexe;
	
	printf("veuillez saisir le prenom de la personne a entrer dans la base\n");
	scanf("%s",prenom);
	printf("veuillez saisir 1 si la personne est un homme, 2 si c'est une femme\n");
	scanf("%i",&sexe);
	printf("veuillez saisir la date de naissance de la personne\n");
	printf("jour = ");
	scanf("%i",&jour);
	printf("mois = ");
	scanf("%i",&mois);
	printf("annee = ");
	scanf("%i",&an);
	
	for(i=0;prenom[i] != '\0';i++){
		amis[*nb_amis].prenom[i] = prenom[i];
	}
	if(sexe == 1){
		amis[*nb_amis].sexe = 1;
	}
	if(sexe == 2){
		amis[*nb_amis].sexe = 2;
	}
	amis[*nb_amis].naissance.jour = jour;
	amis[*nb_amis].naissance.mois = mois;
	amis[*nb_amis].naissance.an = an;
	
	*nb_amis = *nb_amis + 1;
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
