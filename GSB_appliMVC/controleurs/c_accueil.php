<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Tiphaine DEMAIRY
 * @version   GIT: <0>
 */

if ($estConnecte) {
    //Si l'utilisateur est un comptable è afficher l'acceuil Comptable
    if ($_SESSION['type']=="comptable"){
        include 'vues/v_accueilComptable.php';
    //Sinon afficher l'accueil classique
    } else {
        include 'vues/v_accueil.php';
    }
// Si l'utilisateur n'est pas connecté, afficher page de connection
} else {
    include 'vues/v_connexion.php';
}
