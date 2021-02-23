<?php

/**
 * Créez via PhpMyAdmin une nouvelle base de données table_test_phpmyadmin
 * Toujours via PhpMyAdmin, créez dans cette base de données deux nouvelles tables   utilisateur  ET   produit
 *
 * La table "utilisateur" doit contenir les champs suivants :
 *   - id           --> non signé et auto incrémenté
 *   - nom          --> non null, taille 50
 *   - prenom       --> non null, taille 50
 *   - email        --> non null, taille 100 et unique
 *   - password     --> non null, taille 100
 *   - adresse      --> non null, taille 255 ( équivaut au maximum )
 *   - code postal  --> non null... a vous de choisir le reste.
 *   - pays         --> non null, taille selon votre choix
 *   - date_join    --> .... no comment :-) et par défaut la date du jour.
 *
 * La table "produit" doit contenir les champs suivants :
 *   - id                  --> a vous de choisir
 *   - titre               --> a vous de choisir
 *   - prix                --> ... un prix doit pouvoir contenir des centimes, p.ex: 3,45 ( dans le cadre d'un prix en base de données on se moque de la devise )
 *   - description_courte  --> ... 255 caractères maximum, trouvez le meilleur type.
 *   - description_longue  --> ... plus de 255 caractères, trouvez le bon type.
 *
 * Bien qu'un gros indice soit donné à chaque fois, utilisez le type le plus approprié selon vous !
 *
 * Envoyez moi une capture d'écran des deux tables via Discord.
 */

// FIXME => Aucun code pour cette partie de l'exo, tout se passe sur PhpMyAdmin.




/**
 * Créez via PhpMyAdmin une nouvelle base de données table_test_php
 * Créez dans cette base de données deux nouvelles tables   utilisateur  ET   produit VIA PHP, en passant par une requête.
 *
 * La table "utilisateur" doit contenir les champs suivants :
 *   - id
 *   - nom
 *   - prenom
 *   - email
 *   - password
 *   - adresse
 *   - code postal
 *   - pays
 *   - date_join
 *
 * La table "produit" doit contenir les champs suivants :
 *   - id
 *   - titre
 *   - prix
 *   - description_courte
 *   - description_longue
 *
 * Si vous estimez avoir fais le bon choix des types dans l'exo 1, alors vous pouvez les réutiliser.
 *
 * Gardez ce code en local et envoyez moi le lien de votre repo Github pour que je puisse vérifier votre requête...
 */

// TODO Votre code ici.

try {
    $server = 'localhost';
    $db = 'table_test_phpmyadmin';
    $user = 'root';
    $pass = ''; //pas de mdp

    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user , $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectés";
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}
