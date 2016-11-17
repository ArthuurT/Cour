# Le projet et ses outils

Nous avons principalement vu Git jusqu'ici. Mais le code ne fait pas tout un projet, ça n'en est même qu'une infime partie. Comme nous l'avons vu en cours, la réussite d'un projet repose principalement sur la communication. 

Nous allons donc passer ce TP à nous familiariser avec différents outils facilitant la communication dans un projet. Ils n'ont pas tous la même importance lorsque vous travaillez ensemble dans un même lieu (notamment le chat). En revanche, si vous travaillez à distance/faites du télétravail, ils seront tous indispensables.

Nous allons voir la suite d'outils créée par Atlassian, l'entreprise qui gère bitbucket. Libre à vous par la suite de trouver des outils similaires qui correspondraient mieux à vos besoins.

## HipChat

[HipChat](https://www.hipchat.com/) est un logiciel de discussion en ligne permettant des discussions en temps réel aussi bien qu'en différé. Il présente plusieurs avantages :

- Discussion temps réel
- Discussion en différé (on laisse des messages)
- Discussion audio/vidéo
- Discussion par sujets/salles
- Intégration à Git et à plein d'autres outils
- Clients pour toutes les plateformes

Il va servir de base à la « cohésion » de l'équipe du projet.

Créez vous un compte sur HipChat et faites en sorte de créer une « équipe de projet » avec plusieurs de vos voisins. Amusez-vous à chater ensemble dessus, faites des « salles » par sujet de discussion. Une salle « générale » où les émoticones et autres lolcat pourront s'exprimer. Puis créez deux autres salles, une pour le « code », l'autre pour la « documentation ».

Faites en sorte de garder HipChat ouvert dans un onglet pendant toute la durée du TP.

## Création du dépôt de test

Créez un nouveau dépôt sur [Bitbucket](http://bitbucket.org), ça sera notre dépôt de test pour tout le TP. Inventez un « faux » projet, ou servez-vous d'un projet que vous avez déjà à gérer. Lors de la création du dépôt, cochez les onglets _Gestion de bug_ et _Wiki_.

## Documentation

Il y a toujours plusieurs niveaux de documentation sur un projet. Le simple fichier README (LISEZ-MOI) qui décrit comment installer le code, puis une documentation plus exhaustive pouvant contenir plein de choses : des informations techniques, mais aussi plus générales sur le fonctionnement du projet, des équipes, …

### README

Créez (si ce n'est pas déjà fait) un fichier `README.md` à la racine de votre projet et mettez-y les instructions pour installer/compiler votre projet. Ces instructions doivent être écrites pour qu'une personne ne connaissant pas le projet soit capable de l'installer. L'extension `.md` représente des fichiers écrits au [format Markdown](https://fr.wikipedia.org/wiki/Markdown). C'est un simple formattage texte (type wiki) qui est utilisé un peu partout maintenant pour les fichiers README (car bitbucket/Github les mettent en page directement). Ce fichiers est d'ailleurs écrit sous ce format.

Faites en sorte d'avoir un fichier `README.md` bien fourni avec des sections, des sous-sections, des choses en gras/italique, des listes et des bouts de code (avec coloration syntaxique).

### Doc wiki

Allez sur le Wiki qui a été créé pour votre dépôt et créez plusieurs pages que vous allez lier entre elles. 

Il y a plusieurs manières de créer des pages, vous pouvez le faire directement sur l'interface Bitbucket en se servant du lien « Éditer » en haut à droite ou alors en clonant le dépôt (il devrait vous donner les instructions sur la page d'accueil de votre Wiki). Commencez par rajouter des pages via l'interface puis ensuite faites-le en clonant le Wiki sur votre machine et en modifiant les fichiers localement. Envoyez ensuite via git les nouvelles pages.

## Gestionnaire de tâches/bugs

Un projet sans bug et/ou tâche à faire, ce n'est pas un projet. C'est pour ça que tout projet qui se respecte a son propre gestionnaire de bug (bug tracker).

Si vous avez bien créé votre projet en cochant la case _Gestion de bug_, vous devriez avoir un onglet « Signalement de bug » dans la colonne de gauche de votre projet. Créez des tâches pour votre projet et assignez-les aux différents membres. Faites preuve de curiosité en regardant ce que résoudre un bug veut dire, en regardant ce que vous pouvez faire avec le bouton « Flux de travail » d'un bug.

## Lier tout cela

Tous ces outils peuvent être liés entre eux. Vous pouvez, dans un message de commit, faire référence à un bug du bug tracker. Vous pouvez, à chaque commit, bug ou autre évènement sur Bitbucket, l'afficher dans un canal Hipchat particulier.

Essayer de :

- Référencer un bug (créé préalablement dan le bug tracker) dans un message de commit
- Afficher les commits dans un canal Hipchat
- Afficher les signalements de bug dans un canal Hipchat

Ces différentes pages devraient pouvoir vous être utiles : [Mark up comments, issues, and commit messages](https://confluence.atlassian.com/bitbucket/mark-up-comments-issues-and-commit-messages-321859781.html), [Integrating with Bitbucket](https://confluence.atlassian.com/hipchat/integrating-with-bitbucket-757467075.html).
