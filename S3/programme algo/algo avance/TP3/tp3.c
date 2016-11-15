#include<stdio.h>
#include<string.h>
#include<stdlib.h>

typedef struct { int x ; int y ; } t_position ;

void init_mat(char matrice_init [8] [8]){
	
	int i;
	int j;

	char nom_fichier[50];

	t_position posi;

	printf("veuillez saisir le nom du fichier pour l'initialisation\ninitialisation = ");
	scanf("%s",nom_fichier);

	FILE *fic1;
	fic1 = fopen(nom_fichier,"r");

	while(fic1 == 0){
        	printf("erreur le fichier n'existe pas\nveuillez recommencer la saisie\n");
       		scanf("%s",nom_fichier);
        	fic1 = fopen(nom_fichier,"r");
   	}

	fscanf(fic1,"%i%i",&posi.x,&posi.y);
	while(!feof(fic1)){
		matrice_init [posi.x] [posi.y] = 'V';
        	fscanf(fic1,"%i%i",&posi.x,&posi.y);
		printf("\n");
	}
	matrice_init [posi.x] [posi.y] = 'V';

	for(i=0;i<8;i++){
		for(j=0;j<8;j++){
			if(matrice_init [i] [j] != 'V'){
				matrice_init [i] [j] = 'M';
			}
		}
	}
	for(i=0;i<8;i++){
		for(j=0;j<8;j++){
			printf(" %c",matrice_init [i] [j]);
		}
		printf("\n");
	}
}

void init_voisin(int matrice_voisin [8] [8],char matrice_init [8] [8]){

	int i;
	int j;
	int nb_voisin = 0;

	for(i=0;i<8;i++){
		for(j=0;j<8;j++){
			if(matrice_init [i-1] [j+] != 0){
				if(matrice_init [i-1] [j+1] == 'V'){
					nb_voisin++;
					printf("%i-",nb_voisin);
				}
				if(matrice_init [i-1] [j] == 'V'){
					nb_voisin++;
					printf("%i-",nb_voisin);
				}
				if(matrice_init [i+1] [j] == 'V'){
					nb_voisin++;
					printf("%i-",nb_voisin);
				}
			}
			
			
			
			
		}
	}
	/*for(i=0;i<8;i++){
		for(j=0;j<8;j++){
			printf(" %i",matrice_voisin [i] [j]);
		}
		printf("\n");
	}*/

}

int main () {

	int i;
	int j;
	int generation;

	char matrice_init [8] [8];
	int matrice_voisin [8] [8];
	char matrice_generation [8] [8];
	
	init_mat(matrice_init);
	init_voisin(matrice_voisin,matrice_init);

	printf("veuillez saisir le nombre de generation a afficher\nnombre de generation = ");
	scanf("%i",&generation);

}









