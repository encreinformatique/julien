---
id: 1721fdb2-cf5f-49dc-a20f-5b36add131eb
blueprint: page
title: "PHPStorm et Mac OS, à la limite de l'utilisable ?"
description: "Depuis près d'un an, l'utilisation de PHPStorm sur Mac OS est de plus en plus compliqué."
excerpt: "L'indexaction fréquente de PHPStorm pose d'énormes problèmes sur Mac OS."
publication: '2022-02-10'
---
Depuis plusieurs années, j’utilise PHPStorm de JetBrains pour tous mes projets PHP. C’est un IDE très complet qui offre un environnement de travail solide. J’étais auparavant sur Windows, mais cela fait maintenant presque quatre ans que je suis passé sur Mac — avec des résultats parfois mitigés. Côté environnement de développement, j’utilise Docker. Certains diraient que j’aime me compliquer la vie, mais ce n’est pas le cas ! C’est en réalité bien plus simple à gérer que Vagrant, que j’utilisais avant.

## Des lenteurs et maintenant des freeze

L'indexation de PHPStorm sur Mac OS est un problème connu depuis longtemps. (voir [ici](https://intellij-support.jetbrains.com/hc/en-us/community/posts/360010117759-PHPStorm-2020-3-very-slow) ou [là](https://stitcher.io/blog/phpstorm-performance))
Cette indexation permet justement à l'IDE de retrouver les fichiers rapidement, de proposer l'aide sur les classes et fichiers et de proposer une auto-complétion
efficace.

Sur certains projets, on combine une API en PHP et une interface en JavaScript — souvent en VueJS. Et c’est justement en travaillant sur certains fichiers Vue que PHPStorm commence à faire des siennes : il se fige pendant de longues secondes, plusieurs fois par heure. Autant dire qu’au bout d’une journée, ça devient franchement pénible.

Ajoute à ça l’indexation des fichiers sur un projet un peu costaud, et la conception douteuse du MacBook Pro (double écran mal géré, ventilation aux abonnés absents), et tu obtiens un joli cocktail explosif : CPU qui tape les 90°, ventilo en mode réacteur d’avion…

Précision importante : l’ordi est posé sur un support, avec circulation d’air en dessous. Donc non, je ne bosse pas avec sur les genoux ou posé sur une table en verre, promis !

<img width="305" alt="macbookpro-temperatures" src="https://user-images.githubusercontent.com/22235605/153456504-1a7f71e5-b6a6-469e-8251-388bc73eb94d.png">

Pour résumer jusqu'ici, en utilisant **Docker**, **PHPStorm** et **MacBook Pro avec Intel**, j'obtiens un ordinateur qui chauffe rendant la touch bar inutilisable (bon, l'usage est limité) et qui s'éteind en mode sécurité si jamais j'ai eu la brillante idée de travailler sur batterie ou si je suis en déplacement.  
A qui la faute ? Ça se discute. Quelque part, cela m'est égal mais je considère que ça devrait mieux fonctionner surtout qu'une simple recherche sur [DuckDuckGo](https://duckduckgo.com/?q=phpstorm+slow+macos&t=h_&ia=web) montre que je suis loin d'être le seul à avoir ce genre de problèmes.

## Morale de l'histoire

J’ai contacté le support de JetBrains à plusieurs reprises. Honnêtement, je n’en attendais pas grand-chose au départ… Mais bonne surprise : leur support est très réactif, vraiment. Le fait de pouvoir extraire et envoyer des logs directement depuis PHPStorm facilite clairement les échanges.

J’ai pu discuter avec plusieurs membres de l’équipe support, selon les périodes. Ils prennent le temps d’ouvrir des tickets, de proposer des réglages à tester ou d’identifier si le souci est bien un bug. C’était justement le cas avec certains ralentissements liés aux fichiers VueJS. Il faut dire que PHPStorm reste d’abord conçu pour le PHP — pour du JavaScript côté frontend, la bonne pratique voudrait plutôt qu’on utilise WebStorm. Mais leurs IDE sont plutôt polyvalents, ce qui permet de faire pas mal de choses dans un seul environnement.

Le problème semble d’ailleurs avoir été corrigé dans la dernière version à ce jour (2021.3.2). À voir sur la durée, en travaillant à nouveau sur ce type de projets.

Morale de l’histoire : si vous avez un souci, contactez le support. Et si vous le pouvez, facilitez-leur le travail en partageant les infos et manipulations demandées. Ça peut vraiment faire la différence.
