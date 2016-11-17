# Prise en main

Nous allons utiliser [Github](http://github.com) et [Bitbucket][http://bitbucket.org]. Commencez par créer un compte sur chacun de ces services.

## Configurez votre git local

Dites-lui comment vous vous appelez :

    git config --global user.name "Votre nom/surnom"

Vous pouvez vérifier que ça a bien fonctionné avec :

    git config --global user.name

Faites de même pour votre email (de préférence celui que vous avez utilisé pour vous inscrire aux services ci-dessus).

    git config --global user.email "votre_email@exemple.com"

Et on vérifie avec :

    git config --global user.email


## Créez votre premier dépôt local

- Créez un dépôt à partir d'un répertoire contenant déjà des fichiers
- Ajoutez tous ces fichiers dans une version
- Utilisez `git log` pour voir l'historique de vos versions
- Créez une nouvelle version (en modifiant de nouveaux fichiers)
- Utilisez `git log -p` pour voir l'historique et les différences.

## Envoyez ce dépôt sur Github

- Créez un dépôt distant (open source) sur Github pour votre projet. __Attention, ne créez pas de `.gitignore` ou de `README` par défaut__.
- Faites en sorte d'envoyer les modifications de votre dépôt local sur Github.

## Récupérer un dépôt Github

- Choisissez le dépôt d'un de vos voisins et récupérez le en local.
- Faites un changement, créez une nouvelle version.
- Essayez d'envoyer cette version sur Github. Que se passe-t-il ? Pourquoi ?
- À votre avis, comment-faire pour que cela fonctionne ?

## Retour vers le futur

- Placez vous dans un répertoire contenant un dépôt avec au moins deux versions.
- Utilisez `git log` pour voir l'historique de vos versions, vous devriez avoir quelque chose qui ressemble à ça :

```
    commit c2465a840d73587e4f83b301d4229e3c1a1befcf
    Author: Vincent Jousse <vincent@jousse.org>
    Date:   Tue Oct 27 22:04:02 2015 +0100

        Display multiple translations available for one post

    commit 09834fa3a4db01b7b056466c1a51bce96b575a88
    Author: Vincent Jousse <vincent@jousse.org>
    Date:   Tue Oct 27 22:03:49 2015 +0100

        Translate section index
```

- Faites un `ls` pour voir l'état actuel de votre répertoire.
- Revenez au tout premier commit en faisant `git checkout 09834fa3a4db01b7b056466c1a51bce96b575a88`. Remplacez évidemment le numéro du commit par le votre.
- Faites un `ls` et regardez vos fichiers. Ils devraient être revenus dans l'état où ils étaient au premier commit.
- Pour revenir au dernier commit, faites `git checkout master`.

## Clés SSH

Il n'a pas du vous échapper qu'à chaque fois que vous voulez envoyer une modification sur Github, il vous demande à chaque fois votre mot de passe. C'est sympa 5 minutes, mais à la longue ça devient vite inutilisable. Il existe un moyen d'éviter cela : au lieu de vous authentifier par login/mot de passe, Git peut vous authentifier grâce à vos clés SSH. Si vous ne savez pas ce que c'est (je ne connais pas par cœur vos cours de réseau et votre niveau) n'hésitez pas à me demander : c'est quelque chose d'important à connaître (et qui n'est pas spécifique à Git).

Pour les instructions, pas la peine de réinventer la roue, [Github a un très bon tutoriel là dessus](https://help.github.com/articles/generating-ssh-keys/)

*TROTTIER Arthur.

