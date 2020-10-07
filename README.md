
# Projet fil Rouge (Banque)

## Projet de semaine n°8 AFPA Développeur Web

Projet en continu  en **HTML / CSS et JS**

HTML5, CSS3 et JavaScript normes ES6.

Le projet a pour but de mettre en une interface Web en utilisant l'outil de versionning GIT, sur les compétences acquises en HTML, CSS et JavaScript ainsi que l'utilisation du framework Bootstrap 4.

Le projet sera alimenté au cours de la formation avec les nouvelles fonctions acquises, avec une partie back-end et une base de données.

Ci-dessous extrait de l'énoncé :

> ### Spécifications fonctionnelles (semaine n°8)
>
>- Sur l’accueil du site, l’utilisateur voit par défaut tous ses comptes bancaires
>
>- A son arrivée sur l’accueil un layer s’affiche par dessus l’ensemble de la page et lui rappelle les règles de sécurité essentielles sur un site internet. Les règles de sécurité sont stockées dans un fichier et récupérées par requête HTTP (AJAX).
>- Sur une page de statistiques l’utilisateur accède à des informations bancaires comme les taux d’emprunt, le cours de la bourse, ect... Ces informations sont récupérées depuis un fichier via requête HTTP et présentées sous forme de tableau. Ces informations sont stockées dans un fichier au format JSON.
>- Une page de blog, qui affichera des articles récupérés depuis l’API suivante: <https://oc-jswebsrv.herokuapp.com/api/articles>
>
> ### Optionnel si manque de temps
>
>- Sur une page dédiée, un formulaire lui permet de créer un nouveau compte bancaire avec minimum un type de compte (courant, livretA, PEL etc...) et une somme par défaut supérieure à 50 euros
>- Pour chaque compte l’utilisateur peut cliquer sur un lien qui par la suite lui permettra de supprimer le compte
>- Pour chaque compte, l’utilisateur peut, via un formulaire faire un dépôt d’argent
>- Pour chaque compte, l’utilisateur peut, via un formulaire faire un retrait d’argent
>- Sur une page dédiée, à l’aide d’un formulaire, l’utilisateur peut réaliser un virement d’un compte àun autre. Il peut donc sélectionner un compte A à débiter, indiquer un montant et sélectionner le compte B à créditer. Il ne peut sélectionner que ses propres comptes.
>
> ### Spécifications techniques (semaine n°8)
>
>- HTML5
>- CSS3
>- Framework Boostrap4
>- Base Boilerplate
>- JavaScript avec respect des normes ES6
>- Vous avez produit des maquettes de type wireframe simples pour au moins une des pages
>- Vous avez produit une arborescence fonctionnelle de l’application reprenant les cas d’utilisationpossible de la page
>- Vos wireframes sont accessibles dans un dossier DOC
>- Votre interface est responsive sur tous les supports
>- Vous respectez le principe DRY
>- Votre code est commenté
>- Votre code est hébergé sur GitHub
>- Vous avez fait usage d’un logiciel de versionning
>- Votre site est hébergé via une GH-page
>- Le repository contient un readme, une description et des tags
>- Vous utilisez un outil de gestion de projet de type KANBAN. Idéalement pour chaque tâche vous estimez le temps et la priorité et vous vous mettez dans la peau de l’utilisateur.

## Projet de semaine n°12 AFPA Développeur Web

Ajout de **PHP** (version 7)

> ### Spécifications fonctionnelles (semaine n°12)
>
>- Afin de gagner en maintenabilité, le template n’est plus dupliqué sur toutes les pages. Il est maintenant éclaté dans des fichiers header.php, nav.php, footer.php etc chargés sur chacune des pages.
>
>- Les données pour affichées les comptes en banque sur la page d’accueil sont maintenant stockées dans un tableau (cf ficher externe joint), et une boucle affiche tous les comptes. Ceux-ci ne sont plus écrits en dur dans le HTML
>- Quand on clique sur un compte en banque, on arrive sur une page spécifique dédiée au compte et qui n’affiche que les informations de ce compte. Cette fonctionnalité utilise la transmission de données par l’URL.
>- Quand l’utilisateur remplit le formulaire de création de compte et qu’il soumet le formulaire, le compte est créé à côté du formulaire avec les informations rentrées par l’utilisateur
>
> ### Spécifications techniques (semaine n°12)
>
>- PHP 7
>- Serveur Apache2
>- Base Boilerplate

## Projet de semaine n°13 AFPA Développeur Web

Ajout d'une **base de données**.

> ### Spécifications fonctionnelles (semaine n°13)
>
>- L’application n’est accessible qu’aux seuls utilisateurs connectés
>- Quand un utilisateur non connecté va sur l’application il est redirigé vers une page de connexion avec un formulaire
>- Un utilisateur se connecte à l’aide d’une adresse mail et d’un mot de passe
>- Une fois connecté, l’utilisateur voit uniquement ses comptes en banque personnels
>- Quand l’utilisateur clique sur un compte en banque, il arrive sur une page dédié au compte où il voit les informations du compte mais aussi les dernières opérations effectuées sur le compte
>
> ### Spécifications techniques (semaine n°13)
>
>- SGBD: MySQL
>
>
> **Vous rendrez un fichier SQL appelez banque_php.sql.**
>
> Ce fichier devra:
>
>- créer une base de données nommée banque_php mais aussi supprimer tout base de données pré-existante nommée banque_php de tel sorte que votre fichier puisse toujours être importé sans conflit
>- créer un utilisateur nommé banquePHP et supprimer tout utilisateur pré-existant portant le même nom. Vous êtes libres de choisir son mot de passe. Cet utilisateur ne doit avoir les droits que sur la base de données banque_php (autrement-dit il n’a pas accès aux éventuelles autres bases de données).
>- Créer les tables nécessaires à l’application avec les types de données  qui vous semblent les plus pertinents et efficaces- Insérer dans chaque table au moins 2 lignes

## Projet de semaine n°14 AFPA Développeur Web

Intégrer une **base de données** dans son application PHP.

> ### Spécifications fonctionnelles (semaine n°14)
>
>- L’application n’est accessible qu’aux seuls utilisateurs connectés
>- Quand un utilisateur non connecté va sur l’application il est redirigé vers une page de connexion avec un formulaire
>- Un utilisateur se connecte à l’aide d’une adresse mail et d’un mot de passe
>- Un utilisateur connecté peut se déconnecter
>- Une fois connecté, l’utilisateur voit uniquement ses comptes en banque personnels. Pour l’instant il ne voit pas la dernière opération effectuée sur le compte, juste les comptes avec leurs informations.
>- Quand l’utilisateur clique sur un compte en banque, il arrive sur une page dédié au compte où il voit les informations du compte mais aussi les dernières opérations effectuées sur le compte
>- Via une page dédiée un utilisateur peut créer un nouveau compte personnel à l’aide d’un formulaire. Une fois créé le compte apparaît sur la page d’accueil. Attention le compte doit respecter les conditions minimum de création de compte (bon type et bon montant)
>- L’utilisateur peut effectuer des dépôts ou des retraits sur le compte de son choix.  Le montant du compte est alors mis à jour et une nouvelle opération est enregistrée sur le compte.
>
> ### Spécifications techniques (semaine n°14)
>
>- PHP7
>- Utilisation de PDO pour se connecter à la base de données
>- SGBD: Mysql
>- Serveur: Apache2
>
>Vous réaliserez une arborescence fonctionnelle du site avec les pages et les actions réalisables sur ces pages.
>

&nbsp;

&nbsp;

     Vous trouverez dans la branche Master le projet de base fonctionnel.

 &nbsp;
