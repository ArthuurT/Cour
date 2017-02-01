#include <stdio.h>
#include <string.h>
#include <math.h>
#include <curses.h>
#include <stdlib.h>
#include <time.h>
#include <unistd.h>
#include <ncurses.h>

int taille_terminal(){

  if(LINES < 36 || COLS < 179){
    endwin();
    printf("\n\n");
    printf("Votre terminal est trop petit.\n");
    printf("Il fait %i colonnes et %i lignes.\n",COLS,LINES);
    printf("Veuillez le redimensionner pour avoir au moins.\n");
    printf("180 colonnes et 37 lignnes. Puis relancer.\n");
    printf("\n\n");
    return 0;
  }else{
    return 1;
  }
}

int main (){

  initscr();
  noecho();
  curs_set(0);

  if(taille_terminal()){

    int startxF, startyF, widthF, heightF;/* Initialisation des variables pour la création de la 1ère fenêtre */
    int startxS, startyS, widthS, heightS;/* Initialisation des variables pour la création de la 2ème fenêtre */
    int startxT, startyT, widthT, heightT;/* Initialisation des variables pour la création de la 3ème fenêtre */

    WINDOW * F_win;
    WINDOW * S_win;
    WINDOW * T_win;

    heightF = 31;   /* Dimensions et Position de la 1ère fenêtre */
    widthF = 30;
    startyF = 2 ;
    startxF = 5 ;

    heightS = 31;   /* Dimensions et Position de la 2ème fenêtre */
    widthS = 90;
    startyS = 2 ;
    startxS = 39 ;

    heightT = 31;    /* Dimensions et Position de la 3ème fenêtre */
    widthT = 36;
    startyT = 2 ;
    startxT = 134 ;


    F_win=create_newwin(heightF,widthF,startyF,startxF,"ConditionsInitiales");
    S_win=create_newwin(heightS,widthS,startyS,startxS,"Signal");
    T_win=create_newwin(heightT,widthT,startyT,startxT,"Menu");
    refresh();
  }

}
