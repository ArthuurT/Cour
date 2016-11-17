# Pull requests

## Github et pull request

Nous allons voir ici comment contribuer à un projet que vous n'avez pas créé.

* [Configurez Git pour GitHub](http://help.github.com/set-up-git-redirect/)
* [Assurez-vous d'avoir vos clés ssh de configurées](https://help.github.com/articles/generating-ssh-keys/)
* Dupliquez (*fork*) le projet tp-conduite-projet-2014 dans votre espace (à vous de trouver le bouton sur la page).
* Récupérez sur votre disque dur les sources de votre projet que vous venez de dupliquer dans votre espace.

        git clone https://github.com/votrecompte/tp-git-initiation.git

* Indiquez le dépôt Git officiel (le mien) :

        cd tp-git-initiation
        git remote add official https://github.com/vjousse/tp-git-initiation.git

* Combien de *remote* (dépôt Git distant) avez-vous ? Comment faire pour le savoir ?

* Sur votre disque dur, ajoutez à la fin de ce fichier le prénom et le nom d'un des membres du binôme. La ligne doit commencer par une étoile. Corrigez la liste pour que la dernière ligne se termine par un point et les autres par des virgules.

* Faites une révision :

        git add README.md
        git commit -m "Un joli message"

* Publiez-la dans votre espace public:

        git push

* Vérifiez sur Github que votre commit a bien été envoyé.

* Dans GitHub faites une demande d'intégration (*pull request*) pour m'envoyer vos modficactions.
* Ajoutez le prénom et le nom de l'autre membre du binôme selon les mêmes règles que tout à l'heure.
* Faites une révision :

        git add README.md
        git commit -m "Un autre joli message"

* Mettez à jour votre disque dur jusqu'à ce que vous récupériez les modifications de quelqu'un d'autre. Ne le faites qu'une fois que vous avez pu réaliser la révision (commit) ci-dessus.

        git pull official master

* Vous devriez avoir un conflit lors de la fusion (merge). Réglez ce conflit. Modifiez la mise en page de la liste pour qu'elle soit correcte.
* Une fois que le conflit est réglé par une révision (git add, git commit), publiez l'ensemble des révisions dans votre espace public :

        git push

* Dans GitHub faites une demande d'intégration (pull request).

## Bitbucket

* Créez un compte sur [Bitbucket](https://bitbucket.org/).

* Essayez de reproduire les étapes vues pour Github. Le dépôt sur Bitbucket se situe ici : [https://bitbucket.org/vjousse/tp-conduite-projet-2014](https://bitbucket.org/vjousse/tp-conduite-projet-2014).

* Pouvez-vous pousser votre code qui est actuellement sur Github directement sur Bitbucket ? Si oui, comment ?



## Remerciements

Fortement inspiré du [TP d'Aurélien Bénel](https://github.com/benel/TP-Git).

# Branches

## Branchage simple

* Partez d'un de vos projets git local et créez une branche nommée `test-branch`.
* Créez un fichier `test.txt` et mettez-y une ligne de texte.
* Créez une version
* Rajoutez une deuxième ligne et créez une autre version
* Fusionnez ce code avec la branche principale (master), et supprimez la branche `test-branch`.

## Fusion

* Partez d'un de vos projets git local et créez une branche nommée `test-merge-branch`.
* Créez un fichier `test.txt` et mettez-y une ligne de texte.
* Créez une version
* Retournez sur la branche master et créez un fichier `test.txt`.
* Ajoutez une ligne de texte et créez une version
* Fusionnez la branche  `test-merge-branch` avec `master`. Que se passe-t-il ?
* Supprimez la branche `test-merge-branch`

## Envoi de branche

* Partez d'un de vos projets git local et créez une branche nommée `test-push-branch`.
* Créez un fichier `test.txt` et mettez-y une ligne de texte.
* Créez une version
* Envoyez cette branche sur Github. Vérifiez qu'elle a bien été envoyée.
* Supprimez la branche `test-push-branch`
* A-t-elle été supprimée sur Github ? Faites en sorte qu'elle le soit


## Branchage multiple

* Partez d'un de vos projets git local et créez une branche nommée `test-multi1-branch`.
* Créez un fichier `test.txt` et mettez-y une ligne de texte.
* Créez une version
* Envoyez cette branche sur Github. Vérifiez qu'elle a bien été envoyée.
* Créez une branche `test-multi2-branch` à partir du dernier commit de votre branche `test-multi1-branch`.
* Ajoutez une ligne au fichier `test.txt` et créez une version.
* Envoyez le tout sur Github et regardez le graph des branches sur le site de Github.
* Fusionnez `test-multi2-branch` avec `test-multi1-branch`.
* Sur `test-multi1-branch` rajouter une 3 ème ligne à `test.txt` et créez une version.
* Fusionnez `test-multi1-branch` avec `master` et envoyez le tout sur Github.



yann ghistelinck,
* Said Ousmanov.
