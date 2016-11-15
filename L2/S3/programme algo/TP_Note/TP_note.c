#include<stdio.h>
#include<string.h>
#include<stdlib.h>
# define N 3
void saisie_coordonne1(char mat [N][N],int *x,int *y){ // saisie des coordonnee pour le joueur 1 

	
	printf("premier joueur :\ncoordonne sur x = ");
	scanf("%i",x);
	printf("coordonne sur y = ");
	scanf("%i",y);
	
	do{
		while(*x<0 || *x>=N){
			printf("coordonne sur x incorrect veuillez recommencer la saisie");
			printf("coordonne sur x = ");
			scanf("%i",x);
		}
		while(*y<0 || *y>=N){
			printf("coordonne sur y incorrect veuillez recommencer la saisie\n");
			printf("coordonne sur y = ");
			scanf("%i",y);
		}
	}
	while(mat[*y][*x] == 'x' || mat[*y][*x] == 'o');
	

}
void saisie_coordonne2(char mat [N][N],int *x,int *y){ // saisie des coordonnee pour le joueur 2 

	
	printf("deuxieme joueur :\ncoordonne sur x = ");
	scanf("%i",x);
	printf("coordonne sur y = ");
	scanf("%i",y);
	
	do{
		while(*x<0 || *x>=N){
			printf("coordonne sur x incorrect veuillez recommencer la saisie");
			printf("coordonne sur x = ");
			scanf("%i",x);
		}
		while(*y<0 || *y>=N){
			printf("coordonne sur y incorrect veuillez recommencer la saisie\n");
			printf("coordonne sur y = ");
			scanf("%i",y);
		}
	}
	while(mat[*y][*x] == 'x' || mat[*y][*x] == 'o');
	
	

}
void placement(char mat [N][N],int x,int y,int joueur){ // placement du pions sur la grille

	if(joueur == 1){
		mat [y][x] = 'x';
	}
	else mat [y][x] = 'o';
}
int test_gagner(char mat [N][N],int x,int y,int joueur){ // test pour savoir si apres le dernier coup un des joueur a gagner
	
	int i;
	int j;
	
	for(i=0;i<N;i++){
		for(j=0;j<N;j++){ // probleme avec mes test
			if(y == 0 && x == 0){
				if(mat [y][x] == mat [i+1][j+1] && mat [y][x] == mat [i+2][j+2]){
					return joueur;
				}
				if(mat [y][x] == mat [i+1][j] && mat [y][x] == mat [i+2][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j+1] && mat [y][x] == mat [i][j+2]){
					return joueur;
					
				}
			}
			if(y == 0 && x == 1){
				if(mat [y][x] == mat [i][j+1] && mat [y][x] == mat [i][j-1]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i+1][j] && mat [y][x] == mat [i+2][j]){
					return joueur;
					
				}
			}
			if(y == 0 && x == 2){
				if(mat [y][x] == mat [i+1][j-1] && mat [y][x] == mat [i+2][j-2]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i+1][j] && mat [y][x] == mat [i+2][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j-1] && mat [y][x] == mat [i][j-2]){
					return joueur;
					
				}
			}
			if(y == 1 && x == 0){
				if(mat [y][x] == mat [i-1][j] && mat [y][x] == mat [i+1][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j+1] && mat [y][x] == mat [i][j+2]){
					return joueur;
					
				}
			}
			if(y == 1 && x == 1){
				if(mat [y][x] == mat [i-1][j] && mat [y][x] == mat [i+1][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j-1] && mat [y][x] == mat [i][j+1]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i-1][j-1] && mat [y][x] == mat [i+1][j+1]){
					return joueur;
					
				}
			}
			if(y == 1 && x == 2){
				if(mat [y][x] == mat [i-1][j] && mat [y][x] == mat [i+1][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j-1] && mat [y][x] == mat [i][j-2]){
					return joueur;
					
				}
			}
			if(y == 2 && x == 0){
				if(mat [y][x] == mat [i-1][j+1] && mat [y][x] == mat [i-2][j+2]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i-1][j] && mat [y][x] == mat [i-2][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j+1] && mat [y][x] == mat [i][j+2]){
					return joueur;
					
				}
			}
			if(y == 2 && x == 1){
				if(mat [y][x] == mat [i+1][j] && mat [y][x] == mat [i-2][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j-1] && mat [y][x] == mat [i][j+1]){
					return joueur;
					
				}
			}
			if(y == 2 && x == 2){
				if(mat [y][x] == mat [i-1][j-1] && mat [y][x] == mat [i-2][j-2]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i-1][j] && mat [y][x] == mat [i-2][j]){
					return joueur;
					
				}
				if(mat [y][x] == mat [i][j-1] && mat [y][x] == mat [i][j-2]){
					return joueur;
					
				}
			}
		}
	}
	return 0;
}
void afficher_grille(char mat [N][N]){ // affichage de la grille
	int i;
	int j;
	
	for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			printf(" %c",mat [i] [j]);
		}
		printf("\n");
	}
	printf("\n");
}
/*void afficher_grille_fichier(char mat [N] [N],FILE *fic1){ // afficher les differente etapes de la partie dans un fichier
	int i;
	int j;
	
	for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			fprintf(*fic1," %c",mat [i][j]);
		}
		fprintf(*fic1,"\n");
	}
	fprintf(*fic1,"\n");
}*/
int main () {

	int x; //position du pion
	int y; //position du pion
	int joueur = 1; //pour savoir qui joue
	int gagnant = 0;//pour savoir qui gagne et si il y a un gagnant
	int nb_coup = 0;//pour savoir si la partie c'est finni en match null
	
	char mat [N] [N] = {'_','_','_','_','_','_','_','_','_'};
	//char nom_fichier[50];
	
	printf("\npartie de tic-tac-toe\n");
	/*printf("veuillez saisir le nom du fichier pour les sauvegarde\nnom du ficher = ");
	scanf("%s",nom_fichier);*/

	/*FILE *fic1;
	fic1 = fopen(nom_fichier,"w");
	
	while(fic1 == 0){  // test pour si le fichier existe ou non
        	printf("erreur le fichier n'existe pas\nveuillez recommencer la saisie\n");
       		scanf("%s",nom_fichier);
        	fic1 = fopen(nom_fichier,"r");
   	}*/
	
	afficher_grille(mat);
	while(gagnant == 0 && nb_coup <= 9){
		if(joueur == 1){			// le joueur 1 joue
		
			saisie_coordonne1(mat,&x,&y);
			placement(mat,x,y,joueur);
			gagnant = test_gagner(mat,x,y,joueur);
			joueur++;
		
		}
		else{						// sinon le joueur 2 joue
			saisie_coordonne2(mat,&x,&y);
			placement(mat,x,y,joueur);
			gagnant = test_gagner(mat,x,y,joueur);
			joueur--;
			
		}
		afficher_grille(mat);
		//afficher_grille_fichier(mat,&fic1);
		nb_coup++;
		
	}
	if(gagnant == 1){
		printf("\nfelicitation au joueur 1\nvous avez gagnez !!!\n");
	}
	else if(gagnant == 2) {
		printf("\nfelicitation au joueur 2\nvous avez gagnez !!!\n");
	}
	else printf("\naucun joueur n a gagner\nvous etes nul !!!\n");
	
}