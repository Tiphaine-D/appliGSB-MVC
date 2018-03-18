<?php
/**
 * Vue Accueil pour les comptables
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Tiphaine DEMAIRY 
 * @version   GIT: <0>
 */
?>
<div id="accueil">
<!--Afficher le type d'utilisateur, son prénom et son nom  -->
    <h2>
        Gestion des frais<small> - 
            <?php 
            echo $_SESSION['type'] . ' : ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom']
            ?></small>
    </h2>
</div>
<!--Afficher le menu de navigation avec les boutons spécifiques au comptable  -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- lien de la page validationFicheFrais  -->
                        <a href="index.php?uc=validerFrais&action=voirEtatFrais"
                           class="btn btn-success btn-lg" role="button">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Valider les fiches de frais</a>
                        <!-- lien de la page suiviPaiementFrais  -->
                        <a href="index.php?uc=suivrePaiements&action=voirFichesValidees"
                           class="btn btn-primary btn-lg" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>Suivre le paiement des fiches de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
